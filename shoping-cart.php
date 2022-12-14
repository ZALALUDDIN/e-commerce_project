<?php include('includes/header.php') ?>
<?php include('includes/header_bottom.php') ?>

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <div class="breadcrumb__text">
              <h2>Shopping Cart</h2>
              <div class="breadcrumb__option">
                <a href="index.php">Home</a>
                <span>Shopping Cart</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Shoping Cart Section Begin -->
    <section class="shoping-cart spad">
      <div class="container">
            <?php
              if(isset($_SESSION['cart']['data'])){
            ?>
        <div class="row">
          <div class="col-lg-12">
            <div class="shoping__cart__table">
              <table>
                <thead>
                  <tr>
                    <th class="shoping__product">Products</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Discount</th>
                    <th>Total</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($_SESSION['cart']['data'] as $cart_data){ ?>
                  <tr>
                    <td class="shoping__cart__item">
                      <img height="80px" src="admin/images/products/thumb/<?= $cart_data['image']?>" alt="" />
                      <h5><?= $cart_data['name']?></h5>
                    </td>
                    <td class="shoping__cart__price">BDT<?= $cart_data['price']?></td>
                    <td class="shoping__cart__quantity">
                      <div class="quantity">
                        <div class="pro-qty">
                          <input type="text" class="product_qty" value="<?= $cart_data['qty']?>" />
                        </div>
                      </div>
                    </td>
                    <td class="shoping__cart__dicount"><?= $cart_data['discount']?>BDT</td>
                    <td class="shoping__cart__total"><?= $cart_data['qty']*$cart_data['price']?>BDT</td>
                    <td class="shoping__cart__item__close">
                      <a href="#" onclick="update_cart(this,<?= $cart_data['cid']?>)"><span class="fa fa-edit"></span></a>
                    </td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="shoping__cart__btns">
              <a href="index.php" class="primary-btn cart-btn">CONTINUE SHOPPING</a>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="shoping__continue">
              <div class="shoping__discount">
                <h5>Discount Codes</h5>
                <form action="" method="post">
                  <input type="text" name="coupon_code" placeholder="Enter your coupon code" />
                  <button type="submit" name="apply_coupon" class="site-btn">APPLY COUPON</button>
                </form>
                <?php
                  if(isset($_POST['apply_coupon'])){
                    $wherecoupon['coupon_code']=$_POST['coupon_code'];
                    $res=$mysqli->common_select_single('coupon','*',$wherecoupon);
                    echo $res['error'];
                    if(!$res['error']){
                      if(strtotime($res['selectdata']->validity) < time()){
                        echo "<b class='text-danger'>This Code is expired</b>";
                      }else{
                        $totalprice=($_SESSION['cart']['totalprice'] - $_SESSION['cart']['coupon_discount']);
                        $coupondiscount=round($totalprice*($res['selectdata']->discount/100));
                        $_SESSION['cart']['coupon_discount']=$coupondiscount;
                        $_SESSION['cart']['coupon_code']=$res['selectdata']->coupon_code;
                      }
                    }else{
                      echo "<b class='text-danger'>Code is not valid</b>";
                    }
                  }
                ?>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="shoping__checkout">
              <h5>Cart Total</h5>
              <ul>
                <li>Subtotal <span>BDT<?= $_SESSION['cart']['totalprice'] ?> </span></li>
                <li>Discount <span>BDT<?= $_SESSION['cart']['totaldiscount'] ?> </span></li>
                <li>Coupon Discount (<?=$_SESSION['cart']['coupon_code'] ?>) BDT<span><?= $_SESSION['cart']['coupon_discount'] ?> </span></li>
                <li>Total <span>BDT<?= $_SESSION['cart']['totalprice'] - ($_SESSION['cart']['coupon_discount'] + $_SESSION['cart']['totaldiscount']) ?></span></li>
              </ul>
              <a href="checkout.php" class="primary-btn">PROCEED TO CHECKOUT</a>
            </div>
          </div>
        </div>
        <?php }else{ ?>
        <div class="row">
          <div class="col-12 text-center">
          <h5>Nothing in Cart. Please add product to cart</h5>
          </div>
        </div>
        <?php } ?>
      </div>
    </section>
    <!-- Shoping Cart Section End -->
    
    <!-- Footer Section Begin -->
    <?php include('includes/footer.php') ?>
    <script>
    function update_cart(e,cid){
      var qty=$(e).closest('tr').find('.product_qty').val();
      
      $.ajax({
              url: 'cart_update.php?id='+cid+'&qty='+qty,
              type: 'post',
              success: function (data) {
                location.reload(); 
              },error: function(xhr, status, errorMessage) {
              alert(errorMessage);
            }
          });
    
    }
  </script>