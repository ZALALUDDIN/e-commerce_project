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
            <h4 class="card-title">Order Address Check</h4>
            <?php include('message.php'); ?>
            <?php
              $id=$_GET['id'];
              $where['id']=$id;
              $result=$mysqli->common_select_single('order_details','*',$where)['selectdata'];
            ?>
            <form class="forms-sample" method="post" action="" enctype="multipart/form-data">
              <div class="form-group">
                <label for="customer_id">Customer Id</label>
                <input value="<?= $result->customer_id ?>" type="text" class="form-control" id="customer_id" name="customer_id">
              </div>

              <div class="form-group">
                <label for="full_name">Full Name</label>
                <input value="<?= $result->full_name ?>" type="text" class="form-control" id="full_name" name="full_name">
              </div>

              <div class="form-group">
                <label for="town">Town</label>
                <input value="<?= $result->town ?>" type="text" class="form-control" id="town" name="town">
              </div>

              <div class="form-group">
                <label for="phone">Phone</label>
                <input value="<?= $result->phone ?>" type="text" class="form-control" id="phone" name="phone">
              </div>

              <div class="form-group">
                <label for="email">Email</label>
                <input value="<?= $result->email ?>" type="text" class="form-control" id="email" name="email">
              </div>

              <div class="form-group">
                <label for="order_note">Order Note</label>
                <input value="<?= $result->order_note ?>" type="text" class="form-control" id="order_note" name="order_note">
                
              </div>
              <div class="form-group">
                <label for="total_quantity">Total Quantity</label>
                <input value="<?= $result->total_quantity ?>" type="text" class="form-control" id="total_quantity" name="total_quantity">
                 
              </div>

              <div class="form-group">
                <label for="sub_amount">Sub Amount</label>
                <input value="<?= $result->sub_amount ?>" type="text" class="form-control" id="sub_amount" name="sub_amount">   
              </div>

              <div class="form-group">
                <label for="discount">Discount</label>
                <input value="<?= $result->discount ?>" type="text" class="form-control" id="discount" name="discount">   
              </div>

              <div class="form-group">
                <label for="coupon_discount">Coupon Discount</label>
                <input value="<?= $result->coupon_discount ?>" type="text" class="form-control" id="coupon_discount" name="coupon_discount">   
              </div>

              <div class="form-group">
                <label for="coupon_code">Coupon Code</label>
                <input value="<?= $result->coupon_code ?>" type="text" class="form-control" id="coupon_code" name="coupon_code">   
              </div>

              <div class="form-group">
                <label for="total_amount">Total Amount</label>
                <input value="<?= $result->total_amount ?>" type="text" class="form-control" id="total_amount" name="total_amount">   
              </div>

              <div class="form-group">
                <label for="order_data">Order Data</label>
                <input value="<?= $result->order_data ?>" type="text" class="form-control" id="order_data" name="order_data">   
              </div>

              <div class="form-group">
                <label for="order_status">order_status</label>
                 <select name="" id="" class="form-control">
                   <option value="1">Pending</option>
                   <option value="2">Processing</option>
                   <option value="3">Shipped</option>
                   <option value="4">Delivered</option>
                   <option value="5">Canceled</option>
                 </select>   
              </div>

              <div class="form-group">
                <label for="order_status">Order Status</label>
                <input value="<?= $result->order_status ?>" type="text" class="form-control" id="order_status" name="order_status">   
              </div>

              <div class="form-group">
                <label for="payment_status">Payment Status</label>
                <input value="<?= $result->payment_status ?>" type="text" class="form-control" id="payment_status" name="payment_status">   
              </div>

              <div class="form-group">
                <label for="cancel_reason">Cancel Reason</label>
               <textarea value="<?= $result->cancel_reason ?>" name="cancel_reason" id="cancel_reason" cols="30" rows="10" class="form-control"></textarea>  
              </div>



              <div class="form-group">
                <label for="address">Address</label>
                <textarea value="<?= $result->address ?>" name="address" class="form-control" id="address" cols="30" rows="5"></textarea>  
              </div>

              <div class="form-group">
                <label for="shipping_address">Billing Address</label>
                <textarea value="<?= $result->shipping_address ?>" name="shipping_address" class="form-control" id="shipping_address" cols="30" rows="5"></textarea>
              </div>
              
              <button type="submit" class="btn btn-primary me-2">Submit</button>
              <button class="btn btn-light">Cancel</button>
            </form>
            <?php
              if($_POST){
               
                $upwhere['id']=$id;
                $result=$mysqli->common_update('order_details',$_POST,$upwhere);
                if($result['error']){
                  $_SESSION['class']="danger";
                  $_SESSION['msg']=$result['error'];
                  echo "<script> location.replace('$base_url/user_add_create.php')</script>";
                }else{
                  $_SESSION['class']="success";
                  $_SESSION['msg']=$result['msg'];
                  echo "<script> location.replace('$base_url/user_add_list.php')</script>";
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