var express = require('express');
var router = express.Router();
const User = require('../models/user.model');
const passport = require('passport');
const jwt = require('jsonwebtoken'); 
const bcrypt = require('bcryptjs'); 
const keys = require('../config/keys');


const validateRegInput = require('../validation/register');
const validateLogInput = require('../validation/login');



// renders login page
router.get('/login', function(req, res){ 
    res.render("login"); 
}) 





router.get('/secret', function(req, res){ 
    res.render("register"); 
})


router.post("/login", (req, res) => {
  // Form validation
const { errors, isValid } = validateLogInput(req.body);
  if (!isValid) {
    return res.status(400).json(errors);
  }
  const email = req.body.email;
  const password = req.body.password;


// Find user by email
User.findOne({ email }).then(user => {
    // Check if user exists
    if (!user) {
      return res.status(404).json({ emailnotfound: "Email not found" });
    }


// Check password
    bcrypt.compare(password, user.password).then(isMatch => {
      if (isMatch) {
        // User matched
        // Create JWT Payload
        const payload = {
          id: user.id,
          name: user.name
        };

        
// Sign token
        jwt.sign(
          payload,
          keys.secretOrKey,
          {
            expiresIn: 31556926 // 1 year in seconds
          },
          (err, token) => {
              /*
            res.json({
              success: true,
              token: "Bearer " + token
            });
            */
             return res.redirect('/homevr'); 
          }
        );
       
      } else {
        return res
          .status(400)
          .json({ passwordincorrect: "Password incorrect" });
      }
    });
  });
});


router.get('/logout', function (req, res) {
	req.logout();
	res.redirect('/');
});


// renders register page
router.get('/register', function(req, res){ 
    res.render("register"); 
})

router.post("/register", (req, res) => {
  // Form validation
const { errors, isValid } = validateRegInput(req.body);
// Check validation
  if (!isValid) {
    return res.status(400).json(errors);
  }
User.findOne({ email: req.body.email }).then(user => {
    if (user) {
      return res.status(400).json({ email: "Email already exists" });
    } else {
      const newUser = new User({
        name: req.body.name,
        email: req.body.email,
        password: req.body.password
      });
// Hash password before saving in database
      bcrypt.genSalt(10, (err, salt) => {
        bcrypt.hash(newUser.password, salt, (err, hash) => {
          if (err) throw err;
          newUser.password = hash;
          console.log(newUser);
          newUser
            .save()
            .then(res.redirect('login'))
            .catch(err => console.log(err));
        });
      });
    }
  });
});






module.exports = router;
