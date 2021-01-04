<?php
session_start();
 include("conn.php"); 
 
 ?>

<div class="container mt-5">
<div class="row bootstrap snippets bootdeys">
    <div class="col-md-12 col-sm-12">
        <div class="comment-wrapper">
            <div class="card">
                <div class="card-header text-center">
                    Comment panel
                </div>
                <div class="card-body">
                    <form method="post" action="comment_section.php">

                    <textarea class="form-control" placeholder="write a comment..." rows="3" name="comment"></textarea>
                    <br>
                    <button type="button" class="btn btn-info pull-right" name="submit">Post</button>
                </form>
                    <div class="clearfix"></div>
                    <hr>
                    <ul class="media-list">
                        <li class="media">
                            <a href="#" class="pull-left">
                                <img src="https://bootdey.com/img/Content/user_1.jpg" alt="" class="img-circle">
                            </a>
                            <div class="media-body">
                                <span class="text-muted pull-right">

                                    <?

                                    $news_id=$_GET["news_id"];
                                    $news_cat=$_GET["news_cat"];

                                    $select_comment="SELECT * FROM comment WHERE news_id=$news_id && news_cat=$news_cat";

                                    $run_comment=mysqli_query($con,$select_comment) or die("unsecessful");

                                    while($row=mysqli_fetch_assoc($run_comment)){

                                        $comment=$row["comment"];

                                        $user=$_SESSION['customer_email'];

                                        echo "
                                         <strong class='text-success'>$user</strong>
                                           <p>$comment </p>

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

