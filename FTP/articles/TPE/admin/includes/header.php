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
  <title>AMI: Alpha Monétique Intéractif</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="assets/images/icons/icon_logo2.png">

  <link rel="stylesheet" href="https://alphamonetique.com/assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://alphamonetique.com/assets/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://alphamonetique.com/assets/css/ionicons.min.css">
  <link rel="stylesheet" href="https://alphamonetique.com/assets/css/css-plugins-call.css">
  <link rel="stylesheet" href="https://alphamonetique.com/assets/css/bundle3.css">
  <link rel="stylesheet" href="https://alphamonetique.com/assets/css/main6.css">
  <link rel="stylesheet" href="https://alphamonetique.com/assets/css/responsive.css">
  <link rel="stylesheet" href="https://alphamonetique.com/assets/css/colors.css">
  <link rel="stylesheet" href="https://alphamonetique.com/articles/TPE/admin/assets/css/style.css">
  <link rel="stylesheet" href="https://alphamonetique.com/assets/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="https://alphamonetique.com/assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<body>
  <!-- Navbar Début -->
  <nav class="navbar navbar-expand-lg navbar-primary bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand text-light" href="#">ADMIN</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
        aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="?action=add_article">TPE Autonome</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?action=add_centralise">TPE Centralisé</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?action=add_monnayeur">MONNAYEUR</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?action=add_encaissement">SYSTEME ENCAISSEMENT</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?action=add_paiement">SOLUTION PAIEMENT</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?action=add_camera">CAMERA DE SURVEILLANCE</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?action=add_caisse">CAISSE ENREGISTREUSE</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-danger" href="?action=edit_delete">MODIFIER OU SUPPRIMER</a>
          </li>
        </ul>
        <form method="POST" action="https://alphamonetique.com/articles/logout.php">
          <a href="https://alphamonetique.com/articles/index.php">Déconnexion</a>
        </form>

      </div>
    </div>
  </nav>
  <!-- Navbar Fin -->

  <!-- Popper min js -->
  <script src="https://alphamonetique.com/assets/js/popper.min.js"></script>
  <!-- Bootstrap min js  -->
  <script src="https://alphamonetique.com/assets/js/bootstrap.min.js"></script>
  <!-- nivo slider pack js  -->
  <script src="https://alphamonetique.com/assets/js/jquery.nivo.slider.pack.js"></script>
  <!-- All plugins here -->
  <script src="https://alphamonetique.com/assets/s/plugins.js"></script>
  <!-- Main js  -->
  <script src="https://alphamonetique.com/assets/js/main.js"></script>
</body>

</html>