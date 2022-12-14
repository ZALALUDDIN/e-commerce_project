<?php include('includes/header.php') ?>
<?php include('includes/header_bottom.php') ?>
<?php
	if(!isset($_SESSION['customer_id']) && !$_SESSION['customer_id']){
		echo "<script> location.replace('$base_url/customer_login.php')</script>";
	}
    if(!isset($_SESSION['cart']['data']) && !$_SESSION['cart']['data']){
		echo "<script> location.replace('$base_url')</script>";
	}
 ?>
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Checkout</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.php">Home</a>
                            <span>Checkout</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">
            <div class="checkout__form">
                <h4>Billing Details</h4>
                <?php include('./admin/message.php'); ?>
                <form action="" method="POST" >
                    <div class="container">
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="checkout__input">
                                        <p>Full Name<span>*</span></p>
                                        <input value="<?= $_SESSION['customer_name'] ?>" type="text" name="full_name"  class="form-control">
                                    </div>
                                </div>
                                
                            </div>
                            
                            <div class="checkout__input">
                                <p>Billing Address<span>*</span></p>
                                <textarea name="address" id="address" cols="30" rows="5" class="checkout__input__add form-control" ><?= $_SESSION['customer_address'] ?></textarea>
                            </div>
                  
                                    <div class="checkout__input">
                                        <p>Town/City<span>*</span></p>
                                        <select name="town" class="form-control checkout__input__add">
                                            <option value="">Select City</option>
                                            <option value="Chattogram">Chattogram</option>
                                            <option value="Dhaka">Dhaka</option>
                                            <option value="Sylhet">Sylhet</option>
                                            <option value="Khulna">Khulna</option>
                                            <option value="Rajsahi">Rajsahi</option>
                                            <option value="Barisal">Barisal</option>
                                            <option value="Rangpur">Rangpur</option>
                                        </select>
                                    </div>
                           
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Phone<span>*</span></p>
                                        <input value="<?= $_SESSION['customer_contact'] ?>" type="text"  class="form-control" name="phone">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Email<span>*</span></p>
                                        <input value="<?= $_SESSION['customer_email'] ?>" type="text" class="form-control" name="email">
                                    </div>
                                </div>
                            </div>
                           
                            <div class="row">
                                <div class="col-lg-6 ">
                                    <div class="checkout__input">
                                        <p> Order notes</p>
                                        <textarea name="order_note" rows="5" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p onclick="$('#shipping_address').val($('#address').val())"><span>Same as billing?</span>Shipping Address</p>
                                        <textarea name="shipping_address" id="shipping_address" rows="5" class="checkout__input__add form-control" ></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="checkout__order">
                                <h4>Your Order</h4>
                                <div class="checkout__order__products">Products <span>Total</span></div>
                                <ul>
                                    <?php $totalqty=0; foreach($_SESSION['cart']['data'] as $cart_data){ $totalqty+=$cart_data['qty']; ?>
                                    <li><?= $cart_data['name']?> <span>BDT<?= $cart_data['price']?></span></li>
                                    <?php } ?>
                                </ul>
                                <div class="checkout__order__subtotal">Subtotal <span>BDT<?= $_SESSION['cart']['totalprice'] ?></span></div>
                                <div class="checkout__order__total">Discount <span class="text-success">BDT<?= $_SESSION['cart']['totaldiscount'] ?></span></div>
                                <div class="checkout__order__total">Coupon <span class="text-success">BDT<?= $_SESSION['cart']['coupon_discount'] ?></span></div>
                                <div class="checkout__order__total">Total <span>BDT<?= $_SESSION['cart']['totalprice'] - ($_SESSION['cart']['coupon_discount'] + $_SESSION['cart']['totaldiscount']) ?></span></div>
                                <div class="checkout__input__checkbox">
                                    <label for="acc-or">
                                        Pay only with Cash on Delivery 
                                    </label>
                                </div>
                                <button type="submit" class="site-btn">PLACE ORDER</button>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
                <?php

                    if($_POST){
                        
                        $order['full_name']=$_POST['full_name'];
                        $order['address']=$_POST['address'];
                        $order['town']=$_POST['town'];
                        $order['phone']=$_POST['phone'];
                        $order['email']=$_POST['email'];
                        $order['shipping_address']=$_POST['shipping_address'];
                        $order['order_note']=$_POST['order_note'];
                        /* data from session */
                        $order['customer_id']=$_SESSION['customer_id'];
                        $order['total_quantity']=$totalqty;
                        $order['sub_amount']=$_SESSION['cart']['totalprice'];
                        $order['discount']=$_SESSION['cart']['totaldiscount'];
                        $order['coupon_discount']=$_SESSION['cart']['coupon_discount'];
                        $order['coupon_code']=$_SESSION['cart']['coupon_code'];
                        $order['total_amount']=($_SESSION['cart']['totalprice'] - ($_SESSION['cart']['coupon_discount'] + $_SESSION['cart']['totaldiscount']));
                        $order['order_status']=1;
                        $order['order_data']=base64_encode(json_encode($_SESSION['cart']));

                        $result=$mysqli->common_create('order_details',$order);
                        if($result['error']){
                        $_SESSION['class']="danger";
                        $_SESSION['msg']=$result['error'];
                        echo "<script> location.replace('$base_url/checkout.php')</script>";
                        }else{
                            unset($_SESSION['cart']);
                            $_SESSION['class']="success";
                            $_SESSION['msg']=$result['msg'];
                            echo "<script> location.replace('$base_url/checkout.php')</script>";
                        }
                    }

              ?>
            </div>
        </div>
    </section>
    <!-- Checkout Section End -->

    <!-- Footer Section Begin -->
    <?php include('includes/footer.php') ?>