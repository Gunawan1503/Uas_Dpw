@inject('TimeService', 'App\Services\TimeServices')

@extends('templateAdmin.base')

@section('content')
	
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card  text-dark">
					<div class="card-header font-weight-bold">
						<div class="float-right mr-1">
                            Jam : {{$TimeService->ShowTimeNow()}}
                        </div>
						Filter
					</div>
					<div class="card-body">
						<form action="{{url('Admin/Produk/Filter')}}" method="post">
							@csrf
							<div class="form-group">
								<label for="" class="control-label">Nama</label>
								<input type="text" class="form-control" name="nama" value="{{$nama ?? ""}}">
							</div>
							<div class="form-group">
								<label for="" class="control-label">Stok</label>
								<input type="text" class="form-control" name="stok" value="{{$stok ?? ""}}">
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="" class="control-label">Harga_Min</label>
										<input type="text" class="form-control" name="harga_min" value="{{$harga_min ?? ""}}">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="" class="control-label">Harga_Max</label>
										<input type="text" class="form-control" name="harga_max" value="{{$harga_max ?? ""}}">
									</div>
								</div>
							</div>
							<button class="btn btn-dark float-right"><i class="fa fa-search"></i> Filter</button>
						</form>
					</div>
				</div>
				<div class="card">
					<div class="card-header text-dark">
						Data Produk
						<a href="{{url('Admin/Produk/Create')}}" class="btn btn-dark float-right"><i class="fa fa-plus"></i> Tambah Data</a>
					</div>
					<div class="card-body">
						<table class="table table-datatable">
							<thead class="thead-dark">
								<th>No.</th>
								<th width="150px">Aksi</th>
								<th width="450px">Nama</th>
								<th>Berat</th>
								<th>Harga</th>
								<th>Stok</th>
							</thead>
							<tbody class="text-dark">
								@foreach($list_produk as $produk)
								<tr>
									<td>{{$loop->iteration}}</td>
									<td>
										<div class="btn-group">
											<a href="{{url('Admin/Produk', $produk->id)}}" class="btn btn-dark"><i class="fa fa-info"></i> </a>
											<a href="{{url('Admin/Produk', $produk->id)}}/edit" class="btn btn-warning"><i class="fa fa-edit"></i> </a>
											@include('templateAdmin.utils.delete', ['url' => url('Admin/Produk', $produk->id)])
										</div>
									</td>
									<td>{{$produk->nama}}</td>
									<td>{{$produk->berat}}</td>
									<td>{{$produk->harga}}</td>
									<td>{{$produk->stok}}</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>		
	</div>

@endsection
