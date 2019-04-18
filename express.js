'use strict'
var express = require("express");
var bodyParser = require("body-parser");
app.use(bodyParser.urlencoded({ extended: true }));
var fs = require("fs");

var login = fs.readFileSync("account.json");
var accounts = JSON.parse(login);
console.log(accounts)

var app = express();

app.use(bodyParser.urlencoded({extended:true}));

app.get('/', function(req,resp){
	resp.sendFile(__dirname + "/index.html")

});

app.get('/sign-up.html', function(req,resp){
resp.sendFile(__dirname + "/sign-up.html")
});

app.get('/account.html', function(req,resp){

		var test = req.body.loginName;
		console.log(test);
		resp.sendFile(__dirname + "/account.html")
	
});

app.get('/withdraw.html', function(req,resp){
resp.sendFile(__dirname + "/withdraw.html")
});

app.get('/deposit.html', function(req,resp){
resp.sendFile(__dirname + "/deposit.html")
});

app.get('/transfer.html', function(req,resp){
resp.sendFile(__dirname + "/transfer.html")
});




app.listen(3000)