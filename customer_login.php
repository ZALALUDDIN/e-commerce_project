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
              <h4>Hello! let's get started</h4>
                <h6 class="font-weight-light">Sign in to continue.</h6>
                <?php include_once('./admin/message.php') ?>
                <form class="pt-3" action="" method="POST">
                  <div class="form-group">
                    <input
                      type="text"
                      name="customer_name"
                      class="form-control form-control-lg"
                      id="exampleInputEmail1"
                      placeholder="Name"
                    />
                  </div>
                  <div class="form-group">
                    <input
                      type="password"
                      name="password"
                      class="form-control form-control-lg"
                      id="exampleInputPassword1"
                      placeholder="Password"
                    />
                  </div>
                  <div class="mt-3">
                    <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" href="index.php">SIGN IN</button>
                  </div>
                  <div class="my-2 d-flex justify-content-between align-items-center"></div>

                  <div class="text-center mt-4 font-weight-light">
                    Don't have an account? <a href="customer_reg.php" class="text-primary">Create</a>
                  </div>
                </form>

                <?php
                    if($_POST){
                        $_POST['password']=md5(sha1($_POST['password']));
                        $result=$mysqli->common_select_single('customer','*',$_POST);
                        if($result['error']){
                        $_SESSION['class']="danger";
                        $_SESSION['msg']="User name or password is wrong";
                        echo "<script> location.replace('$base_url/customer_login.php')</script>";
                        }else{
                          $_SESSION['customer_name']=$result['selectdata']->customer_name;
                          $_SESSION['customer_address']=$result['selectdata']->address;
                          $_SESSION['customer_contact']=$result['selectdata']->contact_number;
                          $_SESSION['customer_email']=$result['selectdata']->email;
                          $_SESSION['customer_id']=$result['selectdata']->id;
                          $_SESSION['class']="success";
                          $_SESSION['msg']="Login success";
                          echo "<script> location.replace('$base_url/customer_dashboard.php')</script>";
                        }
                    }
			    ?>


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
