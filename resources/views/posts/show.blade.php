@extends('layouts.main', ['activePage' => 'posts', 'titlePage' => 'Detail Lapangan'])
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title">Post</h4>
            <p class="card-category">Detail lapangan {{ $product->nama }}</p>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-md-4">
                <div class="card card-user">
                  <div class="card-body">
                    <p class="card-text">
                      <div class="author">
                        <div class="block block-one"></div>
                        <div class="block block-two"></div>
                        <div class="block block-three"></div>
                        <div class="block block-four"></div>
                        <a href="#">
                          <img src="/image/{{ $product->image }}" width="250px">
                          <h5 class="title mt-3">{{ $product->nama }}</h5>
                        </a>
                        <p class="description">
                          {{ $product->alas }} <br>
                          {{ $product->harga }} <br>
                          {{ $product->created_at }}
                        </p>
                      </div>
                    </p>
                    <div class="card-description">
                      {{ $product->subjek }}
                    </div>
                  </div>
                  <div class="card-footer">
                    <div class="button-container">
                      <a href="{{ route('product.edit', $product->id) }}"><button type="submit" class="btn btn-sm btn-primary">Edit</button></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection