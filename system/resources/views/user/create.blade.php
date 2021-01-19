@extends('templateAdmin.base')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header text-dark">
						Tambah Data User
					</div>
					<div class="card-body text-dark">
						<form action="{{url('Admin/User')}}" method="post">
							@csrf
							<div class="form-group">
								<label for="" class="control-label">Nama</label>
								<input type="text" class="form-control" name="nama">
							</div>
							<div class="form-group">
								<label for="" class="control-label">Jenis Kelamin</label>
								<input type="text" class="form-control" name="jk">
							</div>
							<div style="color: red;" class="note">
								<h3>Note :</h3>
								<p>1 = Laki-laki</p>
								<p>2 = Perempuan</p>
							</div>
							<div class="form-group">
								<label for="" class="control-label">Username</label>
								<input type="text" class="form-control" name="username">
							</div>
							<div class="form-group">
								<label for="" class="control-label">Email</label>
								<input type="email" class="form-control" name="email">
							</div>
							<div class="form-group">
								<label for="" class="control-label">Password</label>
								<input type="password" class="form-control" name="password">
							</div>
							<div class="form-group">
								<label for="" class="control-label">No Handphone</label>
								<input type="text" class="form-control" name="no_handphone">
							</div>
							<button class="btn btn-dark float-right"><i class="fa fa-save"></i> Simpan</button>
						</form>
					</div>
				</div>
			</div>
		</div>		
	</div>
@endsection