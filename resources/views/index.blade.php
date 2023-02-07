@extends('navbar.main')

<!-- <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script type="text/javascript">
    
    $('.autoplay').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
});

</script> -->

@section('title')
    <title>The Sora</title>
@endsection

@section('content')
          <section class="banner">
         <div class="content">
            <div class="title">Sora Homestay</div>
            <div class="top-subtitle subtitle">Best Memories Start Here</div>
         </div>
         <div class="search-box">
            <div class="input-box">
               <p>Location</p>
               <input type="text" name="" id="" placeholder="input">
            </div>
            <div class="input-box">
               <p>Check-In Date</p>
               <input type="date" name="" id="" placeholder="01/01/2021">
            </div>
            <div class="input-box">
               <p>Guests</p>
               <input type="number" name="" id="" placeholder="100">
            </div>
            <div class="input-box">
               <br>
               <span class="inline-flex rounded-md shadow-sm">
               <a href="pages/book.html" style="padding: 12px 15px 12px 15px; font-size: 17px; font-family: Inter;" class="inline-flex items-center justify-center px-4 py-2 text-base font-medium leading-6 text-white whitespace-no-wrap bg-blue-600 border rounded-md shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
               Book now
               </a>
               </span>
            </div>
         </div>
      </section>

      <section class="text-gray-600 body-font" id="about" style="font-family: 'Inter'; margin-top: 12%;">
         <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center" style="">
            <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0">
               <img class="object-cover object-center rounded" alt="hero" src="https://q-xx.bstatic.com/xdata/images/hotel/max500/281381102.jpg?k=02da2a8ee4130d2feb424c87e8713932510f52eeb82d0d8728bdce1da341ef95&o=">
            </div>
            <div class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
               <h1 class="sec-head">About Us
               </h1>
               <p class="mb-8 leading-relaxed" style="width: auto;">Terletak di Banyuwangi, dibangun di pusat Pantai Timur Jawa, dikenal sebagai 'Kota Festival' karena banyak festival diadakan sepanjang tahun, RnJ Homestay sangat cocok untuk pelancong rekreasi. Homestay ini memiliki resepsionis 24 jam, layanan kamar, dan keamanan, area merokok yang ditunjuk, dan tempat parkir gratis. Selain itu, pengiriman makanan luar diperbolehkan untuk kenyamanan para tamu. Staf properti baik dan efisien membuat tinggal di homestay ini lebih menyenangkan dan menarik.

                  Tidak ada kekurangan hal-hal yang harus dilakukan atau makanan untuk dicoba di sekitar RnJ Homestay. Dalam jarak pendek dari properti adalah atraksi dan restoran yang dapat dinikmati wisatawan.</p>
               <div class="flex justify-center">
                  <span class="inline-flex rounded-md shadow-sm">
                  <a href="/about" class="button button__header focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">Know More</a>
                  </span>
               </div>
            </div>
         </div>
      </section>

      <!-- Hotels Section -->
      <section class="hotels" id="hotels">
         <h1 class="sec-head" id="hotels-head">Our Field</h1>
      </section>
      <div class="wrapper">
         <div class="carousel owl-carousel">
            <div class="card card-1">
            </div>
            <div class="card card-2">
            </div>
            <div class="card card-3">
            </div>
            <div class="card card-4">
            </div>
            <div class="card card-5">
            </div>
            <div class="card card-6">
            </div>
            <div class="card card-7">
            </div>
            <div class="card card-8">
            </div>
         </div>
      </div>

      <!-- Vision Section -->
      <div class='vision'>
         <div class='row'>
            <div class='column'>
               <div class='vision-column'>
                  <h1 class="sec-head">Our Vision</h1>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                     tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                     quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                     consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                     cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                     proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                  </p>
               </div>
            </div>
         </div>
      </div>

      <h1 class="sec-head" style="text-align: center; margin: 40px; margin-top: 100px;">Comment</h1>
      <div class="wrapper-rev">
         <div class="box">
            <i class='bx bxs-quote-left quote' ></i>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
               tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
               quis nostrud exercitation ullamco ut.</p>
            <div class="content">
               <div class="info">
                  <div class="name">Rafiy Ahmad</div>
                  <div class="stars">
                     <i class='bx bxs-star'></i>
                     <i class='bx bxs-star'></i>
                     <i class='bx bxs-star'></i>
                     <i class='bx bxs-star'></i>
                     <i class='bx bxs-star'></i>
                  </div>
               </div>
               <div class="image">
                  <img src="https://png.pngtree.com/png-vector/20190930/ourlarge/pngtree-hooded-computer-hacker-with-laptop-icon-png-image_1762179.jpg" alt="">
               </div>
            </div>
         </div>
         <div class="box">
            <i class='bx bxs-quote-left quote' ></i>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco ut.</p>
            <div class="content">
               <div class="info">
                  <div class="name">Ahmad Dani</div>
                  <div class="stars">
                     <i class='bx bxs-star'></i>
                     <i class='bx bxs-star'></i>
                     <i class='bx bxs-star'></i>
                     <i class='bx bxs-star'></i>
                     <i class='bx bx-star'></i>
                  </div>
               </div>
               <div class="image">
                  <img src="https://png.pngtree.com/png-vector/20190930/ourlarge/pngtree-hooded-computer-hacker-with-laptop-icon-png-image_1762179.jpg" alt="">
               </div>
            </div>
         </div>
         <div class="box">
            <i class='bx bxs-quote-left quote' ></i>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco ut.</p>
            <div class="content">
               <div class="info">
                  <div class="name">Zidan Putra</div>
                  <div class="stars">
                     <i class='bx bxs-star'></i>
                     <i class='bx bxs-star'></i>
                     <i class='bx bxs-star'></i>
                     <i class='bx bxs-star'></i>
                     <i class='bx bxs-star-half'></i>
                  </div>
               </div>
               <div class="image">
                  <img src="https://png.pngtree.com/png-vector/20190930/ourlarge/pngtree-hooded-computer-hacker-with-laptop-icon-png-image_1762179.jpg" alt="">
               </div>
            </div>
         </div>
      </div>
      

      <!-- Scroll Up Button -->
      <a href="#" class="scrollup" id="scroll-up">
        <i class='bx bx-up-arrow-alt scrollup__icon'></i>
      </a>

      <!-- Owl Carousel JS -->
      <script>
         $(".carousel").owlCarousel({
           margin: 20,
           loop: true,
           autoplay: true,
           autoplayTimeout: 2000,
           autoplayHoverPause: true,
           responsive: {
             0:{
               items:1,
               nav: false
             },
             600:{
               items:2,
               nav: false
             },
             1000:{
               items:3,
               nav: false
             }
           }
         });
      </script>

      <!-- JS -->
      <script src="assets/js/main.js"></script>

<!--     <div class="autoplay">
      <div>your content</div>
      <div>your content</div>
      <div>your content</div>
    </div> -->

@endsection
