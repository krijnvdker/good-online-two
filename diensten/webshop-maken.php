<!DOCTYPE html>
<html lang="zxx">
<head>
  <title>Good Online | Webshop maken</title>
  <meta charset="UTF-8">
  <link rel="shortcut icon" href="../img/favicon-256x256.ico" type="image/x-icon"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- Bootstrap CSS-->
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">

  <!-- Font-Awesome -->
  <link rel="stylesheet" type="text/css" href="../css/font-awesome.css">

  <!-- Icomoon -->
  <link rel="stylesheet" type="text/css" href="../css/icomoon.css">

  <!-- Slider -->
  <link rel="stylesheet" type="text/css" href="../css/swiper.min.css">
  <link rel="stylesheet" type="text/css" href="../css/slider.css">

  <!-- Animate.css -->
  <link rel="stylesheet" href="../css/animate.css">

  <!-- Color Switcher -->
  <link rel="stylesheet" type="text/css" href="../css/switcher.css">

  <!-- Owl Carousel  -->
  <link rel="stylesheet" href="../css/owl.carousel.css">

  <!-- Main Styles -->
  <link rel="stylesheet" type="text/css" href="../css/default.css">
  <link rel="stylesheet" type="text/css" href="../css/styles.css" id="colors">

  <!-- Fonts Google -->
  <link href="https://fonts.googleapis.com/css?family=Fira+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">

</head>
<body>


<!-- Preloader Start-->
<div id="preloader">
  <div class="row loader">
    <div class="loader-icon"></div>
  </div>
</div>
<!-- Preloader End -->

<!-- Top-Bar START -->
<div id="top-bar" class="hidden-sm-down">
  <div class="container">
    <div class="row">
      <div class="col-md-9 col-12">
        <div class="top-bar-info">
          <ul>
            <li><a href="tel:0031627058588"><i class="fa fa-phone"></i>(+31) 6 2705 8588</a>
            <li>
            <li><a href="mailto:info@good-online.nl"><i class="fa fa-envelope"></i>info@good-online.nl</a>
            <li>
          </ul>
        </div>
      </div>
      <div class="col-md-3 col-12">
        <ul class="social-icons hidden-md-down">
          <li><a href="https://www.facebook.com/Good-Online-101258787976703"><i class="fa fa-facebook"></i></a></li>
          <li><a href="https://www.instagram.com/goodonline.nl/"><i class="fa fa-instagram"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
<!-- Top-Bar END -->

<!-- Navbar START -->
<header>
  <nav id="navigation4" class="container navigation">
    <div class="nav-header">
      <a class="nav-brand" href="../">
        <img src="../img/logos/logo.png" class="main-logo" alt="logo" id="main_logo">
      </a>
      <div class="nav-toggle"></div>
    </div>
    <div class="nav-menus-wrapper">
      <ul class="nav-menu align-to-right">
        <li><a href="../">Home</a></li>
        <li><a href="../over-ons">Over ons</a></li>
        <li><a href="#">Diensten</a>
          <ul class="nav-dropdown">
            <li><a href="website-maken">Website maken</a></li>
            <li><a href="webshop-maken">Webhop maken</a></li>
            <li><a href="online-marketing">Online marketing</a></li>
          </ul>
        </li>
        <li><a href="../portfolio">Portfolio</a></li>
        <li><a href="../contact">Contact</a></li>
      </ul>
    </div>
  </nav>
</header>
<!-- Navbar END -->


<!-- Page Title START -->
<div class="page-title-section" style="background-image: url(../img/webshop-header-page.jpg);">
  <div class="container">
    <h1>Webshop maken</h1>
    <ul>
      <li><a href="../">Home</a></li>
      <li><a href="#">Diensten</a></li>
      <li><a href="webshop-maken">Webshop maken</a></li>
    </ul>
  </div>
</div>
<!-- Page Title END -->

<!-- Service Single START -->
<div class="section-block">
  <div class="container">
    <div class="row">
      <!-- Left Side START -->
      <div class="col-md-3 col-sm-4 col-12">
        <div class="services-single-left-box">

          <!-- Vertical Menu START -->
          <div class="services-single-left-heading">
            <h4>Onze diensten</h4>
          </div>
          <div class="services-single-menu mt-30">
            <ul>
              <li><a href="website-maken">Website maken</a></li>
              <li class="services-active"><a href="webshop-maken">Webshop maken</a></li>
              <li><a href="online-marketing">Online marketing</a></li>
            </ul>
          </div>
          <!-- Vertical Menu END -->

          <div class="services-single-left-heading mt-40">
            <h4>Een vraag?</h4>
          </div>
          <ul class="primary-list mt-30">
            <li><i class="fa fa-globe"></i>Mariaplein 30, Helden</li>
            <li><i class="fa fa-phone"></i>+31 6 2705 8588</li>
            <li><i class="fa fa-envelope-open"></i>info@good-online.nl</li>
          </ul>

          <!-- Callback START -->
          <div class="callback-box mt-30">
            <div class="services-single-left-heading">
              <h4>Terugbel verzoek</h4>
            </div>
            <?php
            if(isset($_POST['name']) && isset($_POST['phone']))
                {
                $name = trim($_POST["name"]);
                $phone = trim($_POST["phone"]);
                $email = 'krijnvdker@gmail.com';
                if(strlen($name)<2) {
                    print "<p>Vul je naam in.</p>";
                }else if(strlen($phone)<2) {
                    print  "<p>Vul een geldig telefoonnummer in.</p>";
                }else{
                            $headers =  'From: '.$email. "\r\n" .
                                        'Reply-To: '.$email . "\r\n" .
                                        'X-Mailer: PHP/' . phpversion();
                    mail('krijnvdker@gmail.com','Terugbel verzoek',$phone,$headers);
                    print "<p>Je terugbelverzoek is ingezonden. We komen zo snel mogelijk bij je terug.</p>";
                }

            }else{
            ?>
            <form method="post" action="" class="callback-box-form mt-20">
              <input type="text" name="name" placeholder="Naam">
              <input type="text" name="phone" placeholder="Telefoonnummer">
              <button type="submit">Verzoek sturen</button>
            </form>
            <?php } ?>
          </div>
          <!-- Callback END -->
        </div>
      </div>
      <!-- Left Side END -->

      <!-- Right Side START -->
      <div class="col-md-9 col-sm-8 col-12">
        <div class="services-single-right">
          <div class="text-content-big mt-20">
            <p>In de digitale wereld van tegenwoordig schieten de webshops als paddenstoelen uit de grond. Veel ondernemers proberen hun product via de online kanalen bij hun doelgroep aan de man te krijgen. Deze trend is logisch, het zal je niet verrassen dat het koopgedrag van de consument steeds meer online gebeurd. Door de enorme online concurrentie is het heel belangrijk om je webshop perfect aan te laten sluiten bij het gedrag van je doelgroep. Daarnaast wil je natuurlijk ook dat jouw organisatie en webshop gezien worden en opvallen. Daarom houden we tijdens het ontwerpen en ontwikkelen van je webshop rekening met: conversie, gezien worden en opvallen. </p>
          </div>

          <!-- Accordions START -->
          <div class="panel-group mt-20" id="accordion" role="tablist" aria-multiselectable="true">

            <div class="panel panel-default accordion">
              <div class="panel-heading accordion-heading" role="tab" id="headingOne">
                <h4 class="panel-title accordion-title">
                  <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Conversie, conversie, conversie
                  </a>
                </h4>
              </div>
              <div id="collapseOne" class="panel-collapse collapse in show" role="tabpanel" aria-labelledby="headingOne">
                <div class="panel-body accordion-body">
                  Producten verkopen via je webshop is het belangrijkste, en het liefste zoveel mogelijk natuurlijk. Daarbij is conversie een belangrijk onderdeel. We willen zoveel mogelijk bezoekers klanten laten worden. Belangrijke vragen daarbij zijn: Wie zijn je bezoekers? Wanneer is je bezoeker een klant? Samen kijken we naar de conversiedoelen van je webshop en je doelgroep. Op basis daarvan gaan we aan de slag om een conversiegericht ontwerp te maken en dit vervolgens technisch uit te werken.
                </div>
              </div>
            </div>

            <div class="panel panel-default accordion">
              <div class="panel-heading accordion-heading" role="tab" id="headingTwo">
                <h4 class="panel-title accordion-title">
                  <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false"
                     aria-controls="collapseTwo">
                     Goede online vindbaarheid
                  </a>
                </h4>
              </div>
              <div id="collapseTwo" class="panel-collapse collapse in show" role="tabpanel" aria-labelledby="headingTwo">
                <div class="panel-body accordion-body">
                  Goede online vindbaarheid is natuurlijk een must in de tijd waarin de webshops als paddenstoelen uit de grond schieten. Door je shop goed vindbaar te maken voor je doelgroep vergroot je de kans op goede afzet en omzet percentages. Als klanten je webshop niet kunnen vinden is de kans klein dat je het gewenste resultaat haalt wat je wellicht vooraf verwacht. Een belangrijk onderdeel van online vindbaarheid zijn de zoekresultaten van Google. Hoe hoger je daar staat met je shop hoe sneller potentiële klanten op je webshop kunnen komen. Daarnaast zijn ook een aantal andere kanalen erg belangrijk geworden. Denk aan social media (Facebook, Twitter, Instagram etc.), maar ook het Google Shopping gedeelte wat steeds populairder en belangrijker wordt.
                </div>
              </div>
            </div>

            <div class="panel panel-default accordion">
              <div class="panel-heading accordion-heading" role="tab" id="headingThree">
                <h4 class="panel-title accordion-title">
                  <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false"
                     aria-controls="collapseThree">
                     Van design tot een echte webshop
                  </a>
                </h4>
              </div>
              <div id="collapseThree" class="panel-collapse collapse in show" role="tabpanel" aria-labelledby="headingThree">
                <div class="panel-body accordion-body">
                  Een goed converterende webshop begint bij een goed design. Maar wat is een goed design? Of sterker nog wanneer is een design ‘goed’? Wij bij Good Online vinden een design pas goed wanneer het naadloos aansluit op de wensen, gedrag en behoeften van je doelgroep. Je doelgroep is het allerbelangrijkste tijdens het ontwerpen van een webshop. Wanneer we met alle betrokken partijen tevreden zijn over het ontwerp begint de realisatiefase. Tijdens deze fase wordt het ontwerp technisch gerealiseerd en wordt ervoor gezorgd dat alle functionaliteiten zoals ze vooraf zijn bedacht technisch goed werken. Tijdens de realisatiefase wordt de webshop natuurlijk uitgebreid getest zodat alles op en top werkt. Als alles perfect werkt en naar tevredenheid getest is door alle partijen is de webshop klaar om gelanceerd te worden.
                </div>
              </div>
            </div>

            <div class="panel panel-default accordion">
              <div class="panel-heading accordion-heading" role="tab" id="headingFour">
                <h4 class="panel-title accordion-title">
                  <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false"
                     aria-controls="collapseFour">
                     Beheerbaarheid
                  </a>
                </h4>
              </div>
              <div id="collapseFour" class="panel-collapse collapse in show" role="tabpanel" aria-labelledby="headingFour">
                <div class="panel-body accordion-body">
                  Een belangrijk onderdeel voor jou als ondernemer aan een webshop is het beheren. Je wil natuurlijk niet voor ieder ding wat er veranderd of toegevoegd moet worden dat je ons moet bellen om dat te doen. Wij zorgen er voor dat je de webshop volledig in eigen beheer hebt. Zo kun je zelf jouw producten, categorieën en andere dingen beheren.
                </div>
              </div>
            </div>

            <div class="panel panel-default accordion">
              <div class="panel-heading accordion-heading" role="tab" id="headingFive">
                <h4 class="panel-title accordion-title">
                  <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false"
                     aria-controls="collapseFive">
                     Maatwerk
                  </a>
                </h4>
              </div>
              <div id="collapseFive" class="panel-collapse collapse in show" role="tabpanel" aria-labelledby="headingFive">
                <div class="panel-body accordion-body">
                  Buiten de standaard functionaliteiten van een webshop kan het natuurlijk zo zijn dat er extra of maatwerk functionaliteiten gebouwd moeten worden omdat je doelgroep daar behoefte aan heeft of simpelweg omdat het een echte toevoeging aan je webshop is. Wij als Good Online zijn gek op zulke extra functionaliteiten vanwege het feit dat wij hier nog meer van waarde kunnen zijn. Door onze technische expertises kunnen we bijna alle maatwerk functionaliteiten in je webshop integreren zodat je echt een webshop hebt die uw doelgroep aantrekt.
                </div>
              </div>
            </div>

            <div class="panel panel-default accordion">
              <div class="panel-heading accordion-heading" role="tab" id="headingSix">
                <h4 class="panel-title accordion-title">
                  <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false"
                     aria-controls="collapseSix">
                     Uitgebreide service en nazorg
                  </a>
                </h4>
              </div>
              <div id="collapseSix" class="panel-collapse collapse in show" role="tabpanel" aria-labelledby="headingSix">
                <div class="panel-body accordion-body">
                  Het laatste punt in de samenwerking maar zeker niet het onbelangrijkste is de nazorg. Als je webshop live staat wil dit niet zeggen dat we klaar zijn. De techniek veranderd in deze tijd ontzettend snel, zo ook de techniek waarmee je webshop gebouwd is. Deze willen we graag up to date houden. Daarnaast kunnen wij het ons voorstellen dat er vragen op spelen tijdens het beheren of vullen van je webshop. Met die vragen kun je natuurlijk altijd bij ons terecht.
                </div>
              </div>
            </div>
          </div>
          <!-- Accordions END -->

        </div>
      </div>
      <!-- Right Side END -->
    </div>
  </div>
</div>
<!-- Service Single END -->


<!-- Background Section START -->
<div class="section-block-bg" style="background-image: url(../img/meet-us.jpg);">
  <div class="container">
    <div class="section-heading center-holder white-color">
      <span>Zin in een kop koffie of thee?</span>
      <h2><strong>Maak kennis met ons!</strong></h2>
      <h4>Of stel gewoon een vraag ;-)</h4>
      <a href="../contact" class="primary-button button-md mt-10">Neem contact op</a>
    </div>
  </div>
</div>
<!-- Background Section END -->

<!-- Footer START -->
<footer>
  <div class="container">
    <div class="row">
      <!-- Column 1 Start -->
      <div class="col-md-4 col-sm-6 col-12">
        <h3>Good Online</h3>
        <div class="mt-25">
          <img src="../img/logo-white.png" id="footer-logo" alt="footer-logo">
          <p class="mt-25">Wij zijn Good Online. Het bedrijf met passie voor alles wat digitaal en online is. Door onze liefde voor online in combinatie met kennis van de nieuwste technieken willen we het optimale resultaat uit je probleem of vraagstuk halen.</p>
          <div class="footer-social-icons mt-25">
            <ul>
              <li><a href="https://www.facebook.com/Good-Online-101258787976703"><i class="fa fa-facebook-square"></i></a></li>
              <li><a href="https://www.instagram.com/goodonline.nl/"><i class="fa fa-instagram"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      <!-- Column 1 End -->

      <!-- Column 2 Start -->
      <div class="col-md-3 col-sm-6 col-12">
        <h3>Linkjes</h3>
        <ul class="footer-list">
          <li><a href="../">Home</a></li>
          <li><a href="../over-ons">Over ons</a></li>
          <li><a href="website-maken">Website maken</a></li>
          <li><a href="webshop-maken">Webshop maken</a></li>
          <li><a href="online-marketing">Online marketing</a></li>
          <li><a href="../portfolio">Portfolio</a></li>
          <li><a href="../contact">Contact</a></li>
        </ul>
      </div>
      <!-- Column 2 End -->

      <!-- Column 3 Start -->
      <div class="col-md-3 col-sm-6 col-12">
        <h3>Recente posts</h3>
        <div class="mt-25">
          <!-- Post Start -->
          <!-- <div class="footer-recent-post clearfix">
            <div class="footer-recent-post-thumb">
              <img src="http://via.placeholder.com/65x65" alt="img">
            </div>
            <div class="footer-recent-post-content">
              <span>February 7, 2018</span>
              <a href="#">Advices for young designers</a>
            </div>
          </div> -->
          <!-- Post End -->
          <!-- Post Start -->
          <!-- <div class="footer-recent-post clearfix">
            <div class="footer-recent-post-thumb">
              <img src="http://via.placeholder.com/65x65" alt="img">
            </div>
            <div class="footer-recent-post-content">
              <span>February 7, 2018</span>
              <a href="#">What Planning Process Needs?</a>
            </div>
          </div> -->
          <!-- Post End -->
          <!-- Post Start -->
          <!-- <div class="footer-recent-post clearfix">
            <div class="footer-recent-post-thumb">
              <img src="http://via.placeholder.com/65x65" alt="img">
            </div>
            <div class="footer-recent-post-content">
              <span>February 7, 2018</span>
              <a href="#">Lorem ipsum dolor sit amet.</a>
            </div>
          </div> -->
          <!-- Post End -->
        </div>
      </div>
      <!-- Column 3 End -->

      <!-- Column 4 Start -->
      <div class="col-md-2 col-sm-6 col-12">
        <h3>Tags</h3>
        <div class="footer-tags mt-25">
          <a href="#">Website</a>
          <a href="#">Webshop</a>
          <a href="#">Online marketing</a>
          <a href="#">UX</a>
          <a href="#">Development</a>
          <a href="#">Design</a>
          <a href="#">Limburg</a>
          <a href="#">Venlo</a>
          <a href="#">Weerts</a>
          <a href="#">UI</a>
          <a href="#">Web</a>
          <a href="#">WebDesign</a>
        </div>
      </div>
      <!-- Column 4 End -->
    </div>

    <!-- Footer Bar Start -->
    <div class="footer-bar">
      <p><span class="primary-color">Good Online</span> © 2019. All Rights Reserved.</p>
    </div>
    <!-- Footer Bar End -->
  </div>
</footer>
<!-- Footer END -->

<!-- Scroll to top button Start -->
<a href="#" class="scroll-to-top"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
<!-- Scroll to top button End -->


<!-- Jquery -->
<script src="../js/jquery.min.js"></script>

<!--Popper JS-->
<script src="../js/popper.min.js"></script>

<!--Popper JS-->
<script src="../js/popper.min.js"></script>

<!-- Bootstrap JS-->
<script src="../js/bootstrap.min.js"></script>

<!-- Owl Carousel-->
<script src="../js/owl.carousel.js"></script>

<!-- Navbar JS -->
<script src="../js/navigation.js"></script>
<script src="../js/navigation.fixed.js"></script>

<!-- Wow JS -->
<script src="../js/wow.min.js"></script>

<!-- Countup -->
<script src="../js/jquery.counterup.min.js"></script>
<script src="../js/waypoints.min.js"></script>

<!-- Tabs -->
<script src="../js/tabs.min.js"></script>

<!-- Yotube Video Player -->
<script src="../js/jquery.mb.YTPlayer.min.js"></script>

<!-- Swiper Slider -->
<script src="../js/swiper.min.js"></script>

<!-- Isotop -->
<script src="../js/isotope.pkgd.min.js"></script>

<!-- Switcher JS -->
<script src="../js/switcher.js"></script>

<!-- Modernizr -->
<script src="../js/modernizr.js"></script>

<!-- Google Map -->
<script src="../js/map.js"></script>

<!-- Main JS -->
<script src="../js/main.js"></script>

</body>
</html>