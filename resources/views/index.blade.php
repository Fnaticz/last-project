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
    <section class="home_banner_area">
        <div class="overlay"></div>
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content row">
                    <div class="offset-lg-2 col-lg-8">
                        <h3>Sewa Lapangan
                            <br />Online</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                            aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                        <a class="white_bg_btn" href="#">View Collection</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="hot_deals_area section_gap">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="hot_deal_box">
                        <img class="img-fluid" src="{{ asset('img/product/hot_deals/deal1.jpg') }}" alt="">
                        <div class="content">
                            <h2>Lapangan Futsal Terpopuler</h2>
                        </div>
                        <a class="hot_deal_link" href="#"></a>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="hot_deal_box">
                        <img class="img-fluid" src="{{ asset('img/product/hot_deals/deal1.jpg') }}" alt="">
                        <div class="content">
                            <h2 style="">Lapangan Basket Terpopuler</h1>
                        </div>
                        <a class="hot_deal_link" href="#"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="product-area section-gap">
        <div class="container">
            <div class="row d-flex justify-content-center">
              <div class="main_title">
                <h2>Lapangan Terbaru</h2>
                <p>Lapangan yang kami rekomendasikan untuk anda</p>
              </div>
            </div>
            @foreach ($products as $product)
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="single-product">
                        <div class="thumb">
                            <img src="{{ $product->image }}" width="180px" height="120px" alt="">
                        </div>
                        <h4>{{ $product->nama }}</h4>
                        <p>
                            Harga: Rp. {{ $product->harga }}/Jam
                        </p>
                        <p>
                            Sepatu: 
                        </p>
                        <p>
                            Bola:
                        </p>
                        <a href="/details" class="primary-btn text-uppercase">View Details</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>

<!--     <div class="autoplay">
      <div>your content</div>
      <div>your content</div>
      <div>your content</div>
    </div> -->

@endsection
