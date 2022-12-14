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
    <div class="row ">
        <div class="col-xl-3 col-lg-4">
            <div class="card l-bg-cherry">
                <div class="card-statistic-3 p-4">
                    <div class="row align-items-center mb-2 d-flex text-center">
                        <div class="col-12">
                            <div class="card-icon card-icon-large" style="font-size:72px"><i class="fa fa-shopping-cart"></i></div>
                            <div class="mb-4">
                                <h5 class="card-title mb-0">New Orders</h5>
                            </div>
                        </div>
                        <div class="col-12">
                            <h2 class="text-center">
                                <?php
                                    $orw['customer_id']=$_SESSION['customer_id'];
                                    $orw['order_status']=1;
                                    $data=$mysqli->common_count('order_details');
                                    echo $data['numrows'];
                                ?>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-4">
            <div class="card l-bg-cherry">
                <div class="card-statistic-3 p-4">
                    <div class="row align-items-center mb-2 d-flex text-center">
                        <div class="col-12">
                            <div class="card-icon card-icon-large text-success" style="font-size:72px"><i class="fa fa-shopping-cart"></i></div>
                            <div class="mb-4">
                                <h5 class="card-title mb-0">Delivered Orders</h5>
                            </div>
                        </div>
                        <div class="col-12">
                            <h2 class="text-center">
                                <?php
                                    $orw['customer_id']=$_SESSION['customer_id'];
                                    $orw['order_status']=4;
                                    $data=$mysqli->common_count('order_details');
                                    echo $data['numrows'];
                                ?>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-4">
            <div class="card l-bg-cherry">
                <div class="card-statistic-3 p-4 text-center">
                    <div class="row align-items-center mb-2 d-flex">
                        <div class="col-12">
                            <div class="card-icon card-icon-large" style="font-size:72px"><i class="fa fa-dollar"></i></div>
                            <div class="mb-4">
                                <h5 class="card-title mb-0">Delivered Orders</h5>
                            </div>
                        </div>
                        <div class="col-12">
                            <h2 class="text-center">
                                <?php
                                    $amw['customer_id']=$_SESSION['customer_id'];
                                    $data=$mysqli->common_select_single('order_details','sum(total_amount) as pay',$amw);
                                    echo $data['selectdata']->pay;
                                ?>
                            </h2>
                        </div>
                    </div>
                </div>
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