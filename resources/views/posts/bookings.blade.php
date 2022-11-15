@extends('layouts.main', ['activePage' => 'posts', 'titlePage' => 'Booking'])

@section('content')
<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title">Bookings</h4>
              <p class="card-category">Pesanan yang masuk</p>
            </div>
              <div class="card-body">
                <br>
                <div class="table-responsive">
                  <table class="table ">
                    <thead class="text-primary">
                      <th> No</th>
                      <th> Nama Tim </th>
                      <th> Kegiatan </th>
                      <th> Tanggal Main</th>
                      <th> Date</th>
                      <th class="text-right"> Actions </th>
                    </thead>
                    <tbody>
                    @foreach ($bookings as $booking)
                        
                   
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $booking->namateam }}</td>
                            <td>{{ $booking->kegiatan }}</td>
                            <td>{{ $booking->tglmain }}</td>
                            <td>{{ $booking->created_at->toFormattedDateString() }}</td>
                            
                            {{-- <td class="text-primary">{{ $product->created_at->toFormattedDateString() }}</td> --}}
                            <td class="td-actions text-right">
                                <a href=" " class="btn btn-visibility"> <i
                                    class="material-icons">visibility</i> </a>
                    @endforeach
                    </tbody>
                    </table>
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>


                
@endsection