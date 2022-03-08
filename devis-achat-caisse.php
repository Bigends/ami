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
        <title>AMI : Devis Achat Caisse</title>
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
        <link rel="stylesheet" href="css/map.css">
    </head>
    <body>

        <!-- Body main wrapper start -->
        <div class="wrapper home-one contact-us single-product-page">
            <!-- HEADER Début -->
            <?php include 'includes/header.php';?>
            <!-- HRADER Fin -->
            <!-- Breadcrumbs -->
            <div class="breadcrumbs-container">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <nav class="woocommerce-breadcrumb">
                                <a href="index.html">Accueil</a>
                                <span class="separator">/</span> Demande de devis
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Breadcrumbs End -->
            <!-- Contact page content -->
            <div class="contact-page-area">

                <!-- contact form area -->
                <div class="contact-form-area">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-6 col-xs-12">
                                <div class="contact-form-inner">
                                    <h2>MA DEMANDE</h2>
                                    <form action="mail.php" method="get">
                                        <div class="row">
                                            <div class="col">
                                                <input type="text" class="form-control" placeholder="Prénom*" required>
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" placeholder="Nom*" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <input type="text" class="form-control" placeholder="Adresse mail*" required>
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" placeholder="Objet*" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <textarea name="your-message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required" aria-required="true"
                                                    aria-invalid="false" placeholder="Votre demande*" required></textarea>
                                            </div>
                                        </div>
                                        <div class="contact-submit">
                                            <input type="submit" value="Envoyer" class="wpcf7-form-control wpcf7-submit button">
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-6 col-xs-12">
                                <div class="contact-address-area">
                                    <h2>Infos Achat Caisse</h2>
                                    <p>N'hésitez pas à nous détailler votre demande.</p>
                                    <ul>
                                        <li>
                                            <i class="fa fa-fax">&nbsp;</i> Address : 2 rue des cèdres, 97354 Rémire</li>
                                        <li>
                                            <i class="fa fa-phone">&nbsp;</i> 0594 30 46 67</li>
                                        <li>
                                            <i class="fa fa-envelope-o"></i>&nbsp; contact.alphamonetique@gmail.com</li>
                                    </ul>
                                    <h3>
                                        <strong>Horaire d'ouverture</strong>
                                    </h3>
                                    <p>
                                        <strong>Lundi – Vendredi</strong>: &nbsp;08h30 – 18h00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- contact form area end -->
            </div>

            <!--Footer Début-->
            <?php include 'includes/footer.php'; ?>
            <!--Footer Fin-->
        </div>
        <!-- Body main wrapper end -->


        <!-- jQuery CDN -->
         <script src="js/jquery-1.12.4.min.js"></script>   
         
        <!-- Popper min js -->
        <script src="js/popper.min.js"></script>
        <!-- Bootstrap min js  -->
        <script src="js/bootstrap.min.js"></script>
        <!-- All plugins here -->
        <script src="js/plugins.js"></script>
        <!-- Main js  -->
        <script src="js/main.js"></script>
 
    </body>
</html>
