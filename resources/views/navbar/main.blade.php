<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="img/favicon.png" type="image/png">
    
    @yield('title')
    
	<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
	<link rel="stylesheet" href="{{ asset('vendors/linericon/style.css') }}">
	<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('vendors/owl-carousel/owl.carousel.min.css') }}">
	<link rel="stylesheet" href="{{ asset('vendors/lightbox/simpleLightbox.css') }}">
	<link rel="stylesheet" href="{{ asset('vendors/nice-select/css/nice-select.css') }}">
	<link rel="stylesheet" href="{{ asset('vendors/animate-css/animate.css') }}">
	<link rel="stylesheet" href="{{ asset('vendors/jquery-ui/jquery-ui.css') }}">
	{{-- <link rel="stylesheet" href="{{ asset('css/fontawesome.min.css') }}"> --}}
	
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

    <link rel="stylesheet" href="{{ URL::asset('css/main.css')}}">

	<style>
		.menu-sidebar-area {
			list-style-type:none; padding-left: 0; font-size: 15pt;
		}
		.menu-sidebar-area > li {
			margin:0 0 10px 0;
			list-style-position:inside;
			border-bottom: 1px solid black;
		}
		.menu-sidebar-area > li > a {
			color: black
		}
	</style>
	@yield('css')
</head>

<body>
	<header class="header_area">
		<div class="top_menu row m0">
			<div class="container-fluid">
				<div class="float-left">
					<p>Call Us: +62 8</p>
				</div>
				<div class="float-right">
					<ul class="right_side">
						@auth
							<li class="nav-item submenu dropdown">
						        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">My Account</a>
						        <ul class="dropdown-menu">
						            <form action="/logout" method="post">
				                      @csrf
				                      <button type="submit" class="dropdown-item text-center">ログアウト</button>
				                    </form>
						        </ul>
						    </li>
						@else
							<li><a href="{{ route('login') }}">Login</a></li>
							<li><a href="{{ route('login') }}">My Account</a></li>
						@endauth
							<li><a href="contact.html">Contact Us</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container-fluid">
                    <div id="logo">
              		<a href="/" style="color:black; font-size:20px;"><img src="img/ball.png" width="50px" height="50px" alt="" title="Corner">Corner</a>
            		</div>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
					 aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<div class="row w-100">
							<div class="col-lg-7 pr-0">
								@include('navbar.menu')
							</div>
													<div class="col-lg-5">
								<ul class="nav navbar-nav navbar-right right_nav pull-right">
									<hr>
									<li class="nav-item">
										<a href="#" class="icons">
											<i class="fa fa-search" aria-hidden="true"></i>
										</a>
									</li>
									<hr>
									<li class="nav-item">
										<a href="/dashboard" class="icons">
											<i class="fa fa-user" aria-hidden="true"></i>
										</a>
									</li>
									<hr>
									<li class="nav-item">
										<a href="#" class="icons">
											<i class="fa fa-heart-o" aria-hidden="true"></i>
										</a>
									</li>
									<hr>
									<li class="nav-item">
										<a href="{{ url('cart') }}" class="icons">
											<i class="lnr lnr lnr-cart"></i>
										</a>
									</li>
									<hr>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</nav>
		</div>
	</header>

    @yield('content')

	<footer class="footer-area section_gap">
		<div class="container">
			<div class="row footer-bottom d-flex justify-content-between align-items-center">
				<p class="col-lg-12 footer-text text-center">
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> 
                    All rights reserved | This template is made with 
                    <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://google.com" target="_blank">Nyee.</a>
				</p>
			</div>
		</div>
	</footer>

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