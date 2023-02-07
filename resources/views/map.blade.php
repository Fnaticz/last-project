@extends('navbar.main')

@section('content')
<section class="banner" style="height: 85vh;">
         <div class="content">
            <div class="title">Map</div>
            <div class="top-subtitle subtitle">The Location Homestay</div>
         </div>
      </section>
      <br><br><br>

      <!-- Map Section -->
      <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script>
    function initialize() {
      var options = {
        center:new google.maps.LatLng(-8.1847257,114.2523619), // longitude latitude bandung
        zoom:5,
        mapTypeId:google.maps.MapTypeId.ROADMAP // Tipe ROADMAP
      };
      // create map object
      var map=new google.maps.Map(document.getElementById("googleMap"),options);
    }
    // membuat Event Listener untuk memanggil fungsi initialize pada saat halaman selesai di load
    google.maps.event.addDomListener(window, 'load', initialize);
    </script>
</head>
<body>
    <!-- Map container -->
    <div id="googleMap" style="width:500px;height:380px;"></div>
        
      </div>

@endsection