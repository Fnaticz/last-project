@extends('navbar.main')
@section('content')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style type="text/css">
   .hide {
  display:none;
}
</style>


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

        <div class="hide"> 
            <select class="form-control" name="playtime_id">
            @foreach ($playtimes as $playtime)
               <option value='{{ $playtime->id }}'>{{ $playtime->name }}</option>
            @endforeach
            </select>
        </div>

        <button type="submit" value="Save" class="btn btn-success">Booking</button>
    </form>

    </div>
</div>