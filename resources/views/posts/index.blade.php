@extends('layouts.main', ['activePage' => 'posts', 'titlePage' => 'Lapangan'])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title">Lapangan</h4>
            <p class="card-category">Lapangan yang anda post</p>
          </div>
          <div class="card-body">
            <!-- <div class="row">
              <div class="col-12 text-right">
                <a href="{{ url('post/create') }}" class="btn btn-sm btn-facebook">Add</a>
              </div>
            </div> -->
            <div>
              @if(session()->has('message',))

              <div class="alert alert-success" id="alert">
                <button type="button" class="close" data-dismiss="alert">x</button>

              {{ session()->get('message') }}
              </div>

              @endif

              @if(session()->has('message1',))

              <div class="alert alert-danger" id="alert">
                <button type="button" class="close" data-dismiss="alert">x</button>

              {{ session()->get('message1') }}
              </div>

              @endif

            </div>

            <br>
            <div class="table-responsive">
              <table class="table ">
                <thead class="text-primary">
                  <th> NO </th>
                  <th> Nama </th>
                  <th> Date </th>
                  <th class="text-right"> Actions </th>
                </thead>
                <tbody>
                  @forelse ($products as $product)
                  <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $product->nama }}</td>
                    <td class="text-primary">{{ $product->created_at->toFormattedDateString() }}</td>
                    <td class="td-actions text-right">
                      <a href="{{ route('product.show', $product->id) }}" class="btn btn-info"> <i
                          class="material-icons">person</i> </a>
                      <a href="{{ route('product.edit', $product->id) }}" class="btn btn-success"> <i
                          class="material-icons">edit</i> </a>
                      <form action="{{ route('product.destroy', $product->id) }}" method="post"
                        onsubmit="return confirm('apakah anda yakin menghapus?')" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" rel="tooltip" class="btn btn-danger">
                          <i class="material-icons">close</i>
                        </button>
                      </form>
                    </td>
                  </tr>
                  @empty
                  <tr>
                    <td colspan="2">Tidak ada data</td>
                  </tr>
                  @endforelse
                </tbody>
              </table>
            </div>
          </div> 
          <div class="card-footer mr-auto">
              {{ $products->links() }}
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
{{-- <script type="text/javascript">
  $("document").ready(function()
  {

    setTimeout(function()
    {
      $("div.alert")->remove();
    
    },3000);
  
  
  });
</script> --}}
@endsection
