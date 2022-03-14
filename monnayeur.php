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
        <title>AMI: Monnayeur</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="http://localhost/AMI/assets/images/icons/icon_logo2.png">

        <link rel="stylesheet" href="http://localhost/AMI/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="http://localhost/AMI/assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="http://localhost/AMI/assets/css/ionicons.min.css">
        <link rel="stylesheet" href="http://localhost/AMI/assets/css/css-plugins-call.css">
        <link rel="stylesheet" href="http://localhost/AMI/assets/css/bundle3.css">
        <link rel="stylesheet" href="http://localhost/AMI/assets/css/main6.css">
        <link rel="stylesheet" href="http://localhost/AMI/assets/css/responsive.css">
        <link rel="stylesheet" href="http://localhost/AMI/assets/css/colors.css">

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
                                <a href="">Catégorie</a>
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
                                            <a href="http://localhost/AMI/tpe.php">T.P.E</a>
                                            <span class="count"></span>
                                        </li>
                                        <li class="cat-item">
                                            <a href="http://localhost/AMI/monnayeur.php">Monnayeur</a>
                                            <span class="count"></span>
                                        </li>
                                        <li class="cat-item">
                                            <a href="http://localhost/AMI/systeme-encaissement.php">Système Encaissement</a>
                                            <span class="count"></span>
                                        </li>
                                        <li class="cat-item">
                                            <a href="http://localhost/AMI/solution-paiement.php">Solution Paiement</a>
                                            <span class="count"></span>
                                        </li>
                                        <li class="cat-item">
                                            <a href="http://localhost/AMI/camera-de-surveillance.php">Caméra de surveillance</a>
                                            <span class="count"></span>
                                        </li>
                                    </ul>
                                </div>

                                <div class="sidebar-single-banner">
                                    <a href="#">
                                    <img src="http://localhost/AMI/assets/images/banner/pub-side.jpg" alt="Banner">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-9 shop-content">
                            <div class="shop-banner">
                                <img src="http://localhost/AMI/assets/images/banner/cashdro.jpg" alt="">
                            </div>
                            <div class="product-toolbar">

                                <div class="shop-page-product-area tab-content">
                                    <div id="list" class="tab-pane fade in show active">
                                        <div class="row">

                                            <!-- Début de l'article -->
                                            <?php
                                            require_once("articles/TPE/admin/includes/database.php");
                                            $req=$db->prepare('SELECT *FROM monnayeur');
                                            $req->execute();
                                            while ($reponse=$req->fetch(PDO::FETCH_OBJ)) {?>

                                            <div class="col-sm-12">
                                                <div class="single-product-area">
                                                    <div class="product-wrapper listview">

                                                        <div class="list-col4">
                                                            <div class="product-image">
                                                                <a href="devis-achat-tpe.php">
                                                                    <!-- Image Produit -->
                                                                    <img src="http://localhost/AMI/articles/TPE/admin/assets/images/<?php echo $reponse->images_name; ?>"
                                                                        alt="">
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="list-col8">
                                                            <div class="product-info">
                                                                <!-- Titre Produit -->
                                                                <h2><a
                                                                        href="single-product.html"><?php echo $reponse->titre; ?></a>
                                                                </h2>
                                                                <!-- Prix Produit -->
                                                                <span class="price">
                                                                    <?php echo $reponse->price; ?>
                                                                </span>
                                                                <!-- Description Produit -->
                                                                <div class="product-desc">
                                                                    <p><?php echo substr($reponse->contenu, 0,100); ?>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="actions-wrapper"><br><br>
                                                                <div class="add-to-cart">
                                                                    <a href="devis-achat-tpe.php">Devis</a>
                                                                </div>
                                                                <div class="star-actions">
                                                                    <ul class="actions">
                                                                        <li><a href=""><svg
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        width="16" height="16"
                                                                        fill="currentColor"
                                                                        class="bi bi-bag-check"
                                                                        viewBox="0 0 16 16">
                                                                        <path fill-rule="evenodd"
                                                                        d="M10.854 8.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                                                                        <path
                                                                        d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                                                                        </svg> Disponible</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php }

                                            ?>
                                            <!-- Fin de l'article -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Début Pagination -->
                            <nav class="woocommerce-pagination">
                                <ul class="page-numbers">
                                    <li><span aria-current="page" class="page-numbers current">1</span></li>
                                    <!-- <li><a class="page-numbers" href="#">2</a></li> -->
                                    <li><a class="next page-numbers" href="#">→</a></li>
                                </ul>
                            </nav>
                            <!-- Fin Pagination -->
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
        <script src="http://localhost/AMI/assets/js/jquery-1.12.4.min.js"></script>

        <!-- jQuery Local -->

        <!-- Popper min js -->
        <script src="http://localhost/AMI/assets/js/popper.min.js"></script>
        <!-- Bootstrap min js  -->
        <script src="http://localhost/AMI/assets/js/bootstrap.min.js"></script>
        <!-- All plugins here -->
        <script src="http://localhost/AMI/assets/js/plugins.js"></script>
        <!-- Main js  -->
        <script src="http://localhost/AMI/assets/js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
        <script>
            window.ga = function() {
                ga.q.push(arguments)
            };
            ga.q = [];
            ga.l = +new Date;
            ga('create', 'UA-XXXXX-Y', 'auto');
            ga('send', 'pageview')
        </script>
        <script src="https://www.google-analytics.com/analytics.js" async defer></script>
    </body>

    </html>