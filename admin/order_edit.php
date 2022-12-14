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
            <h4 class="card-title">Order Update</h4>
            <?php include('message.php'); ?>
            <?php
              $id=$_GET['id'];
              $where['id']=$id;
              $result=$mysqli->common_select_single('order_details','*',$where)['selectdata'];
              $status=array("Select Status","Pending", "Processing","shipped","Delivered","Canceled");
            ?>
            <form class="forms-sample" method="post" action="">

              <div class="form-group">
                <label for="order_status">Order Status</label>
                <select class="form-control" id="order_status" name="order_status">
                  <?php foreach($status as $i=>$st){ ?>
                  <option value="<?= $i ?>" <?= $i==$result->order_status?"selected":"" ?>><?= $st ?></option>
                  <?php } ?>
                </select>
              </div>
              <div class="form-group">
                <label for="payment_status">Payment Status</label>
                <select class="form-control" id="payment_status" name="payment_status">
                  <option value="0" <?= 0==$result->payment_status?"selected":"" ?>>Unpaid</option>
                  <option value="1" <?= 1==$result->payment_status?"selected":"" ?>>Paid</option>
                </select>
              </div>

              <div class="form-group">
                <label for="note">Track Note</label>
                <input type="text" class="form-control" id="note" name="note">
                
              </div>
              <div class="form-group">
                <label for="trackdate">Status Change Date</label>
                <input type="date" class="form-control" id="trackdate" name="trackdate">
              </div>
              <button type="submit" class="btn btn-primary me-2">Submit</button>
              <button class="btn btn-light">Cancel</button>
            </form>
            <?php
              if($_POST){
                $upwhere['id']=$id;
                $data['order_status']=$_POST['order_status'];
                $data['payment_status']=$_POST['payment_status'];
                $result=$mysqli->common_update('order_details',$data,$upwhere);
                
                $tdata['order_id']=$id;
                $tdata['order_status']=$_POST['order_status'];
                $tdata['note']=$_POST['note'];
                $tdata['trackdate']=$_POST['trackdate'];
                $result=$mysqli->common_create('order_tracking',$tdata);
                if($result['error']){
                  $_SESSION['class']="danger";
                  $_SESSION['msg']=$result['error'];
                  echo "<script> location.replace('$base_url/order_list.php')</script>";
                }else{
                  $_SESSION['class']="success";
                  $_SESSION['msg']=$result['msg'];
                  echo "<script> location.replace('$base_url/order_list.php')</script>";
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