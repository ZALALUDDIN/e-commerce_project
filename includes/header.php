<?php include('connection.php'); ?>
<!DOCTYPE html>
<html lang="zxx">
  <head>
    <meta charset="UTF-8" />
    <meta name="description" content="Ogani Template" />
    <meta name="keywords" content="Ogani, unica, creative, html" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Ogani E-Commerce Site</title>

    <!-- Google Font -->
    <link
      href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap"
      rel="stylesheet"
    />

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" />
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css" />
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css" />
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css" />
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css" />
    <link rel="stylesheet" href="css/style.css" type="text/css" />
  </head>

  <body>

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
      <div class="humberger__menu__logo">
        <a href="index.php"><img src="img/logo.png" alt="" /></a>
      </div>
      <div class="humberger__menu__cart">
        <ul>
          <li>
            <a href="#"><i class="fa fa-heart"></i> <span>5</span></a>
          </li>
          <li>
            <a href="#"><i class="fa fa-shopping-bag"></i> <span>
              <?php 
                if(isset($_SESSION['cart']['totalqty'])){
                  echo $_SESSION['cart']['totalqty'];
                }
              ?>
            </span></a>
          </li>
        </ul>
        <div class="header__cart__price">item: <span>$150.00</span></div>
      </div>
      <div class="humberger__menu__widget">
        <?php if(isset($_SESSION['customer_id']) && $_SESSION['customer_id']){ ?>
          <div class="header__top__right__auth">
            <a href="<?=$base_url?>/customer_login.php"><i class="fa fa-user"></i>Login</a>
          </div>
        <?php }else{ ?>
          <div class="header__top__right__auth">
            <a href="<?=$base_url?>/customer_logout.php"><i class="fa fa-user"></i>Logout</a>
          </div>
        <?php } ?>  
     
      </div>
      <nav class="humberger__menu__nav mobile-menu">
        <ul>
          <li class="active"><a href="./index.php">Home</a></li>
          <li><a href="./shop-grid.php">Shop</a></li>
          <li>
            <a href="#">Pages</a>
            <ul class="header__menu__dropdown">
              <li><a href="./shoping-cart.php">Shoping Cart</a></li>
              <li><a href="./checkout.php">Check Out</a></li>
            </ul>
          </li>
          <li><a href="./blog.php">Blog</a></li>
          <li><a href="./contact.php">Contact</a></li>
        </ul>
      </nav>
      <div id="mobile-menu-wrap"></div>
      <div class="header__top__right__social">
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-linkedin"></i></a>
        <a href="#"><i class="fa fa-pinterest-p"></i></a>
      </div>
      <div class="humberger__menu__contact">
        <ul>
          <li><i class="fa fa-envelope"></i> hmarif.nazir@gmail.com</li>
          <li>Free Shipping for all Order of $99</li>
        </ul>
      </div>
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header">
      <div class="header__top">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-6">
              <div class="header__top__left">
                <ul>
                  <li><i class="fa fa-envelope"></i> hmarif.nazir@gmail.com</li>
                  <li>Free Shipping for all Order of $99</li>
                </ul>
              </div>
            </div>
            <div class="col-lg-6 col-md-6">
              <div class="header__top__right">
                <div class="header__top__right__social">
                  <a href="#"><i class="fa fa-facebook"></i></a>
                  <a href="#"><i class="fa fa-twitter"></i></a>
                  <a href="#"><i class="fa fa-linkedin"></i></a>
                  <a href="#"><i class="fa fa-pinterest-p"></i></a>
                </div>
                <div class="header__top__right__auth">
                  <a href="<?=$base_url?>/admin/login.php"><i class="fa fa-user"></i>Admin Login</a>
                </div>

                <?php if(isset($_SESSION['customer_id']) && $_SESSION['customer_id']){ ?>
                  <div class="header__top__right__auth ml-2">
                    <a href="<?=$base_url?>/customer_logout.php"><i class="fa fa-user"></i>Logout</a>
                  </div>
                  <div class="header__top__right__auth ml-2">
                    <a href="<?=$base_url?>/customer_dashboard.php"><i class="fa fa-tachometer"></i>Dashboard</a>
                  </div>
                <?php }else{ ?>
                  <div class="header__top__right__auth ml-2">
                    <a href="<?=$base_url?>/customer_login.php"><i class="fa fa-user"></i>Login</a>
                  </div>
                <?php } ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-3">
            <div class="header__logo">
              <a href="./index.php"><img src="img/logo.png" alt="" /></a>
            </div>
          </div>
          <div class="col-lg-6">
            <nav class="header__menu">
              <ul>
                <li class="active"><a href="./index.php">Home</a></li>
                <li><a href="./shop-grid.php">Shop</a></li>
                <li>
                  <a href="#">Pages</a>
                  <ul class="header__menu__dropdown">
                    <li><a href="./shoping-cart.php">Shoping Cart</a></li>
                    <li><a href="./checkout.php">Check Out</a></li>
                  </ul>
                </li>
                <li><a href="./blog.php">Blog</a></li>
                <li><a href="./contact.php">Contact</a></li>
              </ul>
            </nav>
          </div>
          <div class="col-lg-3">
            <div class="header__cart">
              <ul>
                <li>
                  <a href="#"><i class="fa fa-heart"></i> <span>1</span></a>
                </li>
                <li>
                  <a href="shoping-cart.php"
                    ><i class="fa fa-shopping-bag"></i> <span>
                    <?php 
                if(isset($_SESSION['cart']['totalqty'])){
                  echo $_SESSION['cart']['totalqty'];
                }else{ echo 0;}
              ?>
                    </span></a
                  >
                </li>
              </ul>
              <div class="header__cart__price">item: <span>
              <?php 
                if(isset($_SESSION['cart']['totalprice'])){
                  echo $_SESSION['cart']['totalprice'];
                }else{ echo 0;}
              ?>BDT
              </span></div>
            </div>
          </div>
        </div>
        <div class="humberger__open">
          <i class="fa fa-bars"></i>
        </div>
      </div>
    </header>
    <!-- Header Section End -->
