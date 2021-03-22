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
	<title>NOQOD CALLBACK</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<style type="text/css">
		.col-md-4{
			text-align: center;
			margin-top:40px;
		}
	</style>
</head>
<body class="container">
    <div class="row">
    	<div class="col-md-4">
    		
    	</div>
    	<div class="col-md-4">
    		
    		 <h3>NOQOD CALLBACK</h3>
    		 <a class="btn btn-success" href="NOQOD_response.php?transaction_id=<?php echo $transaction_id ?>&order_id=<?php echo $order_id ?>&signature=<?php echo $signature ?>&amount=<?php echo $amount ?>&order=true">Success</a> <a class="btn btn-danger" href="NOQOD_response.php?transaction_id=<?php echo $transaction_id ?>&order_id=<?php echo $order_id ?>&signature=<?php echo $signature ?>&amount=<?php echo $amount ?>&order=false">Failure</a>
    		
    	</div>
    	<div class="col-md-4">
    		
    	</div>
    </div>
</body>
</html>