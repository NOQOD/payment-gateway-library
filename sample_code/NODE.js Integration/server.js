var express = require("express")
var bodyParser = require("body-parser")
var ejs = require("ejs")
var path = require("path")
var app = express()
 app.use(bodyParser.urlencoded({ extended: false }))
 app.set('view engine', 'ejs') 
 app.use(require('expressjs.routes.autoload')(path.join(__dirname, './routes'), true));
 app.listen(8080, (err)=>{
	if(err){
		console.log("error in setting Server ", err)
	}
	else{
		console.log("Server listening to port 8080")
	}
 })