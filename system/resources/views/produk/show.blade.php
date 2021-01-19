@extends('templateAdmin.base')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header text-dark">
						Detail Data Produk
					</div>
					<div class="card-body text-dark">
						<h3>{{$produk->nama}}</h3>
						<hr>
						@include('produk.show.detail')
						<p>
							{!! nl2br($produk->deskripsi) !!}
						</p>
						<br>
						<br>
						<div class="row">
							<div class="col-7">
								<img src="{{url("public",$produk->foto)}}" alt="" class="img-fluid">
							</div>
							<div class="col-5"></div>
						</div>
					</div>
				</div>
			</div>
		</div>		
	</div>
@endsection