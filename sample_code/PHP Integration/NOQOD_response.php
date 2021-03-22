<?php
 if (isset($_GET["order"])) {
     $transaction_id = $_GET["transaction_id"];
     $order_id = $_GET["order_id"];
     $order = $_GET["order"];
     $signature = $_GET["signature"];
     $amount = $_GET["amount"];
 	 }

?>
<!DOCTYPE html>
<html>
<head>
	<title>Response</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://cdn.jsdelivr.net/gh/NOQOD/payment-gateway-library@vversion-1.1/index.js"></script>
	<style type="text/css">
		.col-md-4{
			border-radius: 40px;
		}
		#info{
			margin-top: 40px;
			margin-bottom: 30px;
			border-radius: 10px;
			border-width: 1px;
			border-style: solid;
			padding-top: 20px;
			padding-bottom: 20px;
			text-align: center;
		}
		.col-md-4{
			text-align: center;
			margin-top: 70px;
		}
		.alert{
			text-align: center
		}
	</style>
</head>
<body class="container" onload="verify()">
	<div class="row">
	 <div class="col-md-4">
	 	
	 </div>	
	 <div class="col-md-4">
	 	<div class="row">
	 		<div class="col-md-1">
	 		</div>
	 		<div class="col-md-10" id="info">
	 		<label>Transaction Id :</label>
	 		<?php echo $transaction_id ?><br/>
	 		<label>Order Id :</label>
	 		<?php echo $order_id ?>	
	 		</div>
	 		<div class="col-md-1">
	 		</div>
	 	</div>
       <div class="row">
       	<div id="box" class="alert">
       		<label id="status"></label>
       	</div>
       </div>
	 </div>
	 <div class="col-md-4">
	 	
	 </div>
	</div>
   <script type="text/javascript">
   		let merchant_id = "7006911868" //your merchant_id
   		let noqod = npg();
   		var signature = noqod.hashInfo(merchant_id, <?php echo json_encode($amount) ?> , <?php echo json_encode($order_id) ?>);
	   	function verify(){
	   		 var box = document.getElementById("box")
	   		 var element = document.getElementById("status")
   	   		if(<?php echo json_encode($signature) ?> == signature && <?php echo json_encode($order)?> == "true"){
	   			box.classList.add('alert-success');
	   			element.innerHTML = "PAYMENT SUCCESS"
	   		}
	   		else{
	   			box.classList.add('alert-danger');
	   			element.innerHTML = "PAYMENT FAILED"
	   		}
	   		   	}
   </script>
</body>
</html>