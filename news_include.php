<?php
include("includes/conn.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>News Post</title>

  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    

 
  </head>
<body>
  <div id="content"><!--content start-->
    <div class="container-fluid"><!-- container-fluid start-->
        <div class="row">
          <div class="col-md-12">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item">Add News</li>
            </ul>
          </div>
        </div>
    </div><!-- container-fluid end-->
   
    <div class="container"><!-- Container Start-->
      
          <form action="addnews.php" method="post" enctype="multipart/form-data">

            <div class="form-header">
              <h2 class="text-center font-weight-bold">Add News</h2>
            </div>

            <div class="form-group">
           

              <select class="form-control" name="news_catagory">
                    <option>Select a product catagory</option>
                    <?php
                      $query="SELECT * FROM news_catagory";
                      $run=mysqli_query($con,$query);
                      while($row=mysqli_fetch_assoc($run)){

                      $news_cat_id=$row['news_cat_id'];
                      $news_cat_title=$row['news_cat_title'];
                      echo"
                      <option value='$news_cat_id'>   $news_cat_title </option>
                      ";
                    }

              ?>

                  </select>
              
          </div>

            <div class="form-group">
              <label for="header">News Header</label>
               <input type="text" class="form-control" id="header" name="n_header" required="">
            </div>


           

             <div class="form-group">
              <label for="content">News Content</label>
              <textarea type="text" class="form-control" id="content" name="n_content" required=""></textarea>
            </div>


            


           
              <div class="form-group">
                 <label >News Image</label>
                   <input type="file" class="form-control border" name="n_image" required="">
              </div>


           
               
           <div class="text-center">
            <button type="submit" class="btn btn-primary btn-md" name="submit">
              <i class="fa fa-user-md"></i>Add News</button>
            </div>
       
          </form>
     
    </div><!-- Container End-->
</body>
</html>

