<?php include('includes/header.php') ?>
<?php include('includes/header_bottom.php') ?>

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Shop</h2>
                        <div class="breadcrumb__option">
                            <a href="index.php">Home</a>
                            <span>Shop</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-5">
                    <div class="sidebar">
                        <div class="sidebar__item">
                            <h4>Department</h4>
                            <ul>
                            <?php
								$cats=$mysqli->common_select('product_category','id,category');
								if(!$cats['error']){
									foreach($cats['selectdata'] as $cat){
							?>
							<li><a href="category.php?id=<?= $cat->id ?>"><?= $cat->category ?></a></li>
							<?php } } ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-7">
				<?php
	$discountwhere['discount >']=1;
	$discount_products=$mysqli->common_select('product','*',$discountwhere);
	if(!$discount_products['error'] && $discount_products['selectdata']){ ?>
                    <div class="product__discount">
                        <div class="section-title product__discount__title">
                            <h2>Sale Off</h2>
                        </div>
                        <div class="row">
                            <div class="product__discount__slider owl-carousel">
<?php foreach($discount_products['selectdata'] as $dispro){ ?>
                                <div class="col-lg-4">
                                    <div class="product__discount__item">
                                        <div class="product__discount__item__pic set-bg"
                                            data-setbg="<?= $base_url?>/admin/images/products/thumb/<?= $dispro->thumb ?>">
                                            <div class="product__discount__percent">-<?= $dispro->discount ?>BDT</div>
                                            <ul class="product__item__pic__hover">
                                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                <li><a href="<?= $base_url ?>/cart_add.php?id=<?= $dispro->id ?>"><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product__discount__item__text">
                                            <span><?= $dispro->name ?></span>
                                            <h5><a href="shop-details.php?id=<?= $dispro->id ?>"><?= $dispro->desc_short ?></a></h5>
                                            <div class="product__item__price"><?= ($dispro->price - $dispro->discount)  ?>BDT <span> <?= $dispro->price ?>BDT</span></div>
                                        </div>
                                    </div>
                                </div>
	<?php }  ?>
							</div>
                        </div>
                    </div>
	<?php } ?>
                   
                    <div class="row">
					<?php
	$catwhere['discount <']=0;
	$cat_products=$mysqli->common_select('product','*',$catwhere);
	if(!$cat_products['error'] && $cat_products['selectdata']){
		foreach($cat_products['selectdata'] as $catpro){

?>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="admin/images/products/thumb/<?= $catpro->thumb ?>">
                                    <ul class="product__item__pic__hover">
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="<?= $base_url ?>/cart_add.php?id=<?= $catpro->id ?>"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="#"><?= $catpro->name ?></a></h6>
                                    <div ><?= $catpro->price ?>BDT</div>
                                </div>
                            </div>
                        </div>
	<?php } } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Section End -->

    <!-- Footer Section Begin -->
	<?php include('includes/footer.php') ?>

<script>

</script>