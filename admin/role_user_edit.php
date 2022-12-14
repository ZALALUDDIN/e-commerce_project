<?php 
  require_once('include/header.php');
  require_once('include/top_bar.php');
  require_once('include/side_bar.php');
?>

<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Role User Update</h4>
            <?php include('message.php'); ?>
            <?php
              $id=$_GET['id'];
              $where['id']=$id;
              $result=$mysqli->common_select_single('role_user','*',$where)['selectdata'];
            ?>
            <form class="forms-sample" method="post" action="" enctype="multipart/form-data">
              <div class="form-group">
                <label for="user_name">User Name</label>
                <input value="<?= $result->user_name ?>" type="text" class="form-control" id="user_name" name="user_name">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input value="<?= $result->email ?>" type="text" class="form-control" id="email" name="email">
                
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input value="<?= $result->password ?>" type="text" class="form-control" id="password" name="password">
                 
              </div>

              <button type="submit" class="btn btn-primary me-2">Submit</button>
              <button class="btn btn-light">Cancel</button>
            </form>
            <?php
              if($_POST){
                $_POST['password']=md5(sha1($_POST['password']));

                $upwhere['id']=$id;
                $result=$mysqli->common_update('role_user',$_POST,$upwhere);
                if($result['error']){
                  $_SESSION['class']="danger";
                  $_SESSION['msg']=$result['error'];
                  echo "<script> location.replace('$base_url/role_user_create.php')</script>";
                }else{
                  $_SESSION['class']="success";
                  $_SESSION['msg']=$result['msg'];
                  echo "<script> location.replace('$base_url/role_user_list.php')</script>";
                }
              }

              ?>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php 
    require_once('include/footer.php');
  ?>
</div>