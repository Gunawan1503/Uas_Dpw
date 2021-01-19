@extends('templateAdmin.base')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header text-dark">
						Edit Data User
					</div>
					<div class="card-body text-dark">
						<form action="{{url('Admin/User', $user->id)}}" method="post">
							@csrf
							@method('PUT')
							<div class="form-group">
								<label for="" class="control-label">Nama</label>
								<input type="text" class="form-control" name="nama" value="{{$user->nama}}">
							</div>
							<div class="form-group">
								<label for="" class="control-label">Username</label>
								<input type="text" class="form-control" name="username" value="{{$user->username}}">
							</div>
							<div class="form-group">
								<label for="" class="control-label">Email</label>
								<input type="email" class="form-control" name="email" value="{{$user->email}}">
							</div>
							<div class="form-group">
								<label for="" class="control-label">Password</label>
								<input type="password" class="form-control" name="password">
							</div>
							<div class="form-group">
								<label for="" class="control-label">No Handphone</label>
								<input type="text" class="form-control" name="no_handphone" value="{{$user->detail->no_handphone}}">
							</div>
							<button class="btn btn-dark float-right"><i class="fa fa-save"></i> Simpan</button>
						</form>
					</div>
				</div>
			</div>
		</div>		
	</div>
@endsection