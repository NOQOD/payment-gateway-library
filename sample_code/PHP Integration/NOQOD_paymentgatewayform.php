<!DOCTYPE html>
<html>
<head>
	<title>NOQOD_FORM</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<style type="text/css">
		.col-md-8
		{
			margin-top: 50px;
			padding-left: 50px;
			padding-right: 50px;
		}
	</style>
</head>
<body class="container"> 
	<div class="row">
		<div class="col-md-2">
		</div>
		<div class="col-md-8">
			<h1>Noqod Payment Gateway Form</h1><br>
        <form method="post" action="sample_code.php">
       	<label>Amount</label><br>
       	<input type="text" name="amount" class="form-control" required><br>
       	<label>Merchant Id</label><br>
       	<input type="text" name="merchant_id" class="form-control" required><br>
       	<label>Order Id</label><br>
       	<input type="text" name="order_id" class="form-control" required><br>
       	<input type="radio" name="status" value="sandbox" checked>&nbsp;<label>Staging</label>
        <br><br>
       	<input type="submit" id="btnPay" name="Submitbtn" value="SUBMIT" class="btn btn-primary">
        </form>
        <div id="iframe">  	
        </div>
		</div>
		<div class="col-md-2">
		</div>
	</div>
</body>
</html>