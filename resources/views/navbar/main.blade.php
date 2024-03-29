<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

      <!-- Icons -->
      <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
      
      
      <!-- CSS -->
      <link rel="stylesheet" href="../assets/css/book.css">
      <link rel="stylesheet" href="../assets/css/map.css">
      <link rel="stylesheet" href="../assets/css/news.css">
      <link rel="stylesheet" href="../assets/css/dining.css">
      <link rel="stylesheet" href="../assets/css/styles.css">
      <link rel="stylesheet" href="../assets/css/membership.css">

      <!-- jQuery Owl Carousel -->
      <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

      <!-- Tailwind CDN -->
      <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

      <!-- Fonts -->
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

      <!-- Favicon -->
      <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon.ico">
      <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon.ico">
      
      <!-- Title -->
      <title>The Sora Homestay</title>
   </head>
   <body>

      <!-- Navigation Bar -->
      <header class="header" id="header" style="font-family: 'Inter'; background: rgb(255, 255, 255);">
         <nav class="nav container">
            <b><a href="/" class="nav__logo" style="font-family: 'Product Sans Bold'; letter-spacing: -.5px; font-size: 1.5rem;"> The Sora </a></b>
            <div class="nav__menu" id="nav-menu">
               <ul class="nav__list">
                  <li class="nav__item">
                     <a href="/" class="nav__link font-medium leading-6 text-black-600 transition duration-150 ease-out hover:text-gray-600">Home</a> 
                  </li>
                  <li class="nav__item">
                     <a href="#about" class="nav__link font-medium leading-6 text-black-600 transition duration-150 ease-out hover:text-gray-600">About</a> 
                  </li>
                  <li class="nav__item">
                     <a href="{{ url('homestay') }}" class="nav__link font-medium leading-6 text-black-600 transition duration-150 ease-out hover:text-gray-600">Homestay</a>
                  </li>
                  <li class="nav__item">
                     <a href="{{ url('membership') }}" class="nav__link font-medium leading-6 text-black-600 transition duration-150 ease-out hover:text-gray-600">Membership</a>
                  </li>
                  <li class="nav__item">
                     <a href="{{ url('map') }}" class="nav__link font-medium leading-6 text-black-600 transition duration-150 ease-out hover:text-gray-600">Map</a>
                  </li>
                  <li class="nav__item">
                     <a href="{{ url('dining') }}" class="nav__link font-medium leading-6 text-black-600 transition duration-150 ease-out hover:text-gray-600">Dining</a>
                  </li>
               </ul>
            </div>
            <div class="nav__toggle" id="nav-toggle">
               <i class='bx bx-grid-alt'></i>
            </div>
            <a href="/login" class="button button__header focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">Sign in</a>
         </nav>
      </header>

    @yield('content')

	<div class="footer-dark" style="font-family: Inter;">
         <footer>
            <div class="bscontainer">
               <div class="bsrow">
                  <div class="bscol-md-2 item">
                     <h3>Pages</h3>
                     <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="">Homestay</a></li>
                        <li><a href="">Login</a></li>
                        <li><a href="">Book hotel</a></li>
                     </ul>
                  </div>
                  <div class="bscol-md-2 item">
                     <h3>Know More</h3>
                     <ul>
                        <li><a href="">Membership</a></li>
                        <li><a href="">Our Team</a></li>
                        <li><a href="">News</a></li>
                     </ul>
                  </div>
                  <div class="bscol-md-2 item">
                     <h3>Other Details</h3>
                     <ul>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms of Service</a></li>
                     </ul>
                  </div>
                  <div class="bscol-md-6 item text">
                     <h3>The Sora</h3>
                     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco ut.</p>
                  </div>
                  <div class="social_links">
                     <a href="https://www.instagram.com/">
                     <span class="fa-stack fa-lg ig combo">
                        <i class="fa fa-circle fa-stack-2x circle"></i>
                        <i class="fa fa-instagram fa-stack-1x fa-inverse icon"></i>
                     </span>
                     </a>
                     <a href="https://www.facebook.com/">
                     <span class="fa-stack fa-lg fb combo">
                        <i class="fa fa-circle fa-stack-2x circle"></i>
                        <i class="fa fa-facebook fa-stack-1x fa-inverse icon"></i>
                     </span>
                     </a>
                     <a href="https://www.youtube.com/">
                     <span class="fa-stack fa-lg yt combo">
                        <i class="fa fa-circle fa-stack-2x circle"></i>
                        <i class="fa fa-youtube-play fa-stack-1x fa-inverse icon"></i>
                     </span>
                     </a>
                     <a href="https://www.twitter.com/">
                     <span class="fa-stack fa-lg tw combo">
                        <i class="fa fa-circle fa-stack-2x circle"></i>
                        <i class="fa fa-twitter fa-stack-1x fa-inverse icon"></i>
                     </span>
                     </a>
                     <a href="https://codepen.io">
                     <span class="fa-stack fa-lg gt combo">
                        <i class="fa fa-circle fa-stack-2x circle"></i>
                        <i class="fa fa-codepen fa-stack-1x fa-inverse icon"></i>
                     </span>
                     </a>
                     <a href="https://www.linkedin.com/">
                     <span class="fa-stack fa-lg tw combo">
                        <i class="fa fa-circle fa-stack-2x circle"></i>
                        <i class="fa fa-linkedin fa-stack-1x fa-inverse icon"></i>
                     </span>
                     </a>
                  </div>
               </div>
               <p class="copyright">The Sora © 2023</p>
            </div>
         </footer>
      </div>

	<script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
	<script src="{{ asset('js/popper.js') }}"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('js/stellar.js') }}"></script>
	<script src="{{ asset('vendors/lightbox/simpleLightbox.min.js') }}"></script>
	<script src="{{ asset('vendors/nice-select/js/jquery.nice-select.min.js') }}"></script>
	<script src="{{ asset('vendors/isotope/imagesloaded.pkgd.min.js') }}"></script>
	<script src="{{ asset('vendors/isotope/isotope-min.js') }}"></script>
	<script src="{{ asset('vendors/owl-carousel/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('js/jquery.ajaxchimp.min.js') }}"></script>
	<script src="{{ asset('vendors/counter-up/jquery.waypoints.min.js') }}"></script>
	<script src="{{ asset('vendors/flipclock/timer.js') }}"></script>
	<script src="{{ asset('vendors/counter-up/jquery.counterup.js') }}"></script>
	<script src="{{ asset('js/mail-script.js') }}"></script>
	<script src="{{ asset('js/theme.js') }}"></script>
	<script src="js/custom.js" type="text/javascript"></script>
	@yield('js')
</body>
</html>