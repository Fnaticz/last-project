@extends('layouts.main', ['activePage' => 'posts', 'titlePage' => 'Tambah Lapangan'])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <form method="POST" action="{{ route('product.store') }}" enctype="multipart/form-data" class="form-horizontal">
          @csrf
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title">Tambah</h4>
              <p class="card-category">Tamabahkan lapangan lebih banyak untuk mitra anda</p>
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
                <label for="title" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" name="nama" placeholder="Nama Lapangan" autofocus>
                </div>
              </div>
              <div class="row">
                <label for="title" class="col-sm-2 col-form-label">Harga</label>
                <div class="col-sm-7">
                  <input type="number" class="form-control" name="harga" placeholder="Harga">
                </div>
              </div>
              <div class="row">
                <label for="title" class="col-sm-2 col-form-label">Category</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" name="category" placeholder="Category">
                </div>
              </div>
              <div class="row">
                <label for="title" class="col-sm-2 col-form-label">Subjek</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" name="subjek" placeholder="Subjek">
                </div>
              </div>
              <div class="row">
                <label for="title" class="col-sm-2 col-form-label">Alas</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" name="alas" placeholder="Tipe Alas">
                </div>
              </div>
              <div class="row">
                <label for="title" class="col-sm-2 col-form-label">Image</label>
                <div class="col-sm-7">
                   <input type="file" name="image" class="form-control" placeholder="image">
                </div>
              </div>
            </div>
            <div class="card-footer ml-auto mr-auto">
              <button type="submit" class="btn btn-primary">Post</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
{{-- @include('sweetalert::alert') --}}


@endsection