@extends('templateClient.base')

@section('content')
	<div class="col-md-12">
              <p class="text-muted lead">Produk Yang Disarankan</p>
              <form action="{{url('Produk/Filter')}}" method="post">
                @csrf
                <div class="form-group">
                  <label for="" class="control-label">Nama</label>
                  <input type="text" class="form-control" name="nama" value="{{$nama ?? ""}}">
                </div>
                <button class="btn btn-info float-right">Search</button>
              </form>
              <div class="row products products-big mt-5">
                @foreach($list_produk as $produk)
                <div class="col-lg-4 col-md-6">
                  <div class="product">
                    <div class="image"><a href="{{url('Client/Produk', $produk->id)}}"><img src="{{url("public", $produk->foto)}}" alt="" class="img-fluid image1"></a></div>
                    <div class="text">
                      <h3 class="h5"><a href="{{url('Client/Produk', $produk->id)}}">{{$produk->nama}}</a></h3>
                      <p class="price">{{$produk->harga}}</p>
                    </div>
                    <a href="{{url('Pesan')}}" class="btn btn-info">Add To Cart</a>
                  </div>
                </div>
                @endforeach
              </div>
              <div class="row">
                <div class="col-md-12 banner mb-small"><a href="#"><img src="img/banner2.jpg" alt="" class="img-fluid"></a></div>
              </div>
              <div class="pages">
                <p class="loadMore text-center"><a href="#" class="btn btn-template-outlined"><i class="fa fa-chevron-down"></i> Load more</a></p>
              </div>
              <div class="container">
                <div class="row">
                  {{-- {{$list_produk->links()}} --}}
                </div>
              </div>
            </div>
@endsection