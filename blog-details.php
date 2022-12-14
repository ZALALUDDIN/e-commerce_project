<?php 
      include_once('includes/header.php');  
?>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <?php include('includes/header_bottom.php') ?>
    <!-- Hero Section End -->
<?php
    $w['id']=$_GET['id'];
    $blog=$mysqli->common_select_single('blog','*',$w)['selectdata'];

?>
    <!-- Blog Details Hero Begin -->
    <section class="blog-details-hero set-bg" data-setbg="img/blog/details/details-hero.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog__details__hero__text">
                        <h2><?= $blog->title ?></h2>
                        <ul>
                            <li>By <?= $blog->author_name ?></li>
                            <li><?= date('F d, Y',strtotime($blog->created_at)) ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Details Hero End -->

    <!-- Blog Details Section Begin -->
    <section class="blog-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-5 order-md-1 order-2">
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
                                $ww['id !']=$_GET['id'];
                                $rblogs=$mysqli->common_select('blog','*',$ww,'id','DESC',0,3);
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
                <div class="col-lg-8 col-md-7 order-md-1 order-1">
                    <div class="blog__details__text">
                        <img class="w-100" src="<?= $base_url ?>/admin/images/blog/images/<?= $blog->image ?>" alt="">
                        <?= $blog->description ?>
                    </div>
                    <div class="blog__details__content">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="blog__details__author">
                                    <div class="blog__details__author__pic">
                                        <img src="img/blog/details/details-author.jpg" alt="">
                                    </div>
                                    <div class="blog__details__author__text">
                                        <h6><?= $blog->author_name ?></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="blog__details__widget">
                                    <ul>
                                        <li><span>Categories:</span> <?= $cat[$blog->category_id] ?></li>
                                        <li><span>Tags:</span> <?= $blog->tag ?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Details Section End -->

    <!-- Footer Section Begin -->
    <?php 
    include_once('includes/footer.php');
    ?>