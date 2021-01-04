<?php

$conn=mysqli_connect("localhost","root","","blog") or die("connection failed");
if(isset($_POST["submit"])){
$n_cat_id=$_POST["news_catagory"];
$n_header=$_POST["n_header"];
$n_body=$_POST["n_content"];
$n_img=$_FILES["n_image"]["name"];
$temp_img=$_FILES["n_image"]["tmp_name"];

move_uploaded_file($temp_img,"img/$n_img");

  $insert="INSERT INTO add_news(news_cat,news_head,news_body,news_img) VALUES ('$n_cat_id','$n_header','$n_body','$n_img')";
  $run=mysqli_query($conn,$insert);

  if($run){
    echo "
    <script>
    alert('product inserted successfully')
    window.open('news_include.php','_self')

    </script>";
  }else{
        echo "
    <script>
    alert('product insertion failed')
    window.open('news_include.php','_self')

    </script>";

  }

 
}




?>