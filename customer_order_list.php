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
            <h4 class="card-title text-center">Order List</h4>
            <div class="table-responsive pt-3">
            <?php include('./admin/message.php'); ?>
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
                    <th>Invoice</th> 
                  </tr>
                </thead>
                <tbody>
                  <?php
                    $where['customer_id']=$_SESSION['customer_id'];
                    $result=$mysqli->common_select('order_details','*',$where);
                    if(!$result['error']){
                      $status=array("Pending", "Processing","shipped","Delivered","Canceled");
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
                          <td><a href="invoice.php?id=<?= $data->id ?>" target="_blank" class="btn btn-info btn-sm"> <i class="fa fa-file-pdf-o"></i></a> </td>
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
    include_once('includes/footer.php');
?>
</div>

