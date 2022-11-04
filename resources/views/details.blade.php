@extends('navbar.main')



<?php 
function build_calendar($month, $year){
  $daysOfWeek= array('Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday');
  $firstDayOfMonth =  mktime(0,0,0,$month, 1 , $year);
  $numberDays = date('t', $firstDayOfMonth);
  $dateComponents =  getDate($firstDayOfMonth);
  $monthName = $dateComponents['month'];
  $dayOfWeek = $dateComponents['wday'];
  $dateToday = date('Y-m-d');
  
  $prev_month = date('m', mktime(0,0,0,$month-1, 1 ,$year));
  $prev_year = date('Y', mktime(0,0,0,$month-1, 1, $year));
  $next_month = date('m', mktime(0,0,0, $month+1, 1 , $year));
  $next_year = date('Y', mktime(0,0,0,$month+1,1, $year));
  $calendar = "<center><h2>$monthName $year</h2>";
  $calendar.= "<a class='btn btn-primary btn-sm'href='?month=".$prev_month."&year=".$prev_year."'>Prev Month</a>";
  $calendar.= "<a class='btn btn-primary btn-sm'href='?month=".date('m')."&year=".date('Y')."'>Current Month</a>";
  $calendar.= "<a class='btn btn-primary btn-sm'href='?month=".$next_month."&year=$next_year'>Next Month</a></center>";
  $calendar.= "<br><table class='table table-bordered'>";
  $calendar.= "<tr>";
    foreach ($daysOfWeek as $day) {
     $calendar.="<th class='header'>$day</th>";
    }

    $calendar.="</tr><tr>";
    $currentDay = 1;
    if ($dayOfWeek>0) {
      for ($k=0; $k <$dayOfWeek ; $k++) { 
        $calendar.="<td class='empty'></td>";
      }
    }

    $month = str_pad($month,2,"0",STR_PAD_LEFT);
    while ($currentDay <= $numberDays) {
      if($dayOfWeek ==7){
        $dayOfWeek = 0;
        $calendar.="</tr><tr>";
      }

      $currentDayRel = str_pad($currentDay,2,"0", STR_PAD_LEFT);
      $date = "$year-$month-$currentDayRel";
      $dayName = strtolower(date('I',strtotime($date)));
      $today = $date==date('Y-m-d') ? 'today' : '' ;
      $calendar.="<td class='$today'><h4>$currentDayRel</h4></td>";
      $currentDay++;
      $dayOfWeek++;
    }

    if ($dayOfWeek<7) {
      $remainingDays= 7 - $dayOfWeek;
      for ($i=0; $i <$remainingDays ; $i++) { 
        $calendar.="<td class='empty'></td>";
      }
    }

    $calendar.="</tr></table>";


  return $calendar;

}

?>

@section('content')
<!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


<!DOCTYPE html>
<html lang="en">
  <head>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Detail Lapangan</title>
    <!-- <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">

<style type="text/css">
    	

/*****************globals*************/
body {
  font-family: 'open sans';
  background: #C0C0C0;
  overflow-x: hidden; }

img {
  max-width: 100%; }

.preview {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -webkit-flex-direction: column;
      -ms-flex-direction: column;
          flex-direction: column; }
  @media screen and (max-width: 996px) {
    .preview {
      margin-bottom: 20px; } }

.preview-pic {
  -webkit-box-flex: 1;
  -webkit-flex-grow: 1;
      -ms-flex-positive: 1;
          flex-grow: 1; }

.preview-thumbnail.nav-tabs {
  border: none;
  margin-top: 15px; }
  .preview-thumbnail.nav-tabs li {
    width: 18%;
    margin-right: 2.5%; }
    .preview-thumbnail.nav-tabs li img {
      max-width: 100%;
      display: block; }
    .preview-thumbnail.nav-tabs li a {
      padding: 0;
      margin: 0; }
    .preview-thumbnail.nav-tabs li:last-of-type {
      margin-right: 0; }

.tab-content {
  overflow: hidden; }
  .tab-content img {
    width: 100%;
    -webkit-animation-name: opacity;
            animation-name: opacity;
    -webkit-animation-duration: .3s;
            animation-duration: .3s; }

.card {
  margin-top: 50px;
  background: #eee;
  padding: 3em;
  line-height: 1.5em; }

@media screen and (min-width: 997px) {
  .wrapper {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex; } }

.details {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -webkit-flex-direction: column;
      -ms-flex-direction: column;
          flex-direction: column; }

.colors {
  -webkit-box-flex: 1;
  -webkit-flex-grow: 1;
      -ms-flex-positive: 1;
          flex-grow: 1; }

.product-title, .price, .sizes, .colors {
  text-transform: UPPERCASE;
  font-weight: bold; }

.checked, .price span {
  color: #ff9f1a; }

.product-title, .rating, .product-description, .price, .vote, .sizes {
  margin-bottom: 15px; }

.product-title {
  margin-top: 0; }

.size {
  margin-right: 10px; }
  .size:first-of-type {
    margin-left: 40px; }

.color {
  display: inline-block;
  vertical-align: middle;
  margin-right: 10px;
  height: 2em;
  width: 2em;
  border-radius: 2px; }
  .color:first-of-type {
    margin-left: 20px; }

.add-to-cart, .like {
  background: #ff9f1a;
  padding: 1.2em 1.5em;
  border: none;
  text-transform: UPPERCASE;
  font-weight: bold;
  color: #fff;
  -webkit-transition: background .3s ease;
          transition: background .3s ease; }
  .add-to-cart:hover, .like:hover {
    background: #b36800;
    color: #fff; }

.not-available {
  text-align: center;
  line-height: 2em; }
  .not-available:before {
    font-family: fontawesome;
    content: "\f00d";
    color: #fff; }

.orange {
  background: #ff9f1a; }

.green {
  background: #85ad00; }

.blue {
  background: #0076ad; }

.tooltip-inner {
  padding: 1.3em; }

@-webkit-keyframes opacity {
  0% {
    opacity: 0;
    -webkit-transform: scale(3);
            transform: scale(3); }
  100% {
    opacity: 1;
    -webkit-transform: scale(1);
            transform: scale(1); } }

@keyframes opacity {
  0% {
    opacity: 0;
    -webkit-transform: scale(3);
            transform: scale(3); }
  100% {
    opacity: 1;
    -webkit-transform: scale(1);
            transform: scale(1); } }


    @media only screen and (max-width:760px),
    (min-device-width:802px) and (max-device-width:1020px){
    table,
    thead,
    tbody,
    th,
    td,
    tr{
      display: block;

    }

    .empty{
      display: none;
    }

    th{
      position: absolute;
      top: -9999px;
      left: -9999px;
    }

    tr{
      border: 1px solid #ccc;
    }

    .u{
      border: 3px;
    }

    td{
      border:none;
      border-bottom: 1px solid #eee;
      position: relative;
      padding-left: 50%;
    }

    td:nth-last-of-type(1):before{
      content: "Sunday";
    }

    td:nth-last-of-type(2):before{
      content: "Monday";
    }

    td:nth-last-of-type(3):before{
      content: "Tuesday";
    }

    td:nth-last-of-type(4):before{
      content: "Wednesday";
    }

    td:nth-last-of-type(5):before{
      content: "Thursday";
    }

    td:nth-last-of-type(6):before{
      content: "Friday";
    }

    td:nth-last-of-type(7):before{
      content: "Saturday";
    }

    
  }

  @media only screen and (min-device-width:320px) and (max-device-width:480px){
    body{
      padding: 0;
      margin: 0;

    }
  }

  @media only screen and (min-device-width:802px) and (max-device-width:1020px){
    body{
      width: 495px;
    }
  }

  @media (min-width:641px){
    table{
      table-layout: fixed;
    }

    td{
      width: 33%;
    }
  }
  .row{
      margin-top: 20px;
    }

    .today {
      background-color: red;
    }
/*# sourceMappingURL=style.css.map */

    </style>

  </head>

  <br><br>

  <body>
	
	<div class="container">
		<div class="card">
			<div class="container-fliud">
				<div class="wrapper row">
					<div class="preview col-md-6">
						
						<div class="preview-pic tab-content">
						  <div class="tab-pane active" id="pic-1"><img src="http://placekitten.com/400/252" /></div>
						  <div class="tab-pane" id="pic-2"><img src="http://placekitten.com/400/252" /></div>
						  <div class="tab-pane" id="pic-3"><img src="http://placekitten.com/400/252" /></div>
						  <div class="tab-pane" id="pic-4"><img src="http://placekitten.com/400/252" /></div>
						  <div class="tab-pane" id="pic-5"><img src="http://placekitten.com/400/252" /></div>
						</div>
						<ul class="preview-thumbnail nav nav-tabs">
						  <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li>
						  <li><a data-target="#pic-2" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li>
						  <li><a data-target="#pic-3" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li>
						  <li><a data-target="#pic-4" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li>
						  <li><a data-target="#pic-5" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li>
						</ul>
						
					</div>
					<div class="details col-md-6">
						<h3 class="product-title">Scudetto</h3>
						<div class="rating">
							<div class="stars">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
							</div>
							<span class="review-no">41 reviews</span>
						</div>
						<p class="product-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						<h4 class="price">Harga: <span>Rp. 150.000 /Jam</span></h4>
						<p class="vote"><strong>91%</strong> Menyukainya! <strong>(87 votes)</strong></p>
						<div class="action">
							<!-- <form action="/add-to-cart" method="post">
                      		@csrf
							<button class="add-to-cart btn btn-default" href="" type="button">add to cart</button>
							<button class="like btn btn-default" type="button"><span class="fa fa-heart"></span></button>
							</form> -->
							<a href="/cart">	
							<button class="add-to-cart btn btn-default" href="/cart" type="button">add to cart</button>
							</a>
							<button class="like btn btn-default" type="button"><span class="fa fa-heart"></span></button>
						</div>
					</div>
				</div>
        <br><br>
        <?php
        $dateComponents = getDate();
        if (isset($_GET['month']) && isset($_GET['year'])) {
          $month = $_GET['month'];
          $year = $_GET['year'];
        }else{
          $month = $dateComponents['mon'];
          $year = $dateComponents['year'];
        }
    
        echo build_calendar($month, $year);
        ?>
			</div>
		</div>
    

	</div>
  </body>
</html>


@endsection