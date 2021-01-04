<?php
 include("includes/conn.php"); 

 
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Header</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>
<body>
  


<?php include("includes/header.php"); ?>


<div class="container mt-5">
	<?php
	$select_news="SELECT * FROM add_news";

	$run=mysqli_query($con,$select_news) or die("unable to connect");

	while($row=mysqli_fetch_assoc($run)){

	$news_id=$row["news_id"];

	$news_cat=$row["news_cat"];

	$news_img=$row["news_img"];

	$news_head=$row["news_head"];


	echo "<div class='row mt-3'>
		
		<div class='col-md-4'>
			<a href='newsbody.php?news_id=$news_id&&news_cat=$news_cat'><img alt='img' src='img/$news_img' style='height:100px; width:180px;'></a>
		</div>
		<div class='col-md-8'>
			<a href='newsbody.php?news_id=$news_id&&news_cat=$news_cat'><h3 class='mt-1'>$news_head</h3></a>
		</div>
	
	</div>";

}

?>
</div>

</body>
</html>