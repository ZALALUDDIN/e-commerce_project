<?php include('includes/header.php') ?>

    <!-- Hero Section Begin -->
    <section class="hero">
      <div class="container">
        <div class="row">
          <div class="col-lg-3">
            <div class="hero__categories">
              <div class="hero__categories__all">
                <i class="fa fa-bars"></i>
                <span>All departments</span>
              </div>
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
          <div class="col-lg-9">
            <div class="hero__search">
              <div class="hero__search__form">
                <form action="#">
                  <input type="text" placeholder="What do yo u need?" />
                  <button type="submit" class="site-btn">SEARCH</button>
                </form>
              </div>
              <div class="hero__search__phone">
                <div class="hero__search__phone__icon">
                  <i class="fa fa-phone"></i>
                </div>
                <div class="hero__search__phone__text">
                  <h5>+8801858380039</h5>
                  <span>support 24/7 time</span>
                </div>
              </div>
            </div>
            <div class="hero__item set-bg" data-setbg="img/hero/banner.jpg">
              <div class="hero__text">
                <span>FRUIT FRESH</span>
                <h2>Vegetable <br />100% Organic</h2>
                <p>Free Pickup and Delivery Available</p>
                <a href="<?= $base_url ?>/category.php?id=9" class="primary-btn">SHOP NOW</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Hero Section End -->
    <!-- Categories Section Begin -->
    <section class="categories">
      <div class="container">
        <div class="row">
          <div class="categories__slider owl-carousel">
            <?php
              $where['show_home']=1;
              $hcats=$mysqli->common_select('product_category','*',$where);
              if(!$hcats['error']){
                foreach($hcats['selectdata'] as $cat){
            ?>
            <div class="col-lg-3">
              <div
                class="categories__item set-bg"
                data-setbg="admin/images/category/<?= $cat->image ?>">
                <h5><a href="category.php?id=<?= $cat->id ?>"><?= $cat->category ?></a></h5>
              </div>
            </div>
            <?php } } ?>
          </div>
        </div>
      </div>
    </section>
    <!-- Categories Section End -->

    <!-- Featured Section Begin -->
    <section class="featured spad">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="section-title">
              <h2>Featured Product</h2>
            </div>
            <div class="featured__controls">
              <ul>
                <li class="active" data-filter="*">All</li>
                <?php
                  $fcsql="SELECT * FROM `product_category` WHERE `id` in (select category_id from product where product.latest_products = 1)";
                  $fcatdata=$mysqli->custom_select($fcsql);
                  if($fcatdata['numrows'] > 0){
                    foreach($fcatdata['selectdata'] as $d){
                ?>
                <li data-filter=".catt<?= $d->id ?>"><?= $d->category ?></li>
                <?php } } ?>
              </ul>
            </div>
          </div>
        </div>
        <div class="row featured__filter">
        <?php
            $wh['offer']=1;
            $fcatdata=$mysqli->common_select('product','*',$wh);
            if($fcatdata['numrows'] > 0){
              foreach($fcatdata['selectdata'] as $d){
          ?>
          <div class="col-lg-3 col-md-4 col-sm-6 mix catt<?= $d->category_id ?> fresh-meat">
            <!-- add to cart script start -->
            <div class="featured__item">
              <div
                class="featured__item__pic set-bg"
                data-setbg="<?= $base_url?>/admin/images/products/thumb/<?= $d->thumb ?>"
              >
                <ul class="featured__item__pic__hover">
                  <li>
                    <a href="<?= $base_url ?>/cart_add.php?id=<?= $d->id ?>"><i class="fa fa-shopping-cart"></i></a>
                  </li>
                </ul>
              </div>
              <div class="featured__item__text">
                <h6><a href="shop-details.php?id=<?= $d->id ?>"><?= $d->name ?></a></h6>
                <h5><?= $d->price ?>BDT</h5>
              </div>
            </div>
          </div>
          <?php } } ?>
        </div>
      </div>
    </section>
    <!-- Featured Section End -->

    <!-- Banner Begin -->
    <div class="banner">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="banner__pic">
              <img src="img/banner/banner-1.jpg" alt="" />
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="banner__pic">
              <img src="img/banner/banner-2.jpg" alt="" />
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Banner End -->

    <!-- Latest Product Section Begin -->
    <section class="latest-product spad">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="latest-product__text">
              <h4>Latest Products</h4>
              <div class="latest-product__slider owl-carousel">
                <div class="latest-prdouct__slider__item">
                  <a href="#" class="latest-product__item">
                    <div class="latest-product__item__pic">
                      <img src="img/latest-product/lp-1.jpg" alt="" />
                    </div>
                    <div class="latest-product__item__text">
                      <h6>Crab Pool Security</h6>
                      <span>$30.00</span>
                    </div>
                  </a>
                  <a href="#" class="latest-product__item">
                    <div class="latest-product__item__pic">
                      <img src="img/latest-product/lp-2.jpg" alt="" />
                    </div>
                    <div class="latest-product__item__text">
                      <h6>Crab Pool Security</h6>
                      <span>$30.00</span>
                    </div>
                  </a>
                  <a href="#" class="latest-product__item">
                    <div class="latest-product__item__pic">
                      <img src="img/latest-product/lp-3.jpg" alt="" />
                    </div>
                    <div class="latest-product__item__text">
                      <h6>Crab Pool Security</h6>
                      <span>$30.00</span>
                    </div>
                  </a>
                </div>
                <div class="latest-prdouct__slider__item">
                  <a href="#" class="latest-product__item">
                    <div class="latest-product__item__pic">
                      <img src="img/latest-product/lp-1.jpg" alt="" />
                    </div>
                    <div class="latest-product__item__text">
                      <h6>Crab Pool Security</h6>
                      <span>$30.00</span>
                    </div>
                  </a>
                  <a href="#" class="latest-product__item">
                    <div class="latest-product__item__pic">
                      <img src="img/latest-product/lp-2.jpg" alt="" />
                    </div>
                    <div class="latest-product__item__text">
                      <h6>Crab Pool Security</h6>
                      <span>$30.00</span>
                    </div>
                  </a>
                  <a href="#" class="latest-product__item">
                    <div class="latest-product__item__pic">
                      <img src="img/latest-product/lp-3.jpg" alt="" />
                    </div>
                    <div class="latest-product__item__text">
                      <h6>Crab Pool Security</h6>
                      <span>$30.00</span>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="latest-product__text">
              <h4>Top Rated Products</h4>
              <div class="latest-product__slider owl-carousel">
                <div class="latest-prdouct__slider__item">
                  <a href="#" class="latest-product__item">
                    <div class="latest-product__item__pic">
                      <img src="img/latest-product/lp-1.jpg" alt="" />
                    </div>
                    <div class="latest-product__item__text">
                      <h6>Crab Pool Security</h6>
                      <span>$30.00</span>
                    </div>
                  </a>
                  <a href="#" class="latest-product__item">
                    <div class="latest-product__item__pic">
                      <img src="img/latest-product/lp-2.jpg" alt="" />
                    </div>
                    <div class="latest-product__item__text">
                      <h6>Crab Pool Security</h6>
                      <span>$30.00</span>
                    </div>
                  </a>
                  <a href="#" class="latest-product__item">
                    <div class="latest-product__item__pic">
                      <img src="img/latest-product/lp-3.jpg" alt="" />
                    </div>
                    <div class="latest-product__item__text">
                      <h6>Crab Pool Security</h6>
                      <span>$30.00</span>
                    </div>
                  </a>
                </div>
                <div class="latest-prdouct__slider__item">
                  <a href="#" class="latest-product__item">
                    <div class="latest-product__item__pic">
                      <img src="img/latest-product/lp-1.jpg" alt="" />
                    </div>
                    <div class="latest-product__item__text">
                      <h6>Crab Pool Security</h6>
                      <span>$30.00</span>
                    </div>
                  </a>
                  <a href="#" class="latest-product__item">
                    <div class="latest-product__item__pic">
                      <img src="img/latest-product/lp-2.jpg" alt="" />
                    </div>
                    <div class="latest-product__item__text">
                      <h6>Crab Pool Security</h6>
                      <span>$30.00</span>
                    </div>
                  </a>
                  <a href="#" class="latest-product__item">
                    <div class="latest-product__item__pic">
                      <img src="img/latest-product/lp-3.jpg" alt="" />
                    </div>
                    <div class="latest-product__item__text">
                      <h6>Crab Pool Security</h6>
                      <span>$30.00</span>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="latest-product__text">
              <h4>Review Products</h4>
              <div class="latest-product__slider owl-carousel">
                <div class="latest-prdouct__slider__item">
                  <a href="#" class="latest-product__item">
                    <div class="latest-product__item__pic">
                      <img src="img/latest-product/lp-1.jpg" alt="" />
                    </div>
                    <div class="latest-product__item__text">
                      <h6>Crab Pool Security</h6>
                      <span>$30.00</span>
                    </div>
                  </a>
                  <a href="#" class="latest-product__item">
                    <div class="latest-product__item__pic">
                      <img src="img/latest-product/lp-2.jpg" alt="" />
                    </div>
                    <div class="latest-product__item__text">
                      <h6>Crab Pool Security</h6>
                      <span>$30.00</span>
                    </div>
                  </a>
                  <a href="#" class="latest-product__item">
                    <div class="latest-product__item__pic">
                      <img src="img/latest-product/lp-3.jpg" alt="" />
                    </div>
                    <div class="latest-product__item__text">
                      <h6>Crab Pool Security</h6>
                      <span>$30.00</span>
                    </div>
                  </a>
                </div>
                <div class="latest-prdouct__slider__item">
                  <a href="#" class="latest-product__item">
                    <div class="latest-product__item__pic">
                      <img src="img/latest-product/lp-1.jpg" alt="" />
                    </div>
                    <div class="latest-product__item__text">
                      <h6>Crab Pool Security</h6>
                      <span>$30.00</span>
                    </div>
                  </a>
                  <a href="#" class="latest-product__item">
                    <div class="latest-product__item__pic">
                      <img src="img/latest-product/lp-2.jpg" alt="" />
                    </div>
                    <div class="latest-product__item__text">
                      <h6>Crab Pool Security</h6>
                      <span>$30.00</span>
                    </div>
                  </a>
                  <a href="#" class="latest-product__item">
                    <div class="latest-product__item__pic">
                      <img src="img/latest-product/lp-3.jpg" alt="" />
                    </div>
                    <div class="latest-product__item__text">
                      <h6>Crab Pool Security</h6>
                      <span>$30.00</span>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Latest Product Section End -->

    <!-- Blog Section Begin -->
    <section class="from-blog spad">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="section-title from-blog__title">
              <h2>From The Blog</h2>
            </div>
          </div>
        </div>
        <div class="row">
            <?php
              $blogs=$mysqli->common_select('blog','*',false,'id','DESC',0,3);
              if(!$blogs['error']){
                foreach($blogs['selectdata'] as $blog){
            ?>
          <div class="col-lg-4 col-md-4 col-sm-6">
            <div class="blog__item">
              <div class="blog__item__pic">
                <img class="w-100" src="<?= $base_url ?>/admin/images/blog/images/<?= $blog->image ?>" alt="" />
              </div>
              <div class="blog__item__text">
                <ul>
                  <li><i class="fa fa-calendar-o"></i> <?= date('F d, Y',strtotime($blog->created_at)) ?></li>
                </ul>
                <h5><a href="blog-details.php?id=<?= $blog->id ?>"><?= $blog->title ?></a></h5>
                <p>
                  <?= substr_replace($blog->description, "...", 100); ?>
                </p>
              </div>
            </div>
          </div>
          <?php } } ?>

        </div>
      </div>
    </section>
    <!-- Blog Section End -->

    <?php include('includes/footer.php') ?>