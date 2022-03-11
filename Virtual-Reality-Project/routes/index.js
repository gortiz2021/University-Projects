var express = require('express');
var router = express.Router();

// get login page because that is going to be our "home" screen
router.get('/', function(req, res, next) {
  res.render('register');
});

router.get('/homevr', function(req, res, next) {
  res.render('home');
});

router.get('/linkPages', function(req, res, next) {
  res.render('link_pages');
});

router.get('/Music', function(req, res, next) {
  res.render('Music');
});

router.get('/Carnival', function(req, res, next) {
  res.render('Carnival');
});

router.get('/exitRooms', function(req, res, next) {
  res.render('Exit_rooms');
});

router.get('/Cinema', function(req, res, next) {
  res.render('Cinema');
});

router.get('/Info', function(req, res, next) {
  res.render('Info');
});



router.get('/playpauseAudio', function(req, res, next) {
  res.render('play_pause_audio');
});

router.get('/playpauseVideo', function(req, res, next) {
  res.render('play_pause_video');
});


module.exports = router;