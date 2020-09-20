<?php 

if(isset($_POST['donate'])){

    $prd_name = $_POST['cause'];
	$price = $_POST['amount'];
	$name= $_POST['name'] ;
	$email= $_POST['email'] ;
	$mno = $_POST['mno'] ;
	// Price calculation with tax and fee
	$fee = 3 +($price*.02);
	$tax = $fee * .15;
	$prd_price = ceil($fee + $tax + $price);	
	
 }

 ?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Payment </title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </head>

  <body>
    <div class="container">

      <div class="page-header">
		<h2> Donation for nobel cause </h2>
		
		<h4>Please use the following card details </h4>
		<pre>
		Number: 4242 4242 4242 4242
		Date: Any valid future date
		CVV: 111
		Name: abc
		3D-secure password: 1221
		</pre>
      </div>

		<p>
		<b>Product name :</b> <?php echo $prd_name; ?>
		</p>
		<p>
		<b>Price : </b> <?php echo $price; ?>
		</p>
		<p><b>Bank Fee : </b> <?php echo $tax + $fee ; ?> <small> (Rs:3+ 2% of fee+ 15% Service Tax)</small></p>

		<p><b>Total : </b> <?php echo $prd_price; ?></p>

		<h3>Your Payment Details </h3>
		<hr>
		<form action="pay.php" method="POST" accept-charset="utf-8">
	
		<input type="hidden" name="product_name" value="<?php echo $prd_name; ?>"> 
		<input type="hidden" name="product_price" value="<?php echo $prd_price; ?>"> 

		<div class="form-group">
    	<label>Your Name</label>
   		<input type="text" class="form-control" name="name" readonly value="<?php echo $name ; ?>"  placeholder="Enter your name">	 <br/>
		</div>

		<div class="form-group">
    	<label>Your Phone</label>
   		<input type="text" class="form-control" name="phone" readonly value="<?php echo $mno ; ?>" placeholder="Enter your phone number"> <br/>
		</div>


		<div class="form-group">
    	<label>Your Email</label>
   		<input type="email" class="form-control" name="email" readonly value="<?php echo $email ; ?>"  placeholder="Enter you email"> <br/>
		</div>

	  
		<input type="submit" class="btn btn-success btn-lg" value="Click here to Pay Rs:<?php echo $prd_price; ?> ">

		 </form>
 <br/>
  <br/>     
    </div> <!-- /container -->


  </body>
</html>
