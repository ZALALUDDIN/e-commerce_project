<?php 
      include_once('includes/header.php');  
?>

<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
    <div class="col-sm-3 pr-2 ">
        <ul class="list-group">
          <li class="list-group-item">
            <a href="customer_dashboard.php">Dashboard</a>
          </li>
          <li class="list-group-item">
            <a href="customer_order_list.php">Order List</a>
          </li>
          <li class="list-group-item">
            <a href="customer_profile_up.php">Profile</a>
          </li>
        </ul>
      </div>
      <div class="col-sm-9">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Customer Profile Update</h4>
            <?php include('./admin/message.php'); ?>
            <?php
              $where['id']=$_SESSION['customer_id'];
              $result=$mysqli->common_select_single('customer','*',$where)['selectdata'];
            ?>
            <form method="post" action="" enctype="multipart/form-data">
              <div class="row">
                <div class="col-6">
                   <div class="form-group">
                    <label for="customer_name">Customer Name</label>
                    <input value="<?= $result->customer_name ?>" type="text" class="form-control" id="customer_name" name="customer_name">
                  </div>
                </div>
                
              
                <div class="col-6">
                   <div class="form-group">
                <label for="email">Email</label>
                <input value="<?= $result->email ?>" type="text" class="form-control" id="email" name="email">
                
              </div>
                </div>
                <div class="col-6">
                  <div class="form-group">
                <label for="password">Password</label>
                <input type="text" class="form-control" id="password" name="password">
                 
              </div>
                </div>
              
                <div class="col-6">
                  <div class="form-group">
                <label for="contact_number">Phone</label>
                <input value="<?= $result->contact_number ?>" type="text" class="form-control" id="contact_number" name="contact_number">   
              </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                <label for="address">Address</label>
                <input value="<?= $result->address ?>" type="text" class="form-control" id="address" name="address">   
              </div>
                </div>
              </div>
              <button type="submit" class="btn btn-primary me-2">Submit</button>
              <button class="btn btn-light">Cancel</button>
            </form>
            <?php
              if($_POST){
                if($_POST['password']){
                  $_POST['password']=md5(sha1($_POST['password']));
                }else{
                  unset($_POST['password']);
                }
                

                $upwhere['id']=$_SESSION['customer_id'];
                $result=$mysqli->common_update('customer',$_POST,$upwhere);
                if($result['error']){
                  $_SESSION['class']="danger";
                  $_SESSION['msg']=$result['error'];
                  echo "<script> location.replace('$base_url/customer_profile_up.php')</script>";
                }else{
                  $_SESSION['class']="success";
                  $_SESSION['msg']=$result['msg'];
                  echo "<script> location.replace('$base_url/customer_profile_up.php')</script>";
                }
              }

              ?>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php 
    include_once('includes/footer.php');
?>
</div>