<<<<<<< HEAD
<<<<<<< HEAD

@extends('navbar.main')


 <?php
=======
@extends('navbar.main')


<?php



>>>>>>> 22f7eb0968fdf2c4e888279b71e8c0255b0baaf7
=======
{{-- <?php
>>>>>>> 8eb54b7 (fix)
function build_calendar($month, $year) {
    $mysqli = new mysqli('localhost', 'root', '', 'last_project');
    $stmt = $mysqli->prepare("select * from bookings where MONTH(tglmain) = ? AND YEAR(tglmain) = ?");
    $stmt->bind_param('ss', $month, $year);
    $bookings = array();
    if($stmt->execute()){
        $result = $stmt->get_result();
        if($result->num_rows>0){
            while($row = $result->fetch_assoc()){
                $bookings[] = $row['tglmain'];
            }
            
            $stmt->close();
        }
    }
    
    
    
     $daysOfWeek = array('Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday');
     
     $firstDayOfMonth = mktime(0,0,0,$month,1,$year);
     
     $numberDays = date('t',$firstDayOfMonth);
   
     $dateComponents = getdate($firstDayOfMonth);
    
     $monthName = $dateComponents['month'];
    
     $dayOfWeek = $dateComponents['wday'];
     
    $datetoday = date('Y-m-d');
    
    
    
    $calendar = "<table class='table table-bordered'>";
    $calendar .= "<center><h2>$monthName $year</h2>";
    $calendar.= "<a class='btn btn-sm btn-primary' href='?month=".date('m', mktime(0, 0, 0, $month-1, 1, $year))."&year=".date('Y', mktime(0, 0, 0, $month-1, 1, $year))."'>Previous Month</a> ";
    
    $calendar.= " <a class='btn btn-sm btn-primary' href='?month=".date('m')."&year=".date('Y')."'>Current Month</a> ";
    
    $calendar.= "<a class='btn btn-sm btn-primary' href='?month=".date('m', mktime(0, 0, 0, $month+1, 1, $year))."&year=".date('Y', mktime(0, 0, 0, $month+1, 1, $year))."'>Next Month</a></center><br>";
    
    
        
      $calendar .= "<tr>";
     // Create the calendar headers
     foreach($daysOfWeek as $day) {
          $calendar .= "<th  class='header'>$day</th>";
     } 
     // Create the rest of the calendar
     // Initiate the day counter, starting with the 1st.
     $currentDay = 1;
     $calendar .= "</tr><tr>";
     // The variable $dayOfWeek is used to
     // ensure that the calendar
     // display consists of exactly 7 columns.
     if ($dayOfWeek > 0) { 
         for($k=0;$k<$dayOfWeek;$k++){
                $calendar .= "<td  class='empty'></td>"; 
         }
     }
    
     
     $month = str_pad($month, 2, "0", STR_PAD_LEFT);
  
     while ($currentDay <= $numberDays) {
          // Seventh column (Saturday) reached. Start a new row.
          if ($dayOfWeek == 7) {
               $dayOfWeek = 0;
               $calendar .= "</tr><tr>";
          }
          
          $currentDayRel = str_pad($currentDay, 2, "0", STR_PAD_LEFT);
          $date = "$year-$month-$currentDayRel";
          
            $dayname = strtolower(date('l', strtotime($date)));
            $eventNum = 0;
            $today = $date==date('Y-m-d')? "today" : "";
         if($date<date('Y-m-d')){
             $calendar.="<td><h4>$currentDay</h4> <button class='btn btn-danger btn-sml'>N/A</button>";
         }elseif(in_array($date, $bookings)){
             $calendar.="<td class='$today'><h4>$currentDay</h4> <button class='btn btn-danger btn-sml'>Already Booked</button>";
         }else{
             $calendar.="<td class='$today'><h4>$currentDay</h4> <a href='/timebook?date=".$date."' class='btn btn-success btn-sml'>Book</a>";
         }
         
        //  {{url('book' $date->id )}}
            
        //  book.blade.php?date=".$date."
            
          $calendar .="</td>";
          // Increment counters
 
          $currentDay++;
          $dayOfWeek++;
     }
     
     
     // Complete the row of the last week in month, if necessary
     if ($dayOfWeek != 7) { 
     
          $remainingDays = 7 - $dayOfWeek;
            for($l=0;$l<$remainingDays;$l++){
                $calendar .= "<td class='empty'></td>"; 
         }
     }
     
     $calendar .= "</tr>";
     $calendar .= "</table>";
     echo $calendar;
}
<<<<<<< HEAD

?> 


<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
  <head>

=======


@section('content')

<!DOCTYPE html>
<html lang="en">
  <head>
>>>>>>> 22f7eb0968fdf2c4e888279b71e8c0255b0baaf7
    
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Detail Kamar</title>
    <!-- <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">

<style type="text/css">

/* .row > * {
    flex-shrink: 0;
    width: 100%;
    max-width: 100%;
    padding-right: calc(var(--bs-gutter-x) / 2);
    padding-left: calc(var(--bs-gutter-x) / 2);
    margin-top: var(--bs-gutter-y);
} */

    .card-booking {
    box-shadow: 2px 2px 10px rgb(0 0 0 / 10%);
    border-radius: 10px;
}

.card-booking .rate-title {
    font-weight: bold;
    font-size: 13px !important;
}

h5 {
    display: block;
    font-size: 0.83em;
    margin-block-start: 1.67em;
    margin-block-end: 1.67em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    font-weight: bold;
}

.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #ffffff;
    background-clip: border-box;
    border: 1px solid rgba(0, 0, 0, 0.125);
    border-radius: 0.25rem;
}
    .btn-pr{
      padding: 8px 8px;
      font-size: 10px;
      border-radius: 7px;
      gap: 2px;
      
    }

    .card-body {
    flex: 1 1 auto;
    padding: 1rem 1rem;
}

    .dropdown-divider {
    height: 0;
    margin: 0.5rem 0;
    overflow: hidden;
    border-top: 1px solid rgba(0, 0, 0, 0.15);
}

    .btn-sml {
    padding: 5px 5px;
    font-size: 9px;
    border-radius: 4px;
    /* color: white; */
    margin-top: 5px;
  
  }

  .table-bordered td, .table-bordered th{
    border: 1px solid#b9b9b9;
  }
  /* .table-bordered{
    border: #0076ad;
  } */

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
      background-color: rgb(242, 217, 182);
    }
/*# sourceMappingURL=style.css.map */

    </style>

<<<<<<< HEAD

=======
>>>>>>> 22f7eb0968fdf2c4e888279b71e8c0255b0baaf7
=======
    
?> --}}
<!DOCTYPE html>
<html lang="en">
  <head>
>>>>>>> 8eb54b7 (fix)
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="32x32"
      href="../images/favicon-32x32.png"
    />
    <link rel="stylesheet" href="../output.css" />
<<<<<<< HEAD
    <title>Detail Homestay</title>
<<<<<<< HEAD

=======
>>>>>>> 22f7eb0968fdf2c4e888279b71e8c0255b0baaf7
=======
    <title>Detail {{ $product->nama }}</title>
>>>>>>> 8eb54b7 (fix)
  </head>
  <body class="overflow-x-hidden lg:overflow-hidden">
    <!-- Contents -->
    <div class="container mx-auto font-kumbh text-base">
      <!-- Main Content -->
      <main class="w-full flex flex-col lg:flex-row">
        <!-- Gallery -->
        <section
          class="h-fit flex-col gap-8 mt-16 sm:flex sm:flex-row sm:gap-4 sm:h-full sm:mt-24 sm:mx-2 md:gap-8 md:mx-4 lg:flex-col lg:mx-0 lg:mt-36"
        >
          <picture
            class="relative flex items-center bg-orange sm:bg-transparent"
          >
            <button
              class="bg-white w-10 h-10 flex items-center justify-center pr-1 rounded-full absolute left-6 z-10 sm:hidden"
              id="previous-mobile"
            >
              <svg
                width="12"
                height="18"
                xmlns="http://www.w3.org/2000/svg"
                id="previous-mobile"
              >
                <path
                  d="M11 1 3 9l8 8"
                  stroke="#1D2026"
                  stroke-width="3"
                  fill="none"
                  fill-rule="evenodd"
                  id="previous-mobile"
                />
              </svg>
            </button>
            <img
              src="../image/{{ $product->image}}"
              alt="Homestay"
              class="block sm:rounded-xl xl:w-[70%] xl:rounded-xl m-auto pointer-events-none transition duration-300 lg:w-3/4 lg:pointer-events-auto lg:cursor-pointer lg:hover:shadow-xl"
              id="hero"
            />
            <button
              class="bg-white w-10 h-10 flex items-center justify-center pl-1 rounded-full absolute right-6 z-10 sm:hidden"
              id="next-mobile"
            >
              <svg
                width="13"
                height="18"
                xmlns="http://www.w3.org/2000/svg"
                id="next-mobile"
              >
                <path
                  d="m2 1 8 8-8 8"
                  stroke="#1D2026"
                  stroke-width="3"
                  fill="none"
                  fill-rule="evenodd"
                  id="next-mobile"
                />
              </svg>
            </button>
          </picture>
<<<<<<< HEAD

          <div
            class="thumbnails hidden justify-between gap-4 m-auto sm:flex sm:flex-col sm:justify-start sm:items-center sm:h-fit md:gap-5 lg:flex-row"
          >
            <div
              id="1"
              class="w-1/5 cursor-pointer rounded-xl sm:w-28 md:w-32 lg:w-[72px] xl:w-[78px] ring-active"
            >
              <img
                src="../image/{{ $product->image}}"
                alt="thumbnail"
                class="rounded-xl hover:opacity-50 transition active"
                id="thumb-1"
              />
            </div>

            <div
              id="2"
              class="w-1/5 cursor-pointer rounded-xl sm:w-28 md:w-32 lg:w-[72px] xl:w-[78px]"
            >
              <img
                src="../images/h2.jpg"
                alt="thumbnail"
                class="rounded-xl hover:opacity-50 transition"
                id="thumb-2"
              />
            </div>

<<<<<<< HEAD

=======
>>>>>>> 22f7eb0968fdf2c4e888279b71e8c0255b0baaf7
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
<<<<<<< HEAD

=======
>>>>>>> 22f7eb0968fdf2c4e888279b71e8c0255b0baaf7
            <div
              id="3"
              class="w-1/5 cursor-pointer rounded-xl sm:w-28 md:w-32 lg:w-[72px] xl:w-[78px]"
            >
              <img
                src="../images/h3.jpg"
                alt="thumbnail"
                class="rounded-xl hover:opacity-50 transition"
                id="thumb-3"
              />
            </div>
<<<<<<< HEAD

=======
>>>>>>> 22f7eb0968fdf2c4e888279b71e8c0255b0baaf7

            <div
              id="4"
              class="w-1/5 cursor-pointer rounded-xl sm:w-28 md:w-32 lg:w-[72px] xl:w-[78px]"
            >
              <img
                src="../images/h4.jpg"
                alt="thumbnail"
                class="rounded-xl hover:opacity-50 transition"
                id="thumb-4"
              />
            </div>
          </div>
=======
>>>>>>> 8eb54b7 (fix)
        </section>
        <!-- Text -->
        <section
          class="w-full p-6 lg:mt-36 lg:pr-20 lg:py-10 2xl:pr-40 2xl:mt-40"
        >
          <h1
            class="text-very-dark mb-4 font-bold text-3xl lg:text-4xl"
          >
            {{ $product->nama }}
          </h1>
          <p class="text-dark-grayish mb-6 text-base sm:text-lg">
            {{ $product->subjek }}
          </p>
          <div
            class="flex items-center justify-between mb-6 sm:flex-col sm:items-start"
          >
            <div class="flex items-center gap-4">
              <h3
                class="text-very-dark font-bold text-3xl inline-block"
              >
                Rp. {{ $product->harga }}
              </h3>
            </div>
          </div>
            <button
              class="w-full h-10 bg-orange py-2 flex items-center justify-center gap-4 text-xs rounded-lg font-bold text-light shadow-md shadow-orange hover:brightness-125 transition select-none"
              id="add-cart"
            >
              <svg
                width="16"
                height="16"
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 22 20"
              >
                <path
                  d="M20.925 3.641H3.863L3.61.816A.896.896 0 0 0 2.717 0H.897a.896.896 0 1 0 0 1.792h1l1.031 11.483c.073.828.52 1.726 1.291 2.336C2.83 17.385 4.099 20 6.359 20c1.875 0 3.197-1.87 2.554-3.642h4.905c-.642 1.77.677 3.642 2.555 3.642a2.72 2.72 0 0 0 2.717-2.717 2.72 2.72 0 0 0-2.717-2.717H6.365c-.681 0-1.274-.41-1.53-1.009l14.321-.842a.896.896 0 0 0 .817-.677l1.821-7.283a.897.897 0 0 0-.87-1.114ZM6.358 18.208a.926.926 0 0 1 0-1.85.926.926 0 0 1 0 1.85Zm10.015 0a.926.926 0 0 1 0-1.85.926.926 0 0 1 0 1.85Zm2.021-7.243-13.8.81-.57-6.341h15.753l-1.383 5.53Z"
                  fill="hsl(223, 64%, 98%)"
                  fill-rule="nonzero"
                />
              </svg>
              Add to cart
            </button>
          </div>
        </section>
      </main>
    </div>
    <script src="{{ asset('js/script.js') }}"></script>
  </body>
</html>