<?php
session_start();
include("includes/conn.php"); 
if(isset($_POST['submit'])){

$news_id=$_GET['news_id'];

$news_cat=$_GET["news_cat"];

$comment=$_POST["comment"];

$user_id=$_SESSION['customer_email'];

$insert= "INSERT INTO comment(user_id, news_id, news_cat, comment) VALUES ('$user_id','$news_id', '$news_cat', '$comment')";

 $run=mysqli_query($con,$insert) or die(mysqli_connect_error()."unsecssful");

 if($run){

 echo "
      <script>
      alert('Commant posted Successfully')
       window.open('index.php','_self')
      </script>
      ";
    
      
      

}
}
?>
