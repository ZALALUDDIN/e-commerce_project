<?php 
      include_once('includes/header.php');  
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title> Ogani E-Commerce </title>
    <!-- plugins:css -->
    
  </head>

  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth px-0">
          <div class="row w-100 mx-0">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                <h4>New here?</h4>
                <h6 class="font-weight-light">Signing up is easy. It only takes a few steps</h6>
                <?php include_once('./admin/message.php') ?>
                <form class="pt-3" action="" method="POST">
                  <div class="form-group">
                    <input
                      type="text"
                      class="form-control form-control-lg"
                      id="exampleInputname1"
                      placeholder="Name"
                      name="customer_name"
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

                  <div class="form-group">
                    <input
                      type="text"
                      class="form-control form-control-lg"
                      id="exampleInputtel1"
                      placeholder="Phone"
                      name="contact_number"
                    />
                  </div>
                  <div class="form-group">
                    <textarea class="form-control form-control-lg" placeholder="Address" name="address"></textarea>
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
                    <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" href="customer_login.php"
                      >SIGN UP</button>
                  </div>

        <?php
        
          if($_POST){
			  $_POST['password']=md5(sha1($_POST['password']));
              $result=$mysqli->common_create('customer',$_POST);        
              if(!$result['error']){
                $_SESSION['customer_name']=$_POST['customer_name'];
                $_SESSION['email']=$_POST['email'];
                $_SESSION['id']=$result['insert_id'];
                echo "<script> location.replace('$base_url/customer_login.php')</script>";
              }else{
                $_SESSION['msg']="Please try again";
              }
            }
       

      ?>
                  <div class="text-center mt-4 font-weight-light">
                    Already have an account? <a href="customer_login.php" class="text-primary">Login</a>
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
    
  </body>
</html>
<?php 
    include_once('includes/footer.php');
?>
