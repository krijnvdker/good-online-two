<!DOCTYPE html>
<html lang="zxx">
<head>
  <title>Good online | Online media bureau</title>
  <meta charset="UTF-8">
  <link rel="shortcut icon" href="./img/logo.png"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- Bootstrap CSS-->
  <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">

  <!-- Font-Awesome -->
  <link rel="stylesheet" type="text/css" href="./css/font-awesome.css">

  <!-- Icomoon -->
  <link rel="stylesheet" type="text/css" href="./css/icomoon.css">

  <!-- Slider -->
  <link rel="stylesheet" type="text/css" href="./css/swiper.min.css">
  <link rel="stylesheet" type="text/css" href="./css/slider.css">

  <!-- Animate.css -->
  <link rel="stylesheet" href="css/animate.css">

  <!-- Color Switcher -->
  <link rel="stylesheet" type="text/css" href="./css/switcher.css">

  <!-- Owl Carousel  -->
  <link rel="stylesheet" href="./css/owl.carousel.css">

  <!-- Main Styles -->
  <link rel="stylesheet" type="text/css" href="./css/default.css">
  <link rel="stylesheet" type="text/css" href="./css/styles.css" id="colors">

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
            <li><i class="fa fa-phone"></i>(+31) 6 2705 8588
            <li>
            <li><i class="fa fa-envelope"></i>info@good-online.nl
            <li>
          </ul>
        </div>
      </div>
      <div class="col-md-3 col-12">
        <ul class="social-icons hidden-md-down">
          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#"><i class="fa fa-instagram"></i></a></li>
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
      <a class="nav-brand" href="./index.html">
        <img src="./img/logos/logo.png" class="main-logo" alt="logo" id="main_logo">
      </a>
      <div class="nav-toggle"></div>
    </div>
    <div class="nav-menus-wrapper">
      <ul class="nav-menu align-to-right">
        <li><a href="./index.html">Home</a></li>
        <li><a href="./over-ons.html">Over ons</a></li>
        <li><a href="#">Diensten</a>
          <ul class="nav-dropdown">
            <li><a href="./diensten/website-maken.html">Website maken</a></li>
            <li><a href="./diensten/webshop-maken.html">Webhop maken</a></li>
            <li><a href="./diensten/online-marketing.html">Online marketing</a></li>
          </ul>
        </li>
        <li><a href="./portfolio.html">Portfolio</a></li>
        <li><a href="./contact.html">Contact</a></li>
      </ul>
    </div>
  </nav>
</header>
<!-- Navbar END -->

<!-- Page Title START -->
<div class="page-title-section" style="background-image: url(img/meet-us.jpg);">
  <div class="container">
    <h1>Contact</h1>
    <ul>
      <li><a href="index.html">Home</a></li>
      <li><a href="contact-2.html">Contact</a></li>
    </ul>
  </div>
</div>
<!-- Page Title END -->


<!-- Contact Boxes START -->
<div class="section-block-grey">
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-6 col-12">
        <div class="contact-box">
          <i class="fa fa-phone-square"></i>
          <h4>Bel ons</h4>
          <span>+31 6 2705 8588</span>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 col-12">
        <div class="contact-box">
          <i class="fa fa-map"></i>
          <h4>Bezoek ons</h4>
          <span>Mariaplein 30, Helden</span>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 col-12">
        <div class="contact-box">
          <i class="fa fa-envelope"></i>
          <h4>Mail ons</h4>
          <span>info@good-online.nl</span>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 col-12">
        <div class="contact-box">
          <i class="fa fa-comments-o"></i>
          <h4>Live Chat</h4>
          <span>Chat met ons 24/7</span>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Contact Boxes END -->

<!-- Contact Form Section START -->
<div class="section-block">
  <div class="container">
    <div class="section-heading center-holder">
      <span>Laten we kennis maken</span>
      <h3>Stuur ons een berichtje of stel een vraag :)</h3>
      <div class="section-heading-line"></div>
    </div>
    <div class="mt-50">
      <div class="contact-form-box">
      
        <?php
            if(isset($_POST['email']))
            {
            $name = trim($_POST["name"]);
            $email = trim($_POST["email"]);
            $subject = trim($_POST["subject"]);
            $message = trim($_POST["message"]);
            if(strlen($name)<2) {
                print "<p>Please type your name.</p>";
            }else if(strlen($subject)<2) {
                print "<p>Please type a subject.</p>";
            }else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                print  "<p>Please type a valid email address.</p>";
            }else if(strlen($message)<10) {
                print "<p>Please type your message.</p>";
            }else{
                        $headers =  'From: '.$email. "\r\n" .
                                    'Reply-To: '.$email . "\r\n" .
                                    'X-Mailer: PHP/' . phpversion();
                mail('krijnvdker@gmail.com',$subject,$message,$headers);
                print "mail succesuffully sent";
            }

        }
        ?>
        <!-- Form Start -->
        <form class="contact-form row" name="template-contactform" action="" method="post">
          <div class="col-md-6 col-sm-6 col-12">
            <input type="text" name="name" placeholder="Naam">
          </div>
          <div class="col-md-6 col-sm-6 col-12">
            <input type="email" name="email" placeholder="E-mail">
          </div>

          <div class="col-md-12">
            <input type="text" name="subject" placeholder="Onderwerp">
          </div>

          <div class="col-md-12">
            <textarea name="message" placeholder="Bericht"></textarea>
          </div>
          <div class="col-md-12">
            <div class="center-holder">
              <button type="submit">Verzend bericht</button>
            </div>
          </div>
        </form>
        <!-- Form End --> 
      </div>
    </div>
  </div>
</div>
<!-- Contact Form Section END -->

<!-- Map START -->
<div id="map">
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBk25E4mNfVIEt3tNl3K1HwNZVruVoFBlA&callback=initMap">
  </script>
</div>
<!-- Map START -->


<!-- Footer START -->
<footer>
  <div class="container">
    <div class="row">
      <!-- Column 1 Start -->
      <div class="col-md-4 col-sm-6 col-12">
        <h3>Good Online</h3>
        <div class="mt-25">
          <img src="img/logo-white.png" id="footer-logo" alt="footer-logo">
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
          <li><a href="index.html">Home</a></li>
          <li><a href="over-ons.html">Over ons</a></li>
          <li><a href="diensten/website-maken.html">Website maken</a></li>
          <li><a href="diensten/webshop-maken.html">Webshop maken</a></li>
          <li><a href="diensten/online-marketing.html">Online marketing</a></li>
          <li><a href="portfolio.html">Portfolio</a></li>
          <li><a href="contact.html">Contact</a></li>
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
<script src="js/jquery.min.js"></script>

<!--Popper JS-->
<script src="js/popper.min.js"></script>

<!--Popper JS-->
<script src="js/popper.min.js"></script>

<!-- Bootstrap JS-->
<script src="js/bootstrap.min.js"></script>

<!-- Owl Carousel-->
<script src="js/owl.carousel.js"></script>

<!-- Navbar JS -->
<script src="js/navigation.js"></script>
<script src="js/navigation.fixed.js"></script>

<!-- Wow JS -->
<script src="js/wow.min.js"></script>

<!-- Countup -->
<script src="js/jquery.counterup.min.js"></script>
<script src="js/waypoints.min.js"></script>

<!-- Tabs -->
<script src="js/tabs.min.js"></script>

<!-- Yotube Video Player -->
<script src="js/jquery.mb.YTPlayer.min.js"></script>

<!-- Swiper Slider -->
<script src="js/swiper.min.js"></script>

<!-- Isotop -->
<script src="js/isotope.pkgd.min.js"></script>

<!-- Switcher JS -->
<script src="js/switcher.js"></script>

<!-- Modernizr -->
<script src="js/modernizr.js"></script>

<!-- Google Map -->
<script src="js/map.js"></script>

<!-- Main JS -->
<script src="js/main.js"></script>

</body>
</html>