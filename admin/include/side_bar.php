    <!-- partial:partials/_sidebar.html -->
    <div class="container-fluid page-body-wrapper">
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="<?= $base_url ?>/index.php">
              <i class="ti-shield menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
       
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#product" aria-expanded="false" aria-controls="product">
              <i class="ti-user menu-icon"></i>
              <span class="menu-title">Products</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="product">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?= $base_url ?>/product_list.php"> Product List </a></li>  
                <li class="nav-item"> <a class="nav-link" href="<?= $base_url ?>/product_create.php"> Create Product </a></li>   
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#category" aria-expanded="false" aria-controls="category">
              <i class="ti-user menu-icon"></i>
              <span class="menu-title">Category</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="category">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?= $base_url ?>/category_list.php"> Category List </a></li>  
                <li class="nav-item"> <a class="nav-link" href="<?= $base_url ?>/category_create.php"> Create Category </a></li>   
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#order_id" aria-expanded="false" aria-controls="order_id">
              <i class="ti-user menu-icon"></i>
              <span class="menu-title">Confirm Order</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="order_id">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?= $base_url ?>/order_list.php"> Order List </a></li>  
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#role_user" aria-expanded="false" aria-controls="role_user">
              <i class="ti-user menu-icon"></i>
              <span class="menu-title">Role User</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="role_user">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?= $base_url ?>/role_user_list.php">Role User List </a></li>  
                <li class="nav-item"> <a class="nav-link" href="<?= $base_url ?>/role_user_create.php">Role User Create </a></li>   
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#user_add" aria-expanded="false" aria-controls="user_add">
              <i class="ti-user menu-icon"></i>
              <span class="menu-title">Check Order Address</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="user_add">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?= $base_url ?>/user_add_list.php"> Order Add List </a></li>  
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#coupon_id" aria-expanded="false" aria-controls="coupon_id">
              <i class="ti-user menu-icon"></i>
              <span class="menu-title">Coupon Option</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="coupon_id">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?= $base_url ?>/coupon_list.php"> Coupon List </a></li>  
                <li class="nav-item"> <a class="nav-link" href="<?= $base_url ?>/coupon_create.php"> New Coupon Add </a></li>   
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#blog" aria-expanded="false" aria-controls="blog">
              <i class="ti-user menu-icon"></i>
              <span class="menu-title">Blog Option</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="blog">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?= $base_url ?>/blog_list.php"> Blog List </a></li>  
                <li class="nav-item"> <a class="nav-link" href="<?= $base_url ?>/blog_create.php"> Blog Add </a></li>   
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#blog_cat_id" aria-expanded="false" aria-controls="blog_cat_id">
              <i class="ti-user menu-icon"></i>
              <span class="menu-title">Blog Category Option</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="blog_cat_id">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?= $base_url ?>/blog_category_list.php"> Blog Category List </a></li>  
                <li class="nav-item"> <a class="nav-link" href="<?= $base_url ?>/blog_category_create.php"> Blog Category Add </a></li>   
              </ul>
            </div>
          </li>
        </ul>
      </nav>