@extends('layouts.main', ['activePage' => 'Tour', 'titlePage' => 'Create Tournament'])
@section('content')

<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <form method="POST" action="{{ route('tournament.store') }}" enctype="multipart/form-data" class="form-horizontal">
          @csrf
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title">Tournament</h4>
              <p class="card-category">Buat tournament live score</p>
            </div>
            <div class="card-body">
              <div>
                @if(session()->has('message',))
  
                <div class="alert alert-success" id="alert">
                  <button type="button" class="close" data-dismiss="alert">x</button>
  
                {{ session()->get('message') }}
                </div>
  
                @endif
              </div>
              <div class="row">
                <label for="title" class="col-sm-2 col-form-label">Nama tim Pertama</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" name="first_team" placeholder="Nama tim Pertama" autofocus>
                </div>
              </div>

              <div class="row">
                <label for="title" class="col-sm-2 col-form-label">Nama tim Kedua</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" name="second_team" placeholder="Nama tim Kedua">
                </div>
              </div>
              <div class="row">
                <label for="title" class="col-sm-2 col-form-label">score tim pertama</label>
                <div class="col-sm-7">
                  <input type="number" class="form-control" name="first_team_score" placeholder="score tim pertama">
                </div>
              </div>

              <div class="row">
                <label for="title" class="col-sm-2 col-form-label">score tim kedua</label>
                <div class="col-sm-7">
                  <input type="number" class="form-control" name="second_team_score" placeholder="score tim kedua">
                </div>
              </div>
              <div class="row">
                <label for="title" class="col-sm-2 col-form-label">Logo tim pertama</label>
                <div class="col-sm-7">
                   <input type="file" name="image_first" class="form-control" placeholder="Logo tim pertama">
                </div>
              </div>
              <div class="row">
                <label for="title" class="col-sm-2 col-form-label">Logo tim kedua</label>
                <div class="col-sm-7">
                   <input type="file" name="image_second" class="form-control" placeholder="Logo tim kedua">
                </div>
              </div>
              
            </div>
            <div class="card-footer ml-auto mr-auto">
              <button type="submit" class="btn btn-primary">Create</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
{{-- @include('sweetalert::alert') --}}

@endsection
