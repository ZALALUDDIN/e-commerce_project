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
            <h4 class="card-title">Coupon Details Update</h4>
            <?php include('message.php'); ?>
            <?php
              $id=$_GET['id'];
              $where['id']=$id;
              $result=$mysqli->common_select_single('coupon','*',$where)['selectdata'];
            ?>
            <form class="forms-sample" method="post" action="" enctype="multipart/form-data">
              <div class="form-group">
                <label for="coupon_code">Coupon Code</label>
                <input value="<?= $result->coupon_code ?>" type="text" class="form-control" id="coupon_code" name="coupon_code">
              </div>
              <div class="form-group">
                <label for="discount">Total Discount</label>
                <input value="<?= $result->discount ?>" type="text" class="form-control" id="discount" name="discount">
                
              </div>

              <div class="form-group">
                <label for="validity"> validity</label>
                <input value="<?= $result->validity ?>" type="text" class="form-control" id="validity" name="validity">
                
              </div>

              

              <button type="submit" class="btn btn-primary me-2">Submit</button>
              <button class="btn btn-danger">Cancel</button>
            </form>
            <?php
              if($_POST){
                

                $upwhere['id']=$id;
                $result=$mysqli->common_update('coupon',$_POST,$upwhere);
                if($result['error']){
                  $_SESSION['class']="danger";
                  $_SESSION['msg']=$result['error'];
                  echo "<script> location.replace('$base_url/coupon_create.php')</script>";
                }else{
                  $_SESSION['class']="success";
                  $_SESSION['msg']=$result['msg'];
                  echo "<script> location.replace('$base_url/coupon_list.php')</script>";
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