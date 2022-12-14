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
            <h4 class="card-title">Order List</h4>
            <div class="table-responsive pt-3">
            <?php include('message.php'); ?>
              <table class="table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Contact</th>
                    <th>Order Date</th>
                    <th>Total</th>
                    <th>Order Status</th>
                    <th>Payment Status</th>
                    <th>City</th> 
                    <th>Action</th> 
                  </tr>
                </thead>
                <tbody>
                  <?php
                    $result=$mysqli->common_select('order_details');
                    if(!$result['error']){
                      $status=array("","Pending", "Processing","shipped","Delivered","Canceled");
                      foreach($result['selectdata'] as $i=>$data){
                  ?>
                        <tr>
                          <td><?= ++$i ?></td>
                          <td><?= $data->full_name ?></td>
                          <td><?= $data->email ?></td>
                          <td><?= $data->phone ?></td>
                          <td><?= date('d/m-Y',strtotime($data->created_at)) ?></td>
                          <td><?= $data->total_amount ?></td>
                          <td><?= $status[$data->order_status] ?></td>
                          <td><?= $data->payment_status==1?"Paid":"Unpaid" ?></td>
                          <td><?= $data->town ?> </td>
                          <td>
                             <a href="order_edit.php?id=<?= $data->id ?>" class="btn btn-info btn-sm"> <i class="ti-pencil-alt"></i></a> 
                             <a href="order_track.php?id=<?= $data->id ?>" class="btn btn-info btn-sm"> <i class="ti-map"></i></a> 
                             <a href="invoice.php?id=<?= $data->id ?>" class="btn btn-info btn-sm"> <i class="ti-list"></i></a> 
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

