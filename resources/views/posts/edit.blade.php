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
<<<<<<< HEAD
                  {{-- <input type="text" class="form-control" name="category" placeholder="Category" value="{{ old('nama', $product->category) }}" autocomplete="off"> --}}
                  <select type="select" class="form-control" name="category" placeholder="Category">
                    {{-- <option selected disabled value="{{ old('category') == 1 ? 'selected' : '' }}" >Open this select menu</option> --}}
                    {{-- <option value="">Select option</option> --}}
                                <option value="futsal" @if (old('category') == "futsal") {{ 'selected' }} @endif>futsal</option>
                                <option value="basket" @if (old('category') == "basket") {{ 'selected' }} @endif>basket</option>
                  </select>
=======
                  <input type="text" class="form-control" name="category" placeholder="Category" value="{{ old('category', $product->category->name) }}" autocomplete="off">
                  {{-- select class="form-control" name="category">
                      <option value="futsal" @if(old('category') == 'futsal')selected@endif>futsal</option>
                      <option value="basket" @if(old('category') == 'basket')selected@endif>basket</option>
                  </select> --}}
>>>>>>> dbbd756 (category id)
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