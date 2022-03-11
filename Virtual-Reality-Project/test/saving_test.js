const mocha = require('mocha'); 
const assert = require('assert'); 
const testuser = require('../models/test.user.model');

describe('Saving records', function(){
    
    // creates a test
    it('saves a record to the database', function(done){ 
        var char = new testuser({
            name:'john deere',
            email:'johndeere@mail.com',
            password:'password123'
        });
        
        char.save().then(function(){
            // isNew is a boolean that will return true or false. 
            assert(char.isNew === false); 
            done(); 
        })
        
        
        
    });
    
    // next test
});