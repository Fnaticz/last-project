@extends('layouts.main', ['activePage' => 'posts', 'titlePage' => 'Detail Pesanan'])
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        
        <div class="card">
            <div class="card-header card-header-primary">
            <h4 class="card-title">Booking</h4>
            <p class="card-category">Detail Pesanan = {{ $booking->id }}</p>
          </div>
            <div class="card-body">
              <div class="row">
                <label for="title" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-7">
                  <label class="col-sm-7 col-form-label"><strong>{{ $booking->namateam }}</strong></label>
                </div>
              </div>

              <div class="row">
                <label for="title" class="col-sm-2 col-form-label">Penanggung Jawab</label>
                <div class="col-sm-7">
                  <label class="col-sm-7 col-form-label"><strong>{{ $booking->namapenanggungjawab }}</strong></label>
                </div>
              </div>
              
              <div class="row">
                <label for="title" class="col-sm-2 col-form-label">No.Telepon</label>
                <div class="col-sm-7">
                  <label class="col-sm-7 col-form-label"><strong>{{ $booking->notelepon }}</strong></label>
                </div>
              </div>

              <div class="row">
                <label for="title" class="col-sm-2 col-form-label">Jam main</label>
                <div class="col-sm-7">
                  <label class="col-sm-7 col-form-label"><strong>{{ $booking->playtime->name ?? 'None' }}</strong></label>
                </div>
              </div>

              <div class="row">
                <label for="title" class="col-sm-2 col-form-label">Booking</label>
                <div class="col-sm-7">
                  <label class="col-sm-7 col-form-label"><strong>{{ $booking->product->nama ?? 'None' }}</strong></label>
                </div>
              </div>
            </div>
              

            <form method="POST" action="{{ route('update.status', $booking->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <select class="form-control" name="playtime_id">
            @foreach ($playtimes as $playtime)
               <option value='{{ $playtime->id }}'>{{ $playtime->name }}</option>
            @endforeach
            </select>
            <div class="card-footer ml-auto mr-auto">
              <button type="submit" class="btn btn-success">ACCEPT</button>
              {{-- <button type="submit" class="btn btn-danger">DECLINE</button> --}}
            </div>

            </form>
            
          </div>

      </div>
    </div>
  </div>
</div>

{{-- <script>
   $(function() { 
           $('.toggle-class').change(function() { 
           var status = $(this).prop('checked') == true ? 1 : 0;  
           var product_id = $(this).data('id');  
           $.ajax({ 
    
               type: "GET", 
               dataType: "json", 
               url: '/status/update', 
               data: {'status': status, 'product_id': product_id}, 
               success: function(data){ 
               console.log(data.success) 
            } 
         }); 
      }) 
   }); 
</script> --}}
@endsection