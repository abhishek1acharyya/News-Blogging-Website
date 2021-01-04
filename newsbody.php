<?php
session_start();
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
	<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Edit Comment</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <?php 
                	$news_id=$_GET["news_id"];

                	$news_cat=$_GET["news_cat"];

                     echo "<form method='post' action='update_comment_section.php?news_id=$news_id&&news_cat=$news_cat'>";
                    ?>

                    <textarea class="form-control" placeholder="write a comment..." rows="3" name="comment"></textarea>
                    <br>
                    <button type="submit" class="btn btn-info pull-right" name="submit">Post</button>
                </form>
      </div>

      <!-- Modal footer -->
      

    </div>
  </div>
</div>


<div class="container mt-5">
	<?php

	$news_id=$_GET["news_id"];

	

	$select_news="SELECT * FROM add_news WHERE news_id=$news_id";

	$run=mysqli_query($con,$select_news) or die("unable to connect");

	while($row=mysqli_fetch_assoc($run)){

	

	$news_cat=$row["news_cat"];

	$news_img=$row["news_img"];

	$news_head=$row["news_head"];

	$news_body=$row['news_body'];


	echo "
	   <div class='container' >

	     <img alt='img' src='img/$news_img' style='height:500px;'>


	     <h5 class='mt-5'>$news_body</h5>


	";

}

?>
</div>


<div class="container mt-5">
<div class="row bootstrap snippets bootdeys">
    <div class="col-md-12 col-sm-12">
        <div class="comment-wrapper">
            <div class="card">
                <div class="card-header text-center">
                    Comment panel
                </div>
                <div class="card-body">
                	<?php 
                	$news_id=$_GET["news_id"];

                	$news_cat=$_GET["news_cat"];

                     echo "<form method='post' action='comment_section.php?news_id=$news_id&&news_cat=$news_cat'>";
                    ?>

                    <textarea class="form-control" placeholder="write a comment..." rows="3" name="comment"></textarea>
                    <br>
                    <button type="submit" class="btn btn-info pull-right" name="submit">Post</button>
                </form>
                    <div class="clearfix"></div>
                    <hr>
                    <ul class="media-list">
                        <li class="media">
                            
                            <div class="media-body mt-3">
                                <span class="text-muted pull-right">

                                    <?php

                                    $news_id=$_GET["news_id"];
                                    $news_cat=$_GET["news_cat"];

                                    $select_comment="SELECT * FROM comment WHERE news_id=$news_id && news_cat=$news_cat";

                                    $run_comment=mysqli_query($con,$select_comment) or die("unsecessful");

                                    while($row=mysqli_fetch_assoc($run_comment)){

                                    	$comment_id=$row["comment_id"];

                                        $comment=$row["comment"];

                                        $user=$_SESSION['customer_email'];

                                        echo "
                                         <strong class='text-success'>$user</strong>
                                           <p>$comment </p>

                                         ";

                                         echo "
                                          <button type='button' class='btn btn-primary' data-id=$comment_id data-toggle='modal' data-target='#myModal'>Edit</button>

                                          <a href='delete_comment.php?news_id=$news_id&&news_cat=$news_cat&&user=$user'><button type='submit' name='delete' class='btn btn-danger'style='float:right;'>Delete</button></a>
                                           

                                         ";

                                }



                                ?>
                            </div>
                        </li>
                        <hr>
                        
                    </ul>
                </div>
            </div>
        </div>

    </div>
</div>
</div>



</body>
</html>