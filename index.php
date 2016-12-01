<?php

session_start();
if (isset($_POST['login'])) {
    require './classes/login.php';
    $obj_login = new Login();
   // $result = $obj_login->login_check($_POST);
}
?>
<html>
         <head>
                  <title> Blog</title>
                  <link rel="stylesheet" href="css/bootstrap.min.css">
         </head>
         <body>

                  <div class="row ">
                           <div class="col-lg-8 col-lg-offset-2" style="height: 250px;">
                                    <div class="row">
                                             <div class="col-lg-offset-2 col-lg-8">
                                                      <div class="panel panel-default">
                                                               <div class="panel-body">
                                                                        <div class="well well-sm">
                                                                                 <div class="text-info  text-center">
                                                                                          <h4>Please Fill all the information properly</h4>
                                                                                 </div>
                                                                        </div>
                                                                        <div class="well">

                                                                                 <form class="form-horizontal" role='form' action="" method="post">
                                                                                          <div class="form-group">
                                                                                                   <label class="control-label col-lg-3  text-left">Email:</label>
                                                                                                   <div class="col-lg-9">
                                                                                                            <input class="form-control" name="email" type="email" required/>
                                                                                                   </div>
                                                                                          </div>
                                                                                          <div class="form-group">
                                                                                                   <label class="control-label col-lg-3  text-left">Password: </label>
                                                                                                   <div class="col-lg-9">
                                                                                                            <input class="form-control" name="password" type="password" required/>
                                                                                                   </div>
                                                                                          </div>
                                                                                          <div class="form-group">
                                                                                                   <label class="control-label col-lg-3"></label>
                                                                                                   <div class="col-lg-offset-3 col-lg-9">
                                                                                                            <input type="submit" name="login" value="Login" class="btn btn-success btn-block">
                                                                                                   </div>
                                                                                          </div>

                                                                                 </form>
                                                                        </div>
<?php
if (isset($_SESSION['message'])) {
    ?>
                                                                            <div class="well well-sm">
                                                                                     <div class="  text-center">
                                                                            <?php
                                                                            echo "<h4 class='text-danger'>" . $_SESSION['message'] . "</h4>";
                                                                            ?>
                                                                                     </div>
                                                                            </div> 
                                                                              <?php
                                                                                          } 
                                                                                          ?>

                                                               </div>
                                                      </div>
                                             </div>
                                    </div>
                           </div>
                  </div>
         </body>
</html>