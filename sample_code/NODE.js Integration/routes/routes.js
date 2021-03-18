var express = require("express")
var app = express()
module.exports = function(app){

  app.get('/', function (req, res) {
   res.render('./Noqod_payment_form.ejs')
 });

 app.post('/', function(req,res){
       var data = {}
       data.token = "722840f1b09ed563ac8b74b14dce3d3d9bb11c392dafabced4ef0188beb9e237313f0aa027cdd5ff90cd50832359981473087be5a4216a6c7fb674e6f2736a76" //your token
       data.amount = req.body.amount
       data.merchant_id = req.body.merchant_id
       data.order_id = req.body.order_id
       data.status = req.body.status
       res.render('./sample_code.ejs', {data})
 });

 app.get('/callback',(req,res)=>{
  var data = req.query
  res.render('./callback.ejs',{data})
 });
 
 app.get('/response',(req,res)=>{
  var data = req.query
  res.render('./response.ejs',{data})
 });
  return app;
}
