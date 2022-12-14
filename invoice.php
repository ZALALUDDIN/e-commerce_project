<?php include_once("includes/connection.php"); ?>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<style>
	@media print {
		.prnt-btn{
			display:none;
		}
	}
	.prnt-btn{
			margin-top:15px;
		}
</style>
<?php
	$w['id']=$_GET['id'];
	$r=$mysqli->common_select_single('order_details','*',$w)['selectdata'];
?>

  <div class="container">
	<button type="button" class="btn btn-primary prnt-btn" onclick="window.print()"> Print</button>
    <div class="row">
        <div class="col-xs-12">
    		<div class="invoice-title">
    			<h2  style="display: inline-block;">Invoice</h2>
				<h3 class="pull-right" style="display: inline-block;">Order # <?php printf("%04d", $r->id); ?></h3>
				<br>
				<address>
					<b>Ogani E-Commerce</b><br>
					Admin Resort NVIT<br>
					2 No. Gate, Chattogram.
				</address>
			</div>
    		<hr>
    		<div class="row">
    			<div class="col-xs-6">
    				<address>
    				<strong>Shipping Address:</strong><br>
						<?= $r->full_name ?><br>
						<?= $r->shipping_address?$r->shipping_address:$r->address ?>,<br>
						<?= $r->town ?><br>
    					<?= $r->phone ?><br>
    					<?= $r->email ?>
    				</address>
    			</div>
    			<div class="col-xs-6 text-right">
    				<address>
        			<strong>Billed To:</strong><br>
    					<?= $r->full_name ?><br>
    					<?= $r->address ?><br>
    					<?= $r->phone ?><br>
    					<?= $r->email ?>
    				</address>
    			</div>
    		</div>
    		<div class="row">
    			<div class="col-xs-6">
    				<address>
    					<strong>Payment Method:</strong><br>
    					Cash On Delivery<br>
    					
    				</address>
    			</div>
    			<div class="col-xs-6 text-right">
    				<address>
    					<strong>Order Date:</strong><br>
    					<?= date('F d, Y',strtotime($r->created_at))?><br><br>
    				</address>
    			</div>
    		</div>
    	</div>
    </div>
    
    <div class="row">
    	<div class="col-md-12">
    		<div class="panel panel-default">
    			<div class="panel-heading">
    				<h3 class="panel-title"><strong>Order summary</strong></h3>
    			</div>
    			<div class="panel-body">
    				<div class="table-responsive">
    					<table class="table table-condensed">
    						<thead>
                                <tr>
        							<td><strong>Item</strong></td>
        							<td class="text-center"><strong>Price</strong></td>
        							<td class="text-center"><strong>Quantity</strong></td>
        							<td class="text-right"><strong>Totals</strong></td>
                                </tr>
    						</thead>
    						<tbody>
    							<?php foreach (json_decode(base64_decode($r->order_data))->data as $line){  ?>
    							<tr>
    								<td><?= $line->name ?></td>
    								<td class="text-center"><?= $line->price ?></td>
    								<td class="text-center"><?= $line->qty ?></td>
    								<td class="text-right"><?= $line->price * $line->qty ?></td>
    							</tr>
								<?php } ?>
    							<tr>
    								<td style="border-top: 2px solid;" class="thick-line"></td>
    								<td style="border-top: 2px solid;" class="thick-line"></td>
    								<td style="border-top: 2px solid;" class="thick-line text-right"><strong>Subtotal</strong></td>
    								<td style="border-top: 2px solid;" class="thick-line text-right"><?= $r->sub_amount ?></td>
    							</tr>
    							<tr>
    								<td style=" border-top: none;" class="no-line"></td>
    								<td style=" border-top: none;" class="no-line"></td>
    								<td style=" border-top: none;" class="no-line text-right"><strong>Discount</strong></td>
    								<td style=" border-top: none;" class="no-line text-right"><?= $r->discount ?></td>
    							</tr>
								<?php if($r->coupon_discount > 0){ ?>
								<tr>
    								<td style=" border-top: none;" class="no-line"></td>
    								<td style=" border-top: none;" class="no-line"></td>
    								<td style=" border-top: none;" class="no-line text-right"><strong>Coupon Discount (<?= $r->coupon_code ?>)</strong></td>
    								<td style=" border-top: none;" class="no-line text-right"><?= $r->coupon_discount ?></td>
    							</tr>
								<?php } ?>
    							<tr>
    								<td style=" border-top: none;" class="no-line"></td>
    								<td style=" border-top: none;" class="no-line"></td>
    								<td style=" border-top: none;" class="no-line text-right"><strong>Total</strong></td>
    								<td style=" border-top: none;" class="no-line text-right"><?= $r->total_amount ?></td>
    							</tr>
    						</tbody>
    					</table>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
</div>