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
            <h4 class="card-title">Order Info List</h4>
            <div class="table-responsive pt-3">
            <?php include('message.php'); ?>
              <table class="table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Customer Id</th>
                    <th>Full Name</th>
                    <th>Town</th>  
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Order Note</th>
                    <th>Total Quantity</th>
                    <th>Sub Amount</th>
                    <th>Discount</th>
                    <th>Coupon Discount</th>
                    <th>Coupon Code</th>
                    <th>Total Amount</th>
                    <th>Order Data</th>
                    <th>Order Status</th>
                    <th>Payment Status</th>
                    <th>Cancel Reason</th>
                    <th>Address</th>
                    <th>Shipping Address</th>
                    <th>Action</th> 
                  </tr>
                </thead>
                <tbody>
                  <?php
                    $result=$mysqli->common_select('order_details');
                    if(!$result['error']){
                      foreach($result['selectdata'] as $i=>$data){
                  ?>
                        <tr>
                          <td><?= ++$i ?></td>
                          <td><?= $data->customer_id ?></td>
                          <td><?= $data->full_name ?></td>
                          <td><?= $data->town ?></td>
                          <td><?= $data->phone ?></td>
                          <td><?= $data->email ?></td>
                          <td><?= $data->order_note ?></td>
                          <td><?= $data->total_quantity ?></td>
                          <td><?= $data->sub_amount ?></td>
                          <td><?= $data->discount ?></td>
                          <td><?= $data->coupon_discount ?></td>
                          <td><?= $data->coupon_code ?></td>
                          <td><?= $data->total_amount ?></td>
                          <td><?= $data->order_data ?></td>
                          <td><?= $data->order_status ?></td>
                          <td><?= $data->payment_status ?></td>
                          <td><?= $data->cancel_reason ?></td>
                          <td><?= $data->address ?></td>
                          <td><?= $data->shipping_address ?></td>
                          <td>
                            <a href="<?= $base_url ?>/user_add_edit.php?id=<?= $data->id ?>" class="btn btn-info btn-sm">Edit</a>
                          </td>
                        </tr>
                  <?php } } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php 
    require_once('include/footer.php');
  ?>
</div>

