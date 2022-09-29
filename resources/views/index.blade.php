@extends('navbar.main')

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
                            <h2>Lapangan Basket Terpopuler</h2>
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
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="single-product">
                        <div class="thumb">
                            <img src="img/lapangan.jpg" width="175px" height="120px" alt="">
                        </div>
                        <h4>Scudetto</h4>
                        <p>
                            Harga: Rp. 50.000/Jam
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
        </div>
    </section>

@endsection
