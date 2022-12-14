<?php include_once('include/connection.php'); ?>
<?php 
    if(isset($_SESSION['id'])) header('location:index.php'); 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>RoyalUI Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css" />
    <link rel="stylesheet" href="vendors/base/vendor.bundle.base.css" />
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="css/style.css" />
    <!-- endinject -->
    <link rel="shortcut icon" href="images/favicon.png" />
  </head>

  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth px-0">
          <div class="row w-100 mx-0">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                <div class="brand-logo">
                  <img src="images/logo.svg" alt="logo" />
                </div>
                <h4>New here?</h4>
                <h6 class="font-weight-light">Signing up is easy. It only takes a few steps</h6>
                <?php include_once('message.php') ?>
                <form class="pt-3" action="" method="POST">
                  <div class="form-group">
                    <input
                      type="text"
                      class="form-control form-control-lg"
                      id="exampleInputUsername1"
                      placeholder="Username"
                      name="user_name"
                    />
                  </div>
                  <div class="form-group">
                    <input
                      type="email"
                      class="form-control form-control-lg"
                      id="exampleInputEmail1"
                      placeholder="Email"
                      name="email"
                    />
                  </div>

                  <div class="form-group">
                    <input
                      type="password"
                      class="form-control form-control-lg"
                      id="exampleInputPassword1"
                      placeholder="Password"
                      name="password"
                    />
                  </div>
                  <div class="mb-4">
                    <div class="form-check">
                      <label class="form-check-label text-muted">
                        <input type="checkbox" class="form-check-input" />
                        I agree to all Terms & Conditions
                      </label>
                    </div>
                  </div>
                  <div class="mt-3">
                    <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" href="login.php"
                      >SIGN UP</button>
                  </div>

        <?php
        
          if($_POST){
			  $_POST['password']=md5(sha1($_POST['password']));
              $result=$mysqli->common_create('role_user',$_POST);        
              if(!$result['error']){
                $_SESSION['user_name']=$_POST['user_name'];
                $_SESSION['email']=$_POST['email'];
                $_SESSION['id']=$result['insert_id'];
                header('location:index.php');
              }else{
                $_SESSION['msg']="Please try again";
              }
            }
       

      ?>
                  <div class="text-center mt-4 font-weight-light">
                    Already have an account? <a href="login.php" class="text-primary">Login</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="vendors/base/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- inject:js -->
    <script src="js/off-canvas.js"></script>
    <script src="js/hoverable-collapse.js"></script>
    <script src="js/template.js"></script>
    <script src="js/todolist.js"></script>
    <!-- endinject -->
  </body>
</html>
