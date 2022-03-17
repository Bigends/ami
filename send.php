<?php
if(isset($_POST['submit']))
{
  if(!empty($_POST['nom']) AND !empty($_POST['tel']) AND !empty($_POST['mail']) AND !empty($_POST['objet']) AND !empty($_POST['message']))
  {
    $header="MIME-Version: 1.0\r\n";
    $header.='From:"AMI.COM"<contact@alphamonetique.com>'."\n";
    $header.='Content-Type:text/html; charset="uft-8"'."\n";
    $header.='Content-Transfer-Encoding: 8bit';

    $message='
    <html>
    <head><meta charset="utf-8" />
     </head>
      <body>
      <meta charset="utf-8" />
        <div align="center">
          <img src="https://alphamonetique.com/assets/images/mail/mail.png"/>
          <br />
          <u>Nom de l\'expéditeur :</u>'.$_POST['nom'].'<br />
          <u>Mail de l\'expéditeur :</u>'.$_POST['mail'].'<br />
          <u>Objet de l\'expéditeur :</u>'.$_POST['objet'].'<br />
          <u>Numéro de téléphone de l\'expéditeur :</u>'.$_POST['tel'].'<br />
          <br />
          '.nl2br($_POST['message']).'
          <br />
          <img src="https://alphamonetique.com/assets/images/mail/mail2.png"/>
        </div>
      </body>
    </html>
    ';

    mail("contact@alphamonetique.com", "CONTACT - AMI", $message, $header);
    $msg="Votre message a bien été envoyé !";
  }
}
?>
<html>
    <head>
        <title>AMI: Vérification</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="css/style3.css" rel="stylesheet" type="text/css" media="screen" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="shortcut icon" type="image/x-icon" href="https://alphamonetique.com/assets/images/icons/icon_logo2.png">
        <script type="text/javascript"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenLite.min.js"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TimelineLite.min.js"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/latest/plugins/CSSPlugin.min.js"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>
		<link rel="stylesheet" media="screen and (max-width: 800px)" href="styleindex.css" />
        <meta name="identifier-url" content="https://demenagement-antilles-guyane.fr/"/>
        <meta property="og:url" content="https://demenagement-antilles-guyane.fr/"/>
    </head>
<body><center>

<!-- RS Start --
<div><a href="http://facebook.com" id="rs"><img src="img/fb.png" height=100px width=270px style="float:left;margin:-10 -1200px -3000 -100px;" title=""></a></div>
<!-- RS Done -->

<!-- Top Header Start -->
    <div id="cover"></div>
    <div id="popup">
        <div id="popup2"><h1>Envoyé!</h1>
            <img src="img/croie2.png" tabindex="2" width="80" height="80" style="float:left;margin:50 -1200px -3000 -40px;" title="">
            <h2>retour au site</h2>
            <a href="https://alphamonetique.com/" id="popupenter">
                <h3>Retour</h3>
            </a>
            </div>
        </div>
    </div>
<!-- Top Header Done -->

<!-- Top Frame Start 
    <div id="frame">
        <div class="img-frame"><img src="img/26.jpg" title="">
            <div class="img-frame2">
                </div>
            </div>
        </div>
<!-- Top Frame Done -->

<!-- Top Menu Start 
        <div id="barre-menu">
            <div class="menu">
                <div class="menu2">
                    <a href="#"><h1>ACCUEIL</h1></a>
                    <div class="menu3">
                    <a href="#"><h1>A PROPOS</h1></a>
                    <div class="menu4">
                    <a id="service" href="#"><h1>NOS SERVICES</h1></a>
                    <div class="menu5">
                    <a href="#"><h1>DISPONIBILITE</h1></a>
                    </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="shutdown"><img src="" title=""></div>
<!-- Top Menu Done 

<!-- Box Frame Start 
    <div id="box">
        <div class="box-button">
            <a href=""><h1>EN SAVOIR PLUS</h1></a>
        </div>
    </div>
    <div id="box2"><iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FHabbo%2F&tabs=timeline&width=340&height=390&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="340" height="390" style="float:left;margin:-200 -1200px -3000 -170px;" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe></div>
<!-- Box Frame Done --> 


 <script type='text/javascript'>
     jQuery(document).ready(function()
     {
     jQuery('a#entertrans2').click(function()
     {
     jQuery('#cover').fadeIn(1000);
     jQuery('#popup').fadeIn(500);
     return false;
     });
     });
 </script>
<!-- Menu Done -->
</center></body>
</html>