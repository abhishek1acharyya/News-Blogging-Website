<?php
 session_start();
include("includes/conn.php"); 
if(isset($_POST['submit'])){

$news_id=$_GET['news_id'];

$news_cat=$_GET["news_cat"];

$comment=$_POST["comment"];

$user_id=$_SESSION['customer_email'];





$sql ="UPDATE comment SET comment=$comment WHERE news_id=$news_id && news_cat=$news_cat";

$run=mysqli_query($con, $sql);



if($run){
   echo 1;
}else{
   echo 0;
}
}
?>