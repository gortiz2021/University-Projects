var createError = require('http-errors');
var express = require('express');
var path = require('path');
var cookieParser = require('cookie-parser');
var logger = require('morgan');
var mongoose = require('mongoose'); 
var bcrypt = require('bcryptjs');
var session = require('express-session'); 
var passport = require('passport'); 
var localStrategy = require('passport-local').Strategy; 

var app = express();

// view engine setup
app.set('views', path.join(__dirname, 'views'));
app.set('view engine', 'ejs');

// middleware
app.use(logger('dev'));
app.use(express.json());
app.use(express.urlencoded({ extended: true }));
app.use(cookieParser());
app.use(express.static(path.join(__dirname, 'public')));
app.use(session({
  secret:'secret',
  resave: false, 
  saveUnitialized: true
}));

var indexRouter = require('./routes/index');
app.use('/', indexRouter);

const users = require("./routes/users"); 
app.use('/users', users);

// passport stuff 
app.use(passport.initialize()); 
app.use(passport.session()); 


//mongo db stuff
const uri = 'mongodb://Alex:Turtle52@18.232.32.128/entertainment'; // this shouldn't be how it's done, should be put into an .env file but i couldn't get it to work so use your own. 
mongoose.connect(uri, { useNewUrlParser: true, useCreateIndex: true, useUnifiedTopology: true, useFindAndModify: false}
);
  
const connection = mongoose.connection;
connection.once('open', () => {
  console.log("MongoDB database connection established successfully");
})


module.exports = app;
