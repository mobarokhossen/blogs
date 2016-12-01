<?php
    require './classes/blog.php';
    
    $obj_blog = new Blog();
    $add_blog ='';
    
    if($_POST)
    {
        $add_blog = $obj_blog->add_blog_data($_POST); 
    }

?>


<!DOCTYPE HTML>

<html>
    <head>
        <title> Add Blog</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
<!--        <style>
            [class*='col-']{
                border: 1px solid #000000;
            }
        </style>-->


    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-lg-12" style="height: 100px;"></div>
            </div>
            <div class="row">
                <div class="col-lg-4" style="height: 35px; padding: 0px;">
                         <a href="add_blog.php" class="btn btn-info btn-block">Add Blog</a>
                </div>
                <div class="col-lg-4" style="height: 35px;padding: 0px;">
                         <a href="view_blog.php" class="btn btn-info btn-block">View Blog</a>
                </div>
                <div class="col-lg-4" style="height: 35px;padding: 0px;">
                         <a href="logout.php" class="btn btn-warning btn-block">logout</a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12" style="height: 450px;">
                    <div class="row">
                        <div class="col-lg-offset-2 col-lg-8">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                          <div class="well well-sm">
                                                      <div class="text-info  text-center">
                                                               <h4>Add Blog item</h4>
                                                      </div>
                                                   <div class="bg-info  text-center">
                                            <?php
                                            session_start();
                                                 if (isset($_SESSION['user']) && isset($_SESSION['email']))
                                                                    {
                                                                       echo  "<h4 class='text-success'>".  $_SESSION['user'].'<br/>';
                                                                       echo $_SESSION['email']."</h4>";
                                                                   }
                                             ?>
                                                </div>
                                           
                                        
                                             </div>
                                    <div class="well">
                                            
                                        <form class="form-horizontal" role='form' action="" method="post">
                                            <div class="form-group">
                                                <label class="control-label col-lg-3">Blog Title</label>
                                                <div class="col-lg-9">
                                                    <input type="text" name="blog_title" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-lg-3">Author Name</label>
                                                <div class="col-lg-9">
                                                    <input type="text" name="author_name" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-lg-3">Blog Description</label>
                                                <div class="col-lg-9">
                                                         <textarea name= "blog_desc" class="form-control" style="resize: vertical;" rows="7"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-lg-3">Publication Status</label>
                                                <div class="col-lg-9">
                                                    <select name="publication_status" class="form-control">
                                                        <option >--- Select Publication Status---</option>
                                                        <option value="1">Published</option>
                                                        <option value="0">Unpublished</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-lg-3"></label>
                                                <div class="col-lg-offset-3 col-lg-9">
                                                    <input type="submit" name="btn" value="Submit Blog" class="btn btn-success btn-block">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                     <div class="col-lg-12" style="height: 30px;"></div>
            </div>

        </div>
    </body>
</html>


