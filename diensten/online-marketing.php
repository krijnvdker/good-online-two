<!DOCTYPE html>
<html lang="zxx">
<head>
  <title>Website maken</title>
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
      <a class="nav-brand" href="../index.html">
        <img src="../img/logos/logo.png" class="main-logo" alt="logo" id="main_logo">
      </a>
      <div class="nav-toggle"></div>
    </div>
    <div class="nav-menus-wrapper">
      <ul class="nav-menu align-to-right">
        <li><a href="../index.html">Home</a></li>
        <li><a href="../over-ons.html">Over ons</a></li>
        <li><a href="#">Diensten</a>
          <ul class="nav-dropdown">
            <li><a href="website-maken.php">Website maken</a></li>
            <li><a href="webshop-maken.php">Webhop maken</a></li>
            <li><a href="online-marketing.php">Online marketing</a></li>
          </ul>
        </li>
        <li><a href="../portfolio.html">Portfolio</a></li>
        <li><a href="../contact.php">Contact</a></li>
      </ul>
    </div>
  </nav>
</header>
<!-- Navbar END -->


<!-- Page Title START -->
<div class="page-title-section" style="background-image: url(../img/online-marketing-header-page.jpg);">
  <div class="container">
    <h1>Online marketing</h1>
    <ul>
      <li><a href="../index.html">Home</a></li>
      <li><a href="#">Diensten</a></li>
      <li><a href="online-marketing.php">Online marketing</a></li>
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
              <li><a href="website-maken.php">Website maken</a></li>
              <li><a href="webshop-maken.php">Webshop maken</a></li>
              <li class="services-active"><a href="online-marketing.php">Online marketing</a></li>
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
            <p>Online marketing is noodzakelijk om uw organisatie tot een succes te maken. Wat voor doel u ook heeft, online marketing is een must. Wil je de concurrenten achter je laten? Wil je jouw klanten voor een langere tijd aan je binden? Wil je zo veel mogelijk verkopen? Wil je dat je website bij zoveel mogelijk bezoekers terecht komt? Op deze vragen is allemaal het antwoord: Online marketing. Online marketing is op heel veel verschillende manieren in te vullen. Bij iedere organisatie past een andere manier. Daarnaast is een voordeel van online marketing dat het geen hoge investeringsdrempel hoeft te zijn. Met een relatief klein budget kunnen er goede resultaten behaald worden middels online marketing. Onze passie ligt bij het halen van de doelen die jullie als organisatie hebben. Pas als die doelen bereikt zijn, zijn wij tevreden!</p>
          </div>

          <!-- Accordions START -->
          <div class="panel-group mt-20" id="accordion" role="tablist" aria-multiselectable="true">

            <div class="panel panel-default accordion">
              <div class="panel-heading accordion-heading" role="tab" id="headingOne">
                <h4 class="panel-title accordion-title">
                  <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Social Media
                  </a>
                </h4>
              </div>
              <div id="collapseOne" class="panel-collapse collapse in show" role="tabpanel" aria-labelledby="headingOne">
                <div class="panel-body accordion-body"> 
                  Social media is in de afgelopen jaren steeds belangrijker geworden. Niet alleen de ‘traditionele social media’ zoals Facebook en Twitter zijn belangrijk maar ook een medium als Snapchat is een belangrijk kanaal voor de jongere doelgroep bijvoorbeeld. Wij kunnen ons voorstellen dat u het lastig vindt om de social media kanalen in te richten en bij te houden voor uw organisatie. Wij kunnen u daarbij helpen. We helpen met het opzetten en inrichten van uw social media kanalen maar maken ook een planning voor uw content, wanneer kunt u wat plaatsen? Daarnaast zijn er steeds meer advertentiemogelijkheden op bijvoorbeeld Facebook en Instagram. Wij helpen u met het samenstellen van budgetten voor deze advertentiemogelijkheden en het vormgeven van de advertenties. 
                </div>
              </div>
            </div>

            <div class="panel panel-default accordion">
              <div class="panel-heading accordion-heading" role="tab" id="headingTwo">
                <h4 class="panel-title accordion-title">
                  <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false"
                     aria-controls="collapseTwo">
                     Mailings
                  </a>
                </h4>
              </div>
              <div id="collapseTwo" class="panel-collapse collapse in show" role="tabpanel" aria-labelledby="headingTwo">
                <div class="panel-body accordion-body">
                  Misschien wel een van de oudste online media kanalen: Mail! Mensen mailen al redelijk lang met elkaar. Doordat er met mail veel mensen in een keer te bereiken zijn is het een redelijk goedkope manier om uw product of dienst onder de aandacht te brengen. Wat verstaan we onder een mailing? In een mailing is veel mogelijk, maar de nieuwsbrief is het meest gebruikte voorbeeld. Maar hoe wordt er geld verdiend met een nieuwsbrief? De eerste mogelijkheid is een mailing sturen naar je hele klantenbestand. Hier komt vervolgens een percentage kliks uit waar uiteindelijk een sale uit voort kan komen. Daarnaast is het mogelijk om gericht te mailen. Zo kun je een persoon die een aantal keren de website heeft bezocht in de afgelopen dagen een extra mailing sturen met bijvoorbeeld een kortingscode waardoor hij overgehaald kan worden tot aankoop van het product of de dienst.
                </div>
              </div>
            </div>

            <div class="panel panel-default accordion">
              <div class="panel-heading accordion-heading" role="tab" id="headingThree">
                <h4 class="panel-title accordion-title">
                  <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false"
                     aria-controls="collapseThree">
                     SEO
                  </a>
                </h4>
              </div>
              <div id="collapseThree" class="panel-collapse collapse in show" role="tabpanel" aria-labelledby="headingThree">
                <div class="panel-body accordion-body">
                  SEO, oftewel zoekmachine optimalisatie in het Nederlands. SEO zorgt ervoor dat potentiële klanten je website kunnen vinden als ze bijvoorbeeld zoeken in Google. Daarom is het heel belangrijk om je website goed in te richten voor Google. Zodat potentiële klanten jouw website of webshop eerder tegenkomen in Google dan die van je concurrent. Als de webshop of website na optimalisatie bovenaan staat in Google betekent het niet dat het klaar is. SEO is een doorlopend proces. Google verandert vaak haar algoritmes waardoor er andere zaken belangrijk worden om uw website of webshop hoog in Google te krijgen. Daarnaast zullen andere organisaties ook proberen hun websites of webshops zo hoog mogelijk in Google te krijgen. Het is zaak om deze organisaties voor te blijven.
                </div>
              </div>
            </div>

            <div class="panel panel-default accordion">
              <div class="panel-heading accordion-heading" role="tab" id="headingFour">
                <h4 class="panel-title accordion-title">
                  <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false"
                     aria-controls="collapseFour">
                     SEA
                  </a>
                </h4>
              </div>
              <div id="collapseFour" class="panel-collapse collapse in show" role="tabpanel" aria-labelledby="headingFour">
                <div class="panel-body accordion-body">
                  SEA, oftewel zoekmachine adverteren. Je kent ze waarschijnlijk wel, de bovenste advertenties in Google. Of de advertenties aan rechterkant van de zoekresultaten. Dit zijn de betaalde zoekresultaten. Er zijn een aantal redenen om te betalen voor je Google advertenties. De eerste is dat je direct resultaat krijgt. Om je website of webshop hoog in Google te krijgen met organische zoekresultaten (SEO) kost enige tijd. Met betaalde advertenties is dat niet het geval. Daarnaast heb je altijd een prominente plaats bovenin de zoekresultaten op de zoekwoorden die je instelt. Het laatste grote voordeel van SEA is dat je een specifieke doelgroep kan targetten met je zoekresultaten. Je kunt je advertentie bijvoorbeeld tonen aan mensen die uit een bepaald gebied of een bepaalde stad komen. Die advertentie kun je ook op een bepaald tijdstip tonen. 
                </div>
              </div>
            </div>

            <div class="panel panel-default accordion">
              <div class="panel-heading accordion-heading" role="tab" id="headingFive">
                <h4 class="panel-title accordion-title">
                  <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false"
                     aria-controls="collapseFive">
                     Website optimalisatie
                  </a>
                </h4>
              </div>
              <div id="collapseFive" class="panel-collapse collapse in show" role="tabpanel" aria-labelledby="headingFive">
                <div class="panel-body accordion-body">
                  Is uw website of webshop wel ‘google-proof’? Behaald uw website of webshop niet de gewenste ranking in Google? De oorzaak van deze problemen zou wel eens aan de technische opbouw van uw website of webshop kunnen liggen. Laat uw website of webshop bij ons testen. Wij analyseren alle punten waar Google rekening mee houdt in haar ranking. Na de analyse maken we een plan met verbeterpunten waardoor uw website beter gaat presteren in de Google ranking.
                </div>
              </div>
            </div>

            <div class="panel panel-default accordion">
              <div class="panel-heading accordion-heading" role="tab" id="headingSix">
                <h4 class="panel-title accordion-title">
                  <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false"
                     aria-controls="collapseSix">
                     Web analytics (data)
                  </a>
                </h4>
              </div>
              <div id="collapseSix" class="panel-collapse collapse in show" role="tabpanel" aria-labelledby="headingSix">
                <div class="panel-body accordion-body">
                  De hoeveelheid data die beschikbaar is voor alle online media is tegenwoordig heel erg veel. Maar wat kun je met die data? En waar kun je die data überhaupt vinden? We kunnen ons voorstellen dat dit vragen zijn waar jullie als organisatie het antwoord op schuldig moeten blijven. Geen probleem! Good Online is dé specialist op het gebied van online data. Wij analyseren welke data beschikbaar is en hoe die data bij kan dragen aan het succes van uw organisatie. 
Wij analyseren niet alleen data maar maken die data ook voor uw organisatie inzichtelijk. Hierbij kan het gaan om een website, webshop maar ook social media bijvoorbeeld. Doordat u zelf meer inzicht krijg in de data van uw online media en deze data ook begrijpt kunt u zelf ook actie ondernemen op basis van die data.
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
      <a href="contact.php" class="primary-button button-md mt-10">Neem contact op</a>
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
          <p class="mt-25">Wij zijn Good Online. Het bedrijf met passie voor alles wat digitaal en online is. Door onze liefde voor online in combinatie met kennis van de nieuwste technieken willen we het optimale resultaat uit uw probleem of vraagstuk halen.</p>
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
          <li><a href="../index.html">Home</a></li>
          <li><a href="../over-ons.html">Over ons</a></li>
          <li><a href="website-maken.php">Website maken</a></li>
          <li><a href="webshop-maken.php">Webshop maken</a></li>
          <li><a href="online-marketing.php">Online marketing</a></li>
          <li><a href="../portfolio.html">Portfolio</a></li>
          <li><a href="../contact.php">Contact</a></li>
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