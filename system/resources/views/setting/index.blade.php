@extends('templateAdmin.base')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8 mx-auto mt-5">
				<div class="card card-default">
					<div class="card-header bg-info text-white">
						Change Password
					</div>
					<div class="card-body text-dark">
						User : {{$user->email}}
						<form action="{{url('setting')}}" method="post">
							@csrf
							<div class="form-group">
								<label for="current" class="control-label">Current Password</label>
								<input type="password" name="current" id="current" class="form-control">					
							</div>
							<div class="form-group">
								<label for="new" class="control-label">New Password</label>
								<input type="password" name="new" id="new" class="form-control">
							</div>
							<div class="form-group">
								<label for="confirm" class="control-label">Confirm Password</label>
								<input type="password" name="confirm" id="confirm" class="form-control">
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-info float-right"><i class="fa fa-save"></i> Save</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection