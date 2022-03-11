const mongoose = require('mongoose');

const Schema = mongoose.Schema;

const userSchema = new Schema({
  
  name:{
    type: String,
    required: true,
    unique: true,
    minlength: 2
  },
  
  email:{
    type: String,
    required: true,
    unique: true
  },
  password: {
    type: String,
    required: true,
    unique:false,
    trim: false,
    minlength: 1
  },
  
}, {
  timestamps: true,
});


const User = mongoose.model('students', userSchema);

module.exports = User;