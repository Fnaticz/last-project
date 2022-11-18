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

        <label for="">Waktu Main</label><br>
        @foreach ($playtimes as $playtime)
          <tr style="display: block;">
            <td><input type="radio" value="{{ $playtime->id }}" /> {{ $playtime->name }}</td>
          <tr><br>
        @endforeach

        <label for="">Tanggal</label>
        <input type="date" name="tglmain" id="tglmain" class="form-control"><br>

        <button type="submit" value="Save" class="btn btn-success">Booking</button>
        {{-- <a href="{{ route('posts.bookings') }}" class=""> --}}
            {{-- </a><br> --}}
    </form>

    </div>
</div>

@endsection