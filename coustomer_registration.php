<?php

 include("includes/conn.php"); 
 
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>E Commerse Store</title>

  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    

  <link rel="stylesheet" href="styles/style.css">
  </head>
<body>


  
  <div id="content"><!--content start-->
    <div class="container-fluid"><!-- container-fluid start-->
        <div class="row">
          <div class="col-md-12">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item">Customer Registration</li>
            </ul>
          </div>
        </div>
    </div><!-- container-fluid end-->
   
    <div class="container"><!-- Container Start-->
      
          <form action="coustomer_registration.php" method="post" enctype="multipart/form-data" >

            <div class="form-header">
              <h2 class="text-center font-weight-bold">Customer Registration</h2>
            </div>

            <div class="form-group">
              <label for="no">Customer Name</label>
                <input type="text" class="form-control"  id="no" name="c_name" required="">
            </div>

            <div class="form-group">
              <label for="email">Customer Email</label>
               <input type="text" class="form-control" id="email" name="c_email" required="">
            </div>


           <div class="form-group">
              <label for="pass">Customer Password</label>
                 <input type="text" class="form-control" id="pass" name="c_password" required="">
             </div>


            <div class="form-group">
              <label for="no">Phone_No</label>
                 <input type="text" class="form-control" placeholder="Mobile no" id="no" name="c_contact" required="">
             </div>

             <div class="form-group">
              <label for="country">Country</label>
                 <input type="text" class="form-control" id="pass" name="c_country" required="">
             </div>

             <div class="form-group">
              <label for="city"> City</label>
                 <input type="text" class="form-control" id="pass" name="c_city" required="">
             </div>

             <div class="form-group">
              <label for="address">Address</label>
                 <input type="text" class="form-control" id="address" name="c_address" required="">
             </div>



           
             

           
               
           <div class="text-center">
            <button type="submit" class="btn btn-primary btn-md" name="submit">
              <i class="fa fa-user-md"></i>Register</button>
            </div>
       
          </form>
     
    </div><!-- Container End-->

  

   
  </body>

</html>

<?php
if(isset($_POST['submit'])){
  $c_name=$_POST['c_name'];
  $c_email=$_POST['c_email'];
  $c_password=$_POST['c_password'];
  $c_country=$_POST['c_country'];
  $c_city=$_POST['c_city'];
  $c_contact=$_POST['c_contact'];
  $c_address=$_POST['c_address'];


  

  

  $insert_customer="INSERT INTO customers(customer_name, customer_email, customer_pass, customer_country, customer_city, customer_contact, customer_address) VALUES ('$c_name', '$c_email', ' $c_password', '$c_country', ' $c_city', '$c_contact', ' $c_address')";
 

$run_customer=mysqli_query($con,$insert_customer) or die('Unsuccessful') ;





if($run_customer){
  $_SESSION['customer_email']=$c_email;
  echo "<script>alert('You have been registered successfully')</script>";
   echo "<script>window.open('checkout.php','_self')</script>";
}else{
  $_SESSION['customer_email']=$c_email;
  echo "<script>alert('You have been registered successfully')</script>";
   echo "<script>window.open('index.php','_self')</script>";
}


}
?>