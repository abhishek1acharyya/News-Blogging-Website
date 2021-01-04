<?php

include("includes/conn.php"); 
$id = $_GET["news_id"];
$cat = $_GET["news_cat"];
$user = $_GET["user"];




$sql = "DELETE FROM comment WHERE news_id =$id && news_cat=$cat ";

if(mysqli_query($con, $sql)){
  echo "
   <script>
   alert('comment deleted successfully')
   window.open('index.php','_self')
   </script>

  ";
}else{
   echo "
   <script>
   alert('comment delition failed')
   window.open('index.php','_self')
   </script>

  ";
}

?>
