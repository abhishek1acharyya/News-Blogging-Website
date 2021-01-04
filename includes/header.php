<?php
session_start();
 include("conn.php"); 
 
 ?>

 <div class="container ">
  <h1 class="bg-secondary text-white text-center">Blog Application</h1>
  
</div> 


<nav class="navbar navbar-expand-md shadow mt-1  sticky-top bg-light"> <!-- Start navbar-->
    <a class="navbar-brand" href="index.php">
       <img src="img/header image.jpg" alt="logo" style="width:150px;height:35px;" class="hidden-sm">
     </a>
   

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="fa fa-align-justify"></span>
  </button>
    <div class="collapse navbar-collapse nav" id="collapsibleNavbar"> <!--start navbar collapse-->
      <ul class="navbar-nav">
                    <?php
                      $query="SELECT * FROM news_catagory";
                      $run=mysqli_query($con,$query);
                      while($row=mysqli_fetch_assoc($run)){

                      $news_cat_id=$row['news_cat_id'];
                      $news_cat_title=$row['news_cat_title'];
                      echo"
                       <li class='nav-item ml-3'>
                        <a class='nav-link text-dark font-weight-bolder' href='newscat_body.php?news_cat=$news_cat_id'>$news_cat_title</a>
                       </li>" ;
                    }

              ?>
          
      </ul>
    </div> <!--End navbar collapse-->
  &nbsp &nbsp &nbsp
            <?php
              if(!isset($_SESSION['customer_email'])){
                echo "<a class='font-weight-bold' href='checkout.php'>Login</a>";
              }else{
                echo "<a class='font-weight-bold' href='logout.php'>Logout</a>";
              }
              ?>
  
   
    
</nav> <!-- End navbar-->






                   

                
              
        


