<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>@yield('title')</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="{{ URL::asset('/asset/img/favicon.png') }}" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('/asset/lib/bootstrap/css/bootstrap.min.css') }}">

  <!-- Libraries CSS Files -->
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('/asset/lib/font-awesome/css/font-awesome.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('/asset/lib/animate/animate.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('/asset/lib/ionicons/css/ionicons.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('/asset/lib/owlcarousel/assets/owl.carousel.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('/asset/lib/lightbox/css/lightbox.min.css') }}">

  <!-- Main Stylesheet File -->
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('/asset/css/style.css') }}">

</head>

<body>
  
  @extends('layout.components.navbar')

  @yield('content')

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>IOV</h3>
            <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus. Scelerisque felis imperdiet proin fermentum leo. Amet volutpat consequat mauris nunc congue.</p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Home</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">About us</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Services</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>

            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>

          <div class="col-lg-3 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna veniam enim veniam illum dolore legam minim quorum culpa amet magna export quem marada parida nodela caramase seza.</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit"  value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>    
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>IOV</strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="">IOV</a>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- JavaScript Libraries -->
  <script src="{{ URL::asset('/asset/lib/jquery/jquery.min.js') }}"></script>
  <script src="{{ URL::asset('/asset/lib/jquery/jquery-migrate.min.js') }}"></script>
  <script src="{{ URL::asset('/asset/lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ URL::asset('/asset/lib/easing/easing.min.js') }}"></script>
  <script src="{{ URL::asset('/asset/lib/superfish/hoverIntent.js') }}"></script>
  <script src="{{ URL::asset('/asset/lib/superfish/superfish.min.js') }}"></script>
  <script src="{{ URL::asset('/asset/lib/wow/wow.min.js') }}"></script>
  <script src="{{ URL::asset('/asset/lib/waypoints/waypoints.min.js') }}"></script>
  <script src="{{ URL::asset('/asset/lib/counterup/counterup.min.js') }}"></script>
  <script src="{{ URL::asset('/asset/lib/owlcarousel/owl.carousel.min.js') }}"></script>
  <script src="{{ URL::asset('/asset/lib/isotope/isotope.pkgd.min.js') }}"></script>
  <script src="{{ URL::asset('/asset/lib/lightbox/js/lightbox.min.js') }}"></script>
  <script src="{{ URL::asset('/asset/lib/touchSwipe/jquery.touchSwipe.min.js') }}"></script>

  <!-- Template Main Javascript File -->
  <script src="{{ URL::asset('/asset/js/main.js') }}"></script>

</body>
</html>