@extends('layouts.main', ['activePage' => 'posts', 'titlePage' => 'Edit lapangan'])
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <form method="POST" action="{{ route('product.update', $product->id) }}" enctype="multipart/form-data" class="form-horizontal">
          @csrf
          @method('PUT')
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title">Edit</h4>
              <p class="card-category">Edit lapangan</p>
            </div>
            <div class="card-body">
              <div class="row">
                <label for="title" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" name="nama" placeholder="Nama lapangan"
                    value="{{ old('nama', $product->nama) }}" autocomplete="off" autofocus>
                </div>
              </div>
              <div class="row">
                <label for="title" class="col-sm-2 col-form-label">Harga</label>
                <div class="col-sm-7">
                  <input type="number" class="form-control" name="harga" placeholder="Harga" value="{{ old('harga', $product->harga) }}" autocomplete="off">
                </div>
              </div>
              <div class="row">
                <label for="title" class="col-sm-2 col-form-label">Category</label>
                <div class="col-sm-7">
                  <select class="form-control" name="category_id">
                  @foreach ($categories as $category)
                    @if(old('category_id', $product->category_id) == $category->id)
                      <option value='{{ $category->id }}' selected>{{ $category->name }}</option>
                    @else
                      <option value='{{ $category->id }}'>{{ $category->name }}</option>
                    @endif
                  @endforeach
                  </select>
                </div>
              </div>
              <div class="row">
                <label for="title" class="col-sm-2 col-form-label">Subjek</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" name="subjek" placeholder="Subjek" value="{{ old('subjek', $product->subjek) }}" autocomplete="off">
                </div>
              </div>
              <div class="row">
                <label for="title" class="col-sm-2 col-form-label">Alas</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" name="alas" placeholder="Tipe Alas" value="{{ old('alas', $product->alas) }}" autocomplete="off">
                </div>
              </div>
              <div class="row">
                <label for="title" class="col-sm-2 col-form-label">Image</label>
                <div class="col-sm-7">
                   <input type="file" name="image" class="form-control" placeholder="image" value="{{ old('image', $product->image) }}" autocomplete="off">
                </div>
              </div>
            </div>
            </div>
            <div class="card-footer ml-auto mr-auto">
              <button type="submit" class="btn btn-primary">Update</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection