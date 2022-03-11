const mongoose = require('mongoose'); 

const uri = 'mongodb://Alex:Turtle52@18.232.32.128/entertainment'; // this shouldn't be how it's done, should be put into an .env file but i couldn't get it to work so use your own. 
mongoose.connect(uri, { useNewUrlParser: true, useCreateIndex: true, useUnifiedTopology: true, useFindAndModify: false}
);