<?php
error_reporting(0);
?>
<html>
  <head>
    <title>PAYMENT GATEWAY</title>
<script src="https://cdn.jsdelivr.net/gh/NOQOD/payment-gateway-library@vversion-1.1/index.js"></script>
  </head>
  <body onload="handleChekout()">
    <div id="iframe">  	
    </div>
       <?php
        $token = "722840f1b09ed563ac8b74b14dce3d3d9bb11c392dafabced4ef0188beb9e237313f0aa027cdd5ff90cd50832359981473087be5a4216a6c7fb674e6f2736a76";
		    $merchant_id = $_POST["merchant_id"];
		    $amount = $_POST["amount"];
		    $order_id = $_POST["order_id"];
		    $status = $_POST["status"];
	     ?>
         <script>
      let noqod = npg(<?php echo json_encode($merchant_id) ?>, <?php echo json_encode($token) ?>,<?php echo json_encode($status) ?>); // merchant_id,token,status
      let signature = noqod.hashInfo(<?php echo json_encode($merchant_id) ?>, <?php echo json_encode($amount) ?>, <?php echo json_encode($order_id) ?>); // merchant_id,amount,order_id
      function handleChekout() {
        noqod.sendRequest(
          <?php echo json_encode($amount) ?>, // amount
          <?php echo json_encode($order_id) ?>, // order-id
           "http://localhost/sample_code/phpIntegration/NOQOD_callback.php", // your callback url
          signature // hash
        );
      }
    </script>
  </body>
</html>
