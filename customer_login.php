<?php
include("includes/conn.php");
?>
<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>


	 <body>
	 	<div class="container">
	 		<center>
	 			<h2>Login</h2>
	 			<p>Already our customer</p>
	 		</center>
	 		<form method="post" action="checkout.php">
	 			<div class="form-group">
	 				<label>Email:</label>
	 				<input type="text" name="c_email" class="form-control" required="">
	 			</div>

	 			<div class="form-group">
	 				<label>Password</label>
	 				<input type="password" name="c_password" class="form-control" required="">
	 			</div>

	 			<div class="text-center">
	 				<button type="submit" class="btn btn-primary" name="login">
	 					<i class="fa fa-sign-in"></i>Log in
	 				</button>
	 			</div>
	 		</form>
	 		<center>
	 			<a href="coustomer_registration.php">
	 				<p>New ? Register Now</p>
	 			</a>
	 		</center>
	 	</div>

	 	<?php
	 	if(isset($_POST['login'])){
	 		$customer_email=$_POST['c_email'];
	 		$customer_pass=$_POST['c_password'];
	 		$select_customer="SELECT * FROM customers WHERE customer_email='$customer_email'";
	 		$run_customer=mysqli_query($con,$select_customer);
	 		
	 		$check_customer=mysqli_num_rows($run_customer);
	 		
	 		
	 	
	 		if($check_customer==0){
	 			echo "<script>alert('Incorrect Email or Password')</script>";
	 			exit();
	 		}
	 	

	 		else{
	 			$_SESSION['customer_email']=$customer_email;
	 			echo "<script>alert('log in successful')</script>";
	 			echo "<script>window.open('checkout.php','_self')</script>";

	 		}

	 	}

	 	?>


	</body>
</html>
