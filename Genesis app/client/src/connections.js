
var express = require('express');
var app = express();

app.get('/', function (req, res) {
   
    var sql = require("mysql");

    // config for your database
    var config = {
        user: 'GenesisCreators',
        password: 'wewillpassthisclass',
        server: 'jdbc:postgresql://genesisdatabasethesecondcoming.crlaiqpdndku.us-east-2.rds.amazonaws.com:5432/GenesisCreators', 
        database: 'user_info' 
    };

    // connect to your database
    sql.connect(config, function (err) {
    
        if (err) console.log(err);

        // create Request object
        var request = new sql.Request();
           
        // query to the database and get the records
        request.query('select * from Student', function (err, recordset) {
            
            if (err) console.log(err)

            // send records as a response
            res.send(recordset);
            
        });
    });
});

var server = app.listen(5000, function () {
    console.log('Server is running..');
});