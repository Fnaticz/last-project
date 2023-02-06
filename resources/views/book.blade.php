@extends('navbar.main')



<?php
if(isset($_GET['date'])){
    $date = $_GET['date'];
}

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mysqli = new mysqli('localhost', 'root', '', 'bookingcalendar');
    $stmt = $mysqli->prepare("INSERT INTO bookings (name, email, date) VALUES (?,?,?)");
    $stmt->bind_param('sss', $name, $email, $date);
    $stmt->execute();
    $msg = "<div class='alert alert-success'>Booking Successfull</div>";
    $stmt->close();
    $mysqli->close();
}

$duration = 10;
$cleanup = 0;
$start = "09:00";
$end = "15:00";


function timeslots($duration, $cleanup, $start, $end){
  $start = new DateTime($start);
  $end = new DateTime($end);
  $interval = new DateInterval("PT".$duration."M");
  $cleanupInterval = new DateInterval("PT".$cleanup."M");
  $slots = array();

  for ($intStart= $start; $intStart<$end; $intStart->add($interval)->add($cleanupInterval)) { 
    $endPeriod = clone $intStart;
    $endPeriod->add($interval);
    if($endPeriod>$end){
      break;
    }

    $slots = $intStart->format("H:iA")."-". $endPeriod->format("H:iA");

  }

  return $slots;

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

    <title>Book Kamar</title>
    <!-- <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
</head>
<br><br><br><br><br><br>
<body>
    <div class="container">
        <h1 class="text-center">Book for Date:
            
        <?php
       
         echo date('m/d/Y', strtotime($date)); 
         
         ?>
         
        
        </h1><hr>



        <div class="row">
           <?php $timeslots = timeslots($duration, $cleanup, $start, $end);
                foreach($timeslots as $ts){
            ?>
           
           <div class="col-md-2">
               <button class="btn btn-success"><?php echo $ts;?></button>
           </div>
           
           <?php } ?>
           
        </div>
    </div>

    
  </body>
  </html>
@endsection