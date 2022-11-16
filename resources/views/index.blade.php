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
                        <strong><h3>COR<span>NER </span></strong>
                         <br>Sewa Lapangan Online</h3>
                        <p> Selamat datang di Website Booking Lapangan Online, Booking lapangan lebih mudah dari rumah saja</p>
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
                        <img class="img-fluid" src="{{ asset('img/football.png') }}" alt="">
                        <div class="content">
                            <h2 style="color:#fff;">Lapangan Futsal Terpopuler</h2>
                        </div>
                        <a class="hot_deal_link" href="#"></a>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="hot_deal_box">
                        <img class="img-fluid" src="{{ asset('img/basket.png') }}" alt="">
                        <div class="content">
                            <h2 style="color:#fff;">Lapangan Basket Terpopuler</h1>
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
                <h2><span style="font-color:f1610e ">Lapangan</span> Terbaru</h2>
                <p>Lapangan yang kami rekomendasikan untuk anda</p>
              </div>
            </div>
            <div class="row">
            @foreach ($products as $product)
                <div class="col-lg-3 col-md-6">
                    <div class="single-product">
                        <div class="thumb">
                            <img src="/image/{{ $product->image }}" width="180px" height="120px" alt="">
                        </div>
                        <h4>{{ $product->nama }}</h4>
                        <p>
                            Harga: Rp. {{ $product->harga }}/Jam
                        </p>
                        <p>
                            Alas: {{ $product->alas }}
                        </p>
                        <p>
                            
                        </p>
                        <a href="/details" class="primary-btn text-uppercase">View Details</a>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
    </section>


    <section>
        <div class="container">
                <div class="main_title">
                  <h2>Latest <span style="font-color:f1610e "> Match</span></h2>
                  <p>Skor Tournament Futsal Hari ini</p>
                </div>
            <div class="match">
                <div class="match-header">
                    <div class="match-status">Live</div>
                    <div class="match-tournament"><img src="img/futsal/logo3.png" />School Premier League</div>
                    <div class="match-actions">
                        <button class="btn-icon"><i class="fa fa-star-o"></i></button>
                        <button class="btn-icon"><i class="fa fa-bell-o"></i></button>
                    </div>
                </div>
                <div class="match-content">
                    <div class="column">
                        <div class="team team--home">
                            <div class="team-logo">
                                
                                <img src="img/futsal/logo1.png" />
                            </div>
                            <h2 class="team-name">Esemkasa</h2>
                        </div>
                    </div>
                    <div class="column">
                        <div class="match-details">
                            <div class="match-date">
                                3 May at <strong>17:30</strong>
                            </div>
                            <div class="match-score">
                                <span class="match-score-number match-score-number--leading">3</span>
                                <span class="match-score-divider">:</span>
                                <span class="match-score-number">1</span>
                            </div>
                            <div class="match-time-lapsed">
                                72'
                            </div>
                            <div class="match-referee">
                                Tournament: <strong>Futsal</strong>
                            </div>
                            <div class="match-bet-options">
                                <button class="match-bet-option">1.48</button>
                                <button class="match-bet-option">7.84</button>
                                <button class="match-bet-option">3.24</button>
                            </div>
                           
                        </div>
                    </div>
                    <div class="column">
                        <div class="team team--away">
                            <div class="team-logo">
                        
                                <img src="img/futsal/logo2.png" />
                            </div>
                            <h2 class="team-name"> Sadama</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!--     <div class="autoplay">
      <div>your content</div>
      <div>your content</div>
      <div>your content</div>
    </div> -->

@endsection
