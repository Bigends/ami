<!-- 
|||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
||||                 ||||                  ||||                  ||||                ||||     |||||||||  ||||
|||| ||||||||||||||| ||||||||||||  ||||||||||||||||||||||||||||  ||||  ||||||||||||||||||  ||   |||||||  ||||
|||| ||||||||||||||| ||||||||||||  |||||||||||||||||||||||||  |||||||  ||||||||||||||||||  |||   ||||||  ||||
|||| ||||||||||||||| ||||||||||||  ||||||||||||||||||||||  ||||||||||  ||||||||||||||||||  ||||   |||||  ||||
|||| |||||||         ||||||||||||  ||||||||||||||||||||  ||||||||||||                ||||  |||||   ||||  ||||
|||| ||||||||  ||||||||||||||||||  |||||||||||||||||  |||||||||||||||  ||||||||||||||||||  ||||||   |||  ||||
|||| ||||||||||  ||||||||||||||||  ||||||||||||||  ||||||||||||||||||  ||||||||||||||||||  |||||||   ||  ||||
|||| ||||||||||||  ||||||||||||||  ||||||||||||  ||||||||||||||||||||  ||||||||||||||||||  ||||||||   |  ||||
|||| ||||||||||||||  ||||                  ||||                  ||||                ||||  |||||||||     ||||
|||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
                                 ||||      |||      |||     ||||       ||||
                                 |||| |||||||| |||| ||| |||| ||| ||||||||||
                                 |||| |||||||| |||| ||| |||| |||       ||||
                                 |||| |||||||| |||| ||| |||| ||| ||||||||||
                                 ||||      |||      |||     ||||       ||||
                                 ||||||||||||||||||||||||||||||||||||||||||
                                 <----------------- 100% ----------------->

<php ?>
    <!doctype html>
    <html class="no-js" lang="fr">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>AMI: Alpha Monétique Intéractif</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="images/icons/icon_logo2.png">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/ionicons.min.css">
        <link rel="stylesheet" href="css/css-plugins-call.css">
        <link rel="stylesheet" href="css/bundle3.css">
        <link rel="stylesheet" href="css/main6.css">
        <link rel="stylesheet" href="css/responsive.css">
        <link rel="stylesheet" href="css/colors.css">

    </head>

    <body>
        <!-- Body main wrapper start -->
        <div class="wrapper home-one single-product-page">

        <!-- Header Start -->
        <?php include 'includes/header.php';?>
        <!-- Header Done -->
            <!-- Breadcrumbs -->
            <div class="breadcrumbs-container">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <nav class="woocommerce-breadcrumb">
                                <a href="index.html">Catégorie</a>
                                <span class="separator">/</span> T.P.E
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Breadcrumbs End -->
            
            <!-- Shop page wraper -->
            <div class="shop-page-wraper">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-md-3 sidebar-shop">
                            <div class="sidebar-product-categori">
                                <div class="widget-title">
                                    <h3>NOS PRODUITS</h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="product-categories">
                                        <li class="cat-item">
                                            <a href="#">T.P.E</a>
                                            <span class="count">(5)</span>
                                        </li>
                                        <li class="cat-item">
                                            <a href="#">Monnayeur</a>
                                            <span class="count">(4)</span>
                                        </li>
                                        <li class="cat-item">
                                            <a href="#">Système Encaissement</a>
                                            <span class="count">(12)</span>
                                        </li>
                                        <li class="cat-item">
                                            <a href="#">Solution Paiement</a>
                                            <span class="count">(13)</span>
                                        </li>
                                        <li class="cat-item">
                                            <a href="#">Caméra de surveillance</a>
                                            <span class="count">(13)</span>
                                        </li>
                                    </ul>
                                </div>

                                <div class="sidebar-single-banner">
                                    <a href="#">
                                        <img src="images/banner/shop-sidebar.jpg" alt="Banner">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-9 shop-content">
                            <div class="shop-banner">
                                <img src="images/banner/shop-category.jpg" alt="">
                            </div>
                            <div class="product-toolbar">

                                <div class="shop-page-product-area tab-content">
                                <div id="list" class="tab-pane fade in show active">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="single-product-area">
                                                    <div class="product-wrapper listview">
                                                        <div class="list-col4">

                                                            <?php
                                                            require_once("articles/admin/includes/database.php");
                                                            $req=$db->prepare('SELECT *FROM all_articles');
                                                            $req->execute();
                                                            while ($reponse=$req->fetch(PDO::FETCH_OBJ)) {?>
                 
                                                                <div class="product-image">
                                                                <a href="">
                                                                    <span class="onsale">Sale!</span>
                                                                    <img src="articles/admin/images/<?php echo $reponse->images_name ?>" alt="">
                                                                </a>
                                                                <div class="quickviewbtn">
                                                                    <a href="#" data-toggle="modal" data-target="#product_modal"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="list-col8">
                                                            <div class="product-info">
                                                                <h2><a href="single-product.html"><?php echo $reponse->titre; ?></a></h2>
                                                                <span class="price">
                                                                <?php echo $reponse->price; ?>
                                                                </span>


                                                                <div class="product-rattings">
                                                                    <span><i class="fa fa-star"></i></span>
                                                                    <span><i class="fa fa-star"></i></span>
                                                                    <span><i class="fa fa-star"></i></span>
                                                                    <span><i class="fa fa-star-half-o"></i></span>
                                                                    <span><i class="fa fa-star-o"></i></span>
                                                                </div>
                                                                <div class="product-desc">
                                                                    <p><?php echo substr($reponse->contenu, 0,100); ?></p>
                                                                </div>
                                                            </div>
                                                            <div class="actions-wrapper">
                                                                <div class="add-to-cart">
                                                                    <a href="cart.html">Add to cart</a>
                                                                </div>
                                                                <div class="star-actions">
                                                                    <ul class="actions">
                                                                        <li><a href=""><i class="ion-android-favorite-outline"></i>Add to Wishlist</a></li>
                                                                        <li><a href=""><i class="ion-ios-shuffle-strong"></i>Compare</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                                        <?php }

                                                        ?>
  
                                            <div class="col-sm-12">
                                                <div class="single-product-area">
                                                    <div class="product-wrapper listview">
                                                        <div class="list-col4">
                                                            <div class="product-image">
                                                                <a href="">
                                                                    <span class="onsale">Sale!</span>
                                                                    <img src="images/product/2.jpg" alt="">
                                                                </a>
                                                                <div class="quickviewbtn">
                                                                    <a href="#" data-toggle="modal" data-target="#product_modal"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="list-col8">
                                                            <div class="product-info">
                                                                <h2><a href="single-product.html">Sit voluptatem</a></h2>
                                                                <span class="price">
                                                                    <del>$ 77.00</del> $ 66.00
                                                                </span>
                                                                <div class="product-rattings">
                                                                    <span><i class="fa fa-star"></i></span>
                                                                    <span><i class="fa fa-star"></i></span>
                                                                    <span><i class="fa fa-star"></i></span>
                                                                    <span><i class="fa fa-star-half-o"></i></span>
                                                                    <span><i class="fa fa-star-o"></i></span>
                                                                </div>
                                                                <div class="product-desc">
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco,Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus</p>
                                                                </div>
                                                            </div>
                                                            <div class="actions-wrapper">
                                                                <div class="add-to-cart">
                                                                    <a href="cart.html">Add to cart</a>
                                                                </div>
                                                                <div class="star-actions">
                                                                    <ul class="actions">
                                                                        <li><a href=""><i class="ion-android-favorite-outline"></i>Add to Wishlist</a></li>
                                                                        <li><a href=""><i class="ion-ios-shuffle-strong"></i>Compare</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="single-product-area">
                                                    <div class="product-wrapper listview">
                                                        <div class="list-col4">
                                                            <div class="product-image">
                                                                <a href="">
                                                                    <span class="onsale">Sale!</span>
                                                                    <img src="images/product/3.jpg" alt="">
                                                                </a>
                                                                <div class="quickviewbtn">
                                                                    <a href="#" data-toggle="modal" data-target="#product_modal"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="list-col8">
                                                            <div class="product-info">
                                                                <h2><a href="single-product.html">Sit voluptatem</a></h2>
                                                                <span class="price">
                                                                    <del>$ 77.00</del> $ 66.00
                                                                </span>
                                                                <div class="product-rattings">
                                                                    <span><i class="fa fa-star"></i></span>
                                                                    <span><i class="fa fa-star"></i></span>
                                                                    <span><i class="fa fa-star"></i></span>
                                                                    <span><i class="fa fa-star-half-o"></i></span>
                                                                    <span><i class="fa fa-star-o"></i></span>
                                                                </div>
                                                                <div class="product-desc">
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco,Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus</p>
                                                                </div>
                                                            </div>
                                                            <div class="actions-wrapper">
                                                                <div class="add-to-cart">
                                                                    <a href="cart.html">Add to cart</a>
                                                                </div>
                                                                <div class="star-actions">
                                                                    <ul class="actions">
                                                                        <li><a href=""><i class="ion-android-favorite-outline"></i>Add to Wishlist</a></li>
                                                                        <li><a href=""><i class="ion-ios-shuffle-strong"></i>Compare</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="single-product-area">
                                                    <div class="product-wrapper listview">
                                                        <div class="list-col4">
                                                            <div class="product-image">
                                                                <a href="">
                                                                    <span class="onsale">Sale!</span>
                                                                    <img src="images/product/4.jpg" alt="">
                                                                </a>
                                                                <div class="quickviewbtn">
                                                                    <a href="#" data-toggle="modal" data-target="#product_modal"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="list-col8">
                                                            <div class="product-info">
                                                                <h2><a href="single-product.html">Sit voluptatem</a></h2>
                                                                <span class="price">
                                                                    <del>$ 77.00</del> $ 66.00
                                                                </span>
                                                                <div class="product-rattings">
                                                                    <span><i class="fa fa-star"></i></span>
                                                                    <span><i class="fa fa-star"></i></span>
                                                                    <span><i class="fa fa-star"></i></span>
                                                                    <span><i class="fa fa-star-half-o"></i></span>
                                                                    <span><i class="fa fa-star-o"></i></span>
                                                                </div>
                                                                <div class="product-desc">
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco,Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus</p>
                                                                </div>
                                                            </div>
                                                            <div class="actions-wrapper">
                                                                <div class="add-to-cart">
                                                                    <a href="cart.html">Add to cart</a>
                                                                </div>
                                                                <div class="star-actions">
                                                                    <ul class="actions">
                                                                        <li><a href=""><i class="ion-android-favorite-outline"></i>Add to Wishlist</a></li>
                                                                        <li><a href=""><i class="ion-ios-shuffle-strong"></i>Compare</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="single-product-area">
                                                    <div class="product-wrapper listview">
                                                        <div class="list-col4">
                                                            <div class="product-image">
                                                                <a href="">
                                                                    <span class="onsale">Sale!</span>
                                                                    <img src="images/product/5.jpg" alt="">
                                                                </a>
                                                                <div class="quickviewbtn">
                                                                    <a href="#" data-toggle="modal" data-target="#product_modal"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="list-col8">
                                                            <div class="product-info">
                                                                <h2><a href="single-product.html">Sit voluptatem</a></h2>
                                                                <span class="price">
                                                                    <del>$ 77.00</del> $ 66.00
                                                                </span>
                                                                <div class="product-rattings">
                                                                    <span><i class="fa fa-star"></i></span>
                                                                    <span><i class="fa fa-star"></i></span>
                                                                    <span><i class="fa fa-star"></i></span>
                                                                    <span><i class="fa fa-star-half-o"></i></span>
                                                                    <span><i class="fa fa-star-o"></i></span>
                                                                </div>
                                                                <div class="product-desc">
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco,Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus</p>
                                                                </div>
                                                            </div>
                                                            <div class="actions-wrapper">
                                                                <div class="add-to-cart">
                                                                    <a href="cart.html">Add to cart</a>
                                                                </div>
                                                                <div class="star-actions">
                                                                    <ul class="actions">
                                                                        <li><a href=""><i class="ion-android-favorite-outline"></i>Add to Wishlist</a></li>
                                                                        <li><a href=""><i class="ion-ios-shuffle-strong"></i>Compare</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="single-product-area">
                                                    <div class="product-wrapper listview">
                                                        <div class="list-col4">
                                                            <div class="product-image">
                                                                <a href="">
                                                                    <span class="onsale">Sale!</span>
                                                                    <img src="images/product/6.jpg" alt="">
                                                                </a>
                                                                <div class="quickviewbtn">
                                                                    <a href="#" data-toggle="modal" data-target="#product_modal"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="list-col8">
                                                            <div class="product-info">
                                                                <h2><a href="single-product.html">Sit voluptatem</a></h2>
                                                                <span class="price">
                                                                    <del>$ 77.00</del> $ 66.00
                                                                </span>
                                                                <div class="product-rattings">
                                                                    <span><i class="fa fa-star"></i></span>
                                                                    <span><i class="fa fa-star"></i></span>
                                                                    <span><i class="fa fa-star"></i></span>
                                                                    <span><i class="fa fa-star-half-o"></i></span>
                                                                    <span><i class="fa fa-star-o"></i></span>
                                                                </div>
                                                                <div class="product-desc">
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco,Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus</p>
                                                                </div>
                                                            </div>
                                                            <div class="actions-wrapper">
                                                                <div class="add-to-cart">
                                                                    <a href="cart.html">Add to cart</a>
                                                                </div>
                                                                <div class="star-actions">
                                                                    <ul class="actions">
                                                                        <li><a href=""><i class="ion-android-favorite-outline"></i>Add to Wishlist</a></li>
                                                                        <li><a href=""><i class="ion-ios-shuffle-strong"></i>Compare</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="single-product-area">
                                                    <div class="product-wrapper listview">
                                                        <div class="list-col4">
                                                            <div class="product-image">
                                                                <a href="">
                                                                    <span class="onsale">Sale!</span>
                                                                    <img src="images/product/7.jpg" alt="">
                                                                </a>
                                                                <div class="quickviewbtn">
                                                                    <a href="#" data-toggle="modal" data-target="#product_modal"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="list-col8">
                                                            <div class="product-info">
                                                                <h2><a href="single-product.html">Sit voluptatem</a></h2>
                                                                <span class="price">
                                                                    <del>$ 77.00</del> $ 66.00
                                                                </span>
                                                                <div class="product-rattings">
                                                                    <span><i class="fa fa-star"></i></span>
                                                                    <span><i class="fa fa-star"></i></span>
                                                                    <span><i class="fa fa-star"></i></span>
                                                                    <span><i class="fa fa-star-half-o"></i></span>
                                                                    <span><i class="fa fa-star-o"></i></span>
                                                                </div>
                                                                <div class="product-desc">
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco,Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus</p>
                                                                </div>
                                                            </div>
                                                            <div class="actions-wrapper">
                                                                <div class="add-to-cart">
                                                                    <a href="cart.html">Add to cart</a>
                                                                </div>
                                                                <div class="star-actions">
                                                                    <ul class="actions">
                                                                        <li><a href=""><i class="ion-android-favorite-outline"></i>Add to Wishlist</a></li>
                                                                        <li><a href=""><i class="ion-ios-shuffle-strong"></i>Compare</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="single-product-area">
                                                    <div class="product-wrapper listview">
                                                        <div class="list-col4">
                                                            <div class="product-image">
                                                                <a href="">
                                                                    <span class="onsale">Sale!</span>
                                                                    <img src="images/product/8.jpg" alt="">
                                                                </a>
                                                                <div class="quickviewbtn">
                                                                    <a href="#" data-toggle="modal" data-target="#product_modal"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="list-col8">
                                                            <div class="product-info">
                                                                <h2><a href="single-product.html">Sit voluptatem</a></h2>
                                                                <span class="price">
                                                                    <del>$ 77.00</del> $ 66.00
                                                                </span>
                                                                <div class="product-rattings">
                                                                    <span><i class="fa fa-star"></i></span>
                                                                    <span><i class="fa fa-star"></i></span>
                                                                    <span><i class="fa fa-star"></i></span>
                                                                    <span><i class="fa fa-star-half-o"></i></span>
                                                                    <span><i class="fa fa-star-o"></i></span>
                                                                </div>
                                                                <div class="product-desc">
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco,Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus</p>
                                                                </div>
                                                            </div>
                                                            <div class="actions-wrapper">
                                                                <div class="add-to-cart">
                                                                    <a href="cart.html">Add to cart</a>
                                                                </div>
                                                                <div class="star-actions">
                                                                    <ul class="actions">
                                                                        <li><a href=""><i class="ion-android-favorite-outline"></i>Add to Wishlist</a></li>
                                                                        <li><a href=""><i class="ion-ios-shuffle-strong"></i>Compare</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <nav class="woocommerce-pagination">
                                <ul class="page-numbers">
                                    <li><span aria-current="page" class="page-numbers current">1</span></li>
                                    <li><a class="page-numbers" href="#">2</a></li>
                                    <li><a class="page-numbers" href="#">3</a></li>
                                    <li><a class="page-numbers" href="#">4</a></li>
                                    <li><a class="next page-numbers" href="#">→</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div> 
            </div>
            <!-- Shop page wraper end -->
        <!-- Footer Début -->
        <?php include 'includes/footer.php'; ?>
        <!-- Footer Fin -->
        </div>
        <!-- Body main wrapper end -->


        <!-- jQuery CDN -->
         <script src="js/jquery-1.12.4.min.js"></script>   
         
        <!-- jQuery Local -->
        

        <!-- Popper min js -->
        <script src="js/popper.min.js"></script>
        <!-- Bootstrap min js  -->
        <script src="js/bootstrap.min.js"></script>
        <!-- All plugins here -->
        <script src="js/plugins.js"></script>
        <!-- Main js  -->
        <script src="js/main.js"></script>



        <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
        <script>
            window.ga=function(){ga.q.push(arguments)};ga.q=[];ga.l=+new Date;
            ga('create','UA-XXXXX-Y','auto');ga('send','pageview')
        </script>
        <script src="https://www.google-analytics.com/analytics.js" async defer></script>
    </body>
</html>
