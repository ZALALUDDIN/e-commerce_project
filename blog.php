<?php 
      include_once('includes/header.php');  
?>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <?php include('includes/header_bottom.php') ?>
    <!-- Hero Section End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Blog</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.html">Home</a>
                            <span>Blog</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Blog Section Begin -->
    <section class="blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-5">
                    <div class="blog__sidebar">
                        <div class="blog__sidebar__item">
                            <h4>Categories</h4>
                            <ul>
                                <li><a href="blog.php">All</a></li>
                                <?php
                                    $cat=array();
                                    $blog_cat=$mysqli->common_select('blog_category');
                                    foreach($blog_cat['selectdata'] as $b){
                                        $cat[$b->id]=$b->category;
                                ?>
                                    <li><a href="blog.php?cat=<?= $b->id ?>"><?= $b->category ?></a></li>
                                <?php } ?>
                            </ul>
                        </div>
                        <div class="blog__sidebar__item">
                            <h4>Recent News</h4>
                            <div class="blog__sidebar__recent">
                            <?php
                                $rblogs=$mysqli->common_select('blog','*',false,'id','DESC',0,3);
                                if(!$rblogs['error']){
                                    foreach($rblogs['selectdata'] as $rb){
                            ?>
                                <a href="#" class="blog__sidebar__recent__item">
                                    <div class="blog__sidebar__recent__item__pic">
                                        <img style="width:70px;height:70px" src="<?= $base_url ?>/admin/images/blog/images/<?= $rb->image ?>" alt="">
                                    </div>
                                    <div class="blog__sidebar__recent__item__text">
                                        <h6><?= $rb->title; ?></h6>
                                        <span><?= date('F d, Y',strtotime($rb->created_at)) ?></span>
                                    </div>
                                </a>
                            <?php } } ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-7">
                    <div class="row">
                    <?php
                        if(isset($_GET['cat']) && $_GET['cat'])
                            $wcat['category_id']=$_GET['cat'];
                        else
                            $wcat=false;

                        $blogs=$mysqli->common_select('blog','*',$wcat,'id','DESC');
                        if(!$blogs['error']){
                            foreach($blogs['selectdata'] as $blog){
                    ?>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="blog__item">
                                <div class="blog__item__pic">
                                    <img src="<?= $base_url ?>/admin/images/blog/images/<?= $blog->image ?>" alt="">
                                </div>
                                <div class="blog__item__text">
                                    <ul>
                                        <li><i class="fa fa-calendar-o"></i> <?= date('F d, Y',strtotime($blog->created_at)) ?></li>
                                    </ul>
                                    <h5><a href="blog-details.php?id=<?= $blog->id ?>"><?= $blog->title ?></a></h5>
                                    <p><?= substr_replace($blog->description, "...", 100); ?> </p>
                                    <a href="blog-details.php?id=<?= $blog->id ?>" class="blog__btn">READ MORE <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                    <?php } } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->
    <?php 
    include_once('includes/footer.php');
    ?>
</div>