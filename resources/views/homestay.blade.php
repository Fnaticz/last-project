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
    <title>Corner - Pusat Sewa Lapangan</title>
@endsection

@section('content')

<!-- Banner Section --><!-- 
      <section class="banner" style="height: 85vh;">
         <div class="content">
            <div class="title">Latest Homestay</div>
            <div class="top-subtitle subtitle">Sora Homestay</div>
         </div>
      </section> -->

      <!-- News Section -->
      <section class="news" >
         <div class="container" >
            @foreach ($products as $product)
            <a href="{{ route('page.show', $product->id) }}">
         <div class="card" style="font-family: Inter;">
            <div class="card-header">
               <img src="/image/{{ $product->image }}"  alt="hotel" />
            </div>
            <div class="card-body">
               <span class="tag tag-purple">New</span>
               <h4>
                  {{ $product->nama }}
               </h4>
               <p>
                  {{ $product->subjek }}
               </p>
               <div class="user">
                  <img src="https://i.pinimg.com/originals/8b/16/7a/8b167af653c2399dd93b952a48740620.jpg" alt="user" />
                  <div class="user-info">
                     <h5>{{ $product->user->name }}</h5>
                     <small>2h ago</small>
                  </div>
               </div>
            </div>
         </div>
         </a>
         @endforeach
         <!-- <div class="card">
            <div class="card-header">
               <img src="../assets/img/h3.jpg" alt="hotel" />
            </div>
            <div class="card-body">
               <span class="tag tag-purple">New</span>
               <h4>
                  Glory Hotels to open 3 upscale resorts in Dubai
               </h4>
               <p>
                  By the 2nd of January, three premium resorts in Dubai will be officially open.
               </p>
               <div class="user">
                  <img src="https://i.pinimg.com/originals/8b/16/7a/8b167af653c2399dd93b952a48740620.jpg" alt="user" />
                  <div class="user-info">
                     <h5>Sahil Jain</h5>
                     <small>Yesterday</small>
                  </div>
               </div>
            </div>
         </div>
         <div class="card">
            <div class="card-header">
               <img src="../assets/img/h5.jpg" alt="city" />
            </div>
            <div class="card-body">
               <span class="tag tag-pink">The Best</span>
               <h4>
                  Best Interior Award
               </h4>
               <p>
                  Glory Hotels' Delhi branch has been named the hotel with the best interior design among all the hotels in the world.                
               </p>
               <div class="user">
                  <img src="https://i.pinimg.com/originals/8b/16/7a/8b167af653c2399dd93b952a48740620.jpg" alt="user" />
                  <div class="user-info">
                     <h5>Abhishek </h5>
                     <small>2d ago</small>
                  </div>
               </div>
            </div>
         </div> -->
      </section>

@endsection