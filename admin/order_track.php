<?php 
  require_once('include/header.php');
  require_once('include/top_bar.php');
  require_once('include/side_bar.php');
?>
<style>

.is-complete{
	display: block;
	position: relative;
	border-radius: 50%;
	height: 30px;
	width: 30px;
	border: 0px solid #AFAFAF;
	background-color: #f7be16;
	margin: 0 auto;
	transition: background 0.25s linear;
	-webkit-transition: background 0.25s linear;
	z-index: 2;
}
.is-complete:after {
	display: block;
	position: absolute;
	content: '';
	height: 14px;
	width: 7px;
	top: -2px;
	bottom: 0;
	left: 5px;
	margin: auto 0;
	border: 0px solid #AFAFAF;
	border-width: 0px 2px 2px 0;
	transform: rotate(45deg);
	opacity: 0;
}
.is-complete{
	border-color: #27aa80;
	border-width: 0px;
	background-color: #27aa80;
}
.is-complete:after {
	border-color: #fff;
	border-width: 0px 3px 3px 0;
	width: 7px;
	left: 11px;
	opacity: 1;
}


</style>

<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Order Tracking</h4>
            <?php include('message.php'); ?>
            <?php
              $id=$_GET['id'];
              $where['order_id']=$id;
              $result=$mysqli->common_select('order_tracking','*',$where,'id','desc');
              if(!$result['error']){
                if($result['selectdata']){
                  $track=$result['selectdata'];
                  $status=array("","Ordered", "Processing","shipped","Delivered","Canceled");
            ?>
          <div class="row">
						<div class="col-12 pt45 pb20">
							<div class="row justify-content-between">
                  <table>
                <?php foreach($track as $t){ ?>
                    <tr>
                      <td><span class="is-complete"></span></td>
                      <td>
                        <span class="text-secondary"><?= $status[$t->order_status] ?></span><br>
                        <span class="text-secondary"><?= date('d/m/y',strtotime($t->trackdate)) ?></span><br>
                        <?= $t->note ?><br><br>
                      </td>
                    </tr>
                <?php } ?>
                  </table>
							</div>
						</div>
					</div>
          <?php   }
              }else{
                echo "No data found";
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