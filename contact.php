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

<!doctype html>
<html class="no-js" lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>AMI : Contactez-nous</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="https://alphamonetique.com/assets/images/icons/icon_logo2.png">

    <link rel="stylesheet" href="https://alphamonetique.com/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://alphamonetique.com/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://alphamonetique.com/assets/css/ionicons.min.css">
    <link rel="stylesheet" href="https://alphamonetique.com/assets/css/css-plugins-call.css">
    <link rel="stylesheet" href="https://alphamonetique.com/assets/css/bundle3.css">
    <link rel="stylesheet" href="https://alphamonetique.com/assets/css/main6.css">
    <link rel="stylesheet" href="https://alphamonetique.com/assets/css/responsive.css">
    <link rel="stylesheet" href="https://alphamonetique.com/assets/css/colors.css">
    <link rel="stylesheet" href="https://alphamonetique.com/assets/css/map.css">
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
                            <a href="https://alphamonetique.com/index.php">Accueil</a>
                            <span class="separator">/</span> Contactez-nous
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcrumbs End -->
        <!-- Contact page content -->
        <div class="contact-page-area">
            <!-- contact page map -->
            <div class="img-fluid">
                <!-- Google Map Start -->
                <div class="map-responsive">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d15901.064803664523!2d-52.28979592314194!3d4.895040443133639!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x8d123d704f93bdb3%3A0xe352261a89086ec8!2salpha%20mon%C3%A9tique!3m2!1d4.8978945!2d-52.273429099999994!5e0!3m2!1sfr!2sfr!4v1646746154854!5m2!1sfr!2sfr"
                        width="600" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
                <!-- Google Map End -->
            </div>
            <!-- contact page map -->
            <!-- contact form area -->
            <div class="contact-form-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-6 col-xs-12">
                            <div class="contact-form-inner">
                                <h2>MA DEMANDE</h2>
                                <form action="send.php" method="post">
                                    <div class="row">
                                        <div class="col">
                                            <input type="text" name="nom" id="nom" class="form-control"
                                                placeholder="Nom*" required>
                                        </div>
                                        <div class="col">
                                            <input type="text" name="tel" id="tel" class="form-control"
                                                placeholder="Numéro de téléphone*" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <input type="text" name="mail" id="email" class="form-control"
                                                placeholder="Adresse mail*" required>
                                        </div>
                                        <div class="col">
                                            <input type="text" name="objet" id="objet" class="form-control"
                                                placeholder="Objet*" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <textarea name="message" cols="40" rows="10"
                                                class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required"
                                                aria-required="true" aria-invalid="false" placeholder="Votre demande*"
                                                required></textarea>
                                        </div>
                                    </div>
                                    <div class="contact-submit">
                                        <input type="submit" name="submit" value="Envoyer"
                                            class="wpcf7-form-control wpcf7-submit button">
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-6 col-xs-12">
                            <div class="contact-address-area">
                                <h2>CONTACTEZ-NOUS</h2>
                                <p>N'hésitez pas à nous détailler votre demande.</p>
                                <ul>
                                    <li>
                                        <i class="fa fa-fax">&nbsp;</i> Address : 2 rue des cèdres, 97354 Rémire
                                    </li>
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
    <script src="https://alphamonetique.com/assets/js/jquery-1.12.4.min.js"></script>

    <!-- Popper min js -->
    <script src="https://alphamonetique.com/assets/js/popper.min.js"></script>
    <!-- Bootstrap min js  -->
    <script src="https://alphamonetique.com/assets/js/bootstrap.min.js"></script>
    <!-- All plugins here -->
    <script src="https://alphamonetique.com/assets/js/plugins.js"></script>
    <!-- Main js  -->
    <script src="https://alphamonetique.com/assets/js/main.js"></script>

</body>

</html>