@extends('navbar.main')

@section('content')
<br>
<br>
<br>
<br>
<br>
<br>
<div class="card" style="margin:20px;">
    <div class="card-header">Form Booking Lapangan</div>
    <div class="card-body">
        <form action="{{ route('booking.store') }}" method="post">
        @csrf

        <div>
            @if(session()->has('messagebok',))

            <div class="alert alert-success" id="alert">
              <button type="button" class="close" data-dismiss="alert">x</button>

            {{ session()->get('messagebok') }}
            </div>

            @endif
          </div>
        
        <label for="">Nama Tim</label><br>
        <input type="text" name="namateam" id="namateam" class="form-control"><br>

        <label for="">Nama Penanggung Jawab</label>
        <input type="text" name="namapenanggungjawab" id="namapenanggungjawab" class="form-control"><br>

        <label for="">alamat</label>
        <input type="text" name="alamat" id="alamat" class="form-control"><br>

        <label for="">No. Telepon</label>
        <input type="tel" name="notelepon" id="notelepon" class="form-control" ><br>
        <label for="">Kegiatan</label>
        <input type="text" name="kegiatan" id="kegiatan" class="form-control"><br>

        <label for="">Waktu Main</label>
        <input type="text" name="waktumain" id="waktumain" class="form-control"><br>

        <label for="">Tanggal mulai</label>
        <input type="date" name="tglmain" id="tglmain" class="form-control"><br>

        <label for="">Tanggal end</label>
        <input type="date" name="endtgl" id="endtgl" class="form-control"><br>

        <button type="submit" value="Save" class="btn btn-success"></button>
        {{-- <a href="{{ route('posts.bookings') }}" class=""> --}}
            {{-- </a><br> --}}
    </form>

    </div>
</div>

@endsection