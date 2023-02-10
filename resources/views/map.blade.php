<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

      <!-- Icons -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

      <!-- CSS -->
      <link rel="stylesheet" href="../assets/css/map.css">
      <link rel="stylesheet" href="../assets/css/styles.css">

      <!-- Fonts -->
      <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

      <!-- Tailwind CDN -->
      <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

      <!-- Favicon -->
      <link rel="icon" type="image/png" sizes="32x32" href="../assets/img/favicon.ico">
      <link rel="icon" type="image/png" sizes="16x16" href="../assets/img/favicon.ico">

      <!-- Title -->
      <title>Glory Hotels | Hotels</title>
   </head>
   <body>
      <!-- Navigation Bar -->
      <header class="header" id="header" style="font-family: 'Inter'; background: rgb(255, 255, 255);">
         <nav class="nav container">
            <b><a href="../index.html" class="nav__logo" style="font-family: 'Product Sans Bold'; letter-spacing: -.5px; font-size: 1.5rem;"> The Glory Hotels </a></b>
            <div class="nav__menu" id="nav-menu">
               <ul class="nav__list">
                  <li class="nav__item">
                     <a href="../index.html" class="nav__link font-medium leading-6 text-black-600 transition duration-150 ease-out hover:text-gray-600">Home</a> 
                  </li>
                  <li class="nav__item">
                     <a href="../index.html#about" class="nav__link font-medium leading-6 text-black-600 transition duration-150 ease-out hover:text-gray-600">About</a> 
                  </li>
                  <li class="nav__item">
                     <a href="map.html" class="nav__link font-medium leading-6 text-black-600 transition duration-150 ease-out hover:text-gray-600">Hotels</a>
                  </li>
                  <li class="nav__item">
                     <a href="covid.html" class="nav__link font-medium leading-6 text-black-600 transition duration-150 ease-out hover:text-gray-600">COVID</a>
                  </li>
                  <li class="nav__item">
                     <a href="donate.html" class="nav__link font-medium leading-6 text-black-600 transition duration-150 ease-out hover:text-gray-600">Donate</a>
                  </li>
                  <li class="nav__item">
                     <a href="membership.html" class="nav__link font-medium leading-6 text-black-600 transition duration-150 ease-out hover:text-gray-600">Membership</a>
                  </li>
                  <li class="nav__item">
                     <a href="dining.html" class="nav__link font-medium leading-6 text-black-600 transition duration-150 ease-out hover:text-gray-600">Dining</a>
                  </li>
                  <li class="nav__item">
                     <a href="news.html" class="nav__link font-medium leading-6 text-black-600 transition duration-150 ease-out hover:text-gray-600">News</a>
                  </li>
               </ul>
            </div>
            <div class="nav__toggle" id="nav-toggle">
               <i class='bx bx-grid-alt'></i>
            </div>
            <a href="login.html" class="button button__header focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">Sign in</a>
         </nav>
      </header>

      <!-- Banner Section -->
      <section class="banner" style="height: 85vh;">
         <div class="content">
            <div class="title">Our Hotels</div>
            <div class="top-subtitle subtitle">The Glory Hotels</div>
         </div>
      </section>

      <!-- Hotels Map -->
      <h1 class="sec-head" style="text-align: center; margin-top: 100px;">The Best Hotels</h1>
      <div style="text-align: justify; font-family: Inter; font-size: 18px; width: 60%; margin: auto; margin-top: 10px;">We have over 50 high-quality hotels and resorts around the world. Our hotels are the ultimate location for individuals who enjoy a vibrant and upmarket lifestyle, thanks to their modern design that combines elegance in form and function. Glory Hotels allows you to find more harmony every time you go with real hospitality, honest service, and clean decor.
      </div>
      <div class="distribution-map">
         <img src="../assets/img/map.svg">
         <button class="map-point" style="top:15%;left:23%">
            <div class="content">
               <div class="centered-y">
                  <h2 class="hotel-name">The Glory Hotel</h2>
                  <p><b>Location: </b>Canada</p>
               </div>
            </div>
         </button>
         <button class="map-point" style="top:37%;left:50%">
            <div class="content">
               <div class="centered-y">
                  <h2 class="hotel-name">The Glory Hotel</h2>
                  <p><b>Location: </b>Libya</p>
               </div>
            </div>
         </button>
         <button class="map-point" style="top:76%;left:82.5%">
            <div class="content">
               <div class="centered-y">
                  <h2 class="hotel-name">The Glory Hotel</h2>
                  <p><b>Location: </b>Australia</p>
               </div>
            </div>
         </button>
         <button class="map-point" style="top:35%;left:16%">
            <div class="content">
               <div class="centered-y">
                  <h2 class="hotel-name">The Glory Hotel</h2>
                  <p><b>Location: </b>Mexico</p>
               </div>
            </div>
         </button>
         <button class="map-point" style="top:60%;left:53%">
            <div class="content">
               <div class="centered-y">
                  <h2 class="hotel-name">The Glory Hotel</h2>
                  <p><b>Location: </b>Congo</p>
               </div>
            </div>
         </button>
         <button class="map-point" style="top:45%;left:67%">
            <div class="content">
               <div class="centered-y">
                  <h2 class="hotel-name">The Glory Hotel</h2>
                  <p><b>Location: </b>Telengana, India</p>
               </div>
            </div>
         </button>
         <button class="map-point" style="top:38%;left:66.7%">
            <div class="content">
               <div class="centered-y">
                  <h2 class="hotel-name">The Glory Hotel</h2>
                  <p><b>Location: </b>Delhi, India</p>
               </div>
            </div>
         </button>
         <button class="map-point" style="top:25%;left:70%">
            <div class="content">
               <div class="centered-y">
                  <h2 class="hotel-name">The Glory Hotel</h2>
                  <p><b>Location: </b>Mongolia</p>
               </div>
            </div>
         </button>
         <button class="map-point" style="top:77%;left:28%">
            <div class="content">
               <div class="centered-y">
                  <h2 class="hotel-name">The Glory Hotel</h2>
                  <p><b>Location: </b>Argentina</p>
               </div>
            </div>
         </button>
         <button class="map-point" style="top:30%;left:60%">
            <div class="content">
               <div class="centered-y">
                  <h2 class="hotel-name">The Glory Hotel</h2>
                  <p><b>Location: </b>Turkmenistan</p>
               </div>
            </div>
         </button>
         <button class="map-point" style="top:65%;left:30%">
            <div class="content">
               <div class="centered-y">
                  <h2 class="hotel-name">The Glory Hotel</h2>
                  <p> <b>Location: </b>Brazil </p>
               </div>
            </div>
         </button>
      </div>
      
      <!-- Footer -->
      <div class="footer-dark" style="font-family: Inter;">
        <footer>
           <div class="bscontainer">
              <div class="bsrow">
                 <div class="bscol-md-2 item">
                    <h3>Pages</h3>
                    <ul>
                       <li><a href="../index.html">Home</a></li>
                       <li><a href="map.html">Hotels</a></li>
                       <li><a href="login.html">Login</a></li>
                       <li><a href="book.html">Book Hotel</a></li>
                    </ul>
                 </div>
                 <div class="bscol-md-2 item">
                    <h3>Know More</h3>
                    <ul>
                       <li><a href="membership.html">Membership</a></li>
                       <li><a href="team.html">Our Team</a></li>
                       <li><a href="news.html">News</a></li>
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
                    <h3>The Glory Hotels</h3>
                    <p>Over the last 25 years, the Glory Hotels organisation has been known for dependably providing the best Indian hospitality experience with more than 50 hotels and resorts worldwide.</p>
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
              <p class="copyright">The Glory Hotels © 2021</p>
           </div>
        </footer>
     </div>
     
     <!-- JS -->
     <script src="../assets/js/main.js"></script>
  </body>
</html>