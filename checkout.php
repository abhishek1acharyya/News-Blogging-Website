<?php
session_start();
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


 
   
    <div class="container"><!-- Container Start-->
      <?php
      if(!isset($_SESSION['customer_email'])){
        include('customer_login.php');
      }else{
        include('index.php');
      }
      ?>
          
     
    </div><!-- Container End-->
  </div><!--content End-->




   
  </body>

</html>