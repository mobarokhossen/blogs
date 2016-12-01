<?php 
$message = "";
require './classes/blog.php';

$obj_blog = new Blog();


if(isset($_GET['status'])&&isset($_GET['id'])){
    If($_GET['status']='delete')
    {
        $message = $obj_blog->delete_blog_data($_GET['id']);
    }
}

$result = $obj_blog->select_blog_info(); 
        
?>


<!DOCTYPE HTML>
<html>
         <head>
                  <title> View Blog</title>
                  <link rel="stylesheet" href="css/bootstrap.min.css">
         </head>
         <body>
                  <div class="container">
                           <div class="row">
                                    <div class="col-lg-12" style="height: 100px;"></div>
                           </div>
                           <div class="row">
                                    <div class="col-lg-6" style="height: 35px; padding: 0px;">
                                             <a href="add_blog.php" class="btn btn-info btn-block">Add Blog</a>
                                    </div>
                                    <div class="col-lg-6" style="height: 35px;padding: 0px;">
                                             <a href="view_blog.php" class="btn btn-info btn-block">View Blog</a>
                                    </div>
                           </div>
                           <div class="row">
                                    <div class="col-lg-12" >
                                             <div class="panel panel-default">
                                                      <div class="panel-body">
                                                               <div class="well well-sm">
                                                                        <div class="text-info  text-center">
                                                                                 <h4>View Blog item</h4>
                                                                        </div>
                                                                        <?php
                                                                        if ($message != "") {
                                                                            ?>
                                                                            <div class="text-success  text-center">
                                                                                     <h4>Delete Blog Data Successfully</h4>
                                                                            </div>
                                                                            <?php
                                                                        }
                                                                        ?>



                                                               </div>
                                                               <div class="well">

                                                                        <table class="table table-bordered table-responsive table-striped text-center">
                                                                                 <tr class=" text-primary text-center">
                                                                                          <th width="10px" >Blog Id</th>
                                                                                          <th>Blog Title</th>
                                                                                          <th>Author Name</th>
                                                                                          <th width="400px">Blog Description</th>
                                                                                          <th width="150px">Publication Status</th>
                                                                                          <th width="120px" >Action</th>

                                                                                 </tr>   
                                                                                 <?php
                                           while ($select_blog_data = mysqli_fetch_assoc($result))
                                           {
                                                                                 ?>
                                                                                 <tr>
                                                                                          <td><?= $select_blog_data['blog_id']; ?></td>
                                                                                          <td><?= $select_blog_data['blog_title']; ?></td>
                                                                                          <td><?= $select_blog_data['author_name']; ?></td>
                                                                                          <td><?= $select_blog_data['blog_desc']; ?></td>
                                                                                          <td><?php
                                                                                          if($select_blog_data['publication_status']==1)
                                                                                          {
                                                                                              echo "Published";
                                                                                          }else{
                                                                                               echo "Unpublished";
                                                                                          }
                                                                                          ?></td>
                                                                                          <td><a href="edit_blog.php?id=<?php echo $select_blog_data['blog_id']; ?>" class="btn btn-primary" title="Edit">
                                                                                                            <span class="glyphicon glyphicon-edit"> </span>
                                                                                                   </a>
                                                                                                   <a href="?status=delete&id=<?php echo $select_blog_data['blog_id']; ?>" class="btn btn-danger" title="Delete" onclick="return check_delete_status();">
                                                                                                            <span class="glyphicon glyphicon-trash"> </span>
                                                                                                   </a>
                                                                                          </td>
                                                                                 </tr>
                                           <?php
                                           } 
                                           ?>                                     
                                                                        </table>
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
          <script type="text/javascript"> 
              function check_delete_status()
              {
                  var result  = confirm('Are you Sure?');
                  if(result==true)
                  {
                      return true;
                  }
                  else 
                      {
                          return false;
                      }
              }
             </script>
             <script src="js/bootstrap.min.js"></script>
</html>


