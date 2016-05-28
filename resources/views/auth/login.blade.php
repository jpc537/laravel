<style>
div.transbox {
    margin: 30px;
    background-color: #ffffff;
    opacity: 0.68;
    filter: alpha(opacity=60); /* For IE8 and earlier */
}
</style>
@extends('app')

@section('content')

<div class="container-fluid">
	<div class="row">
		<div class="transbox">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<b><div class="panel-heading">Login</div></b>
				<div class="panel-body">
					@if(Session::has('message')) 

				 <div class="alert alert-{{ Session::get('class') }}">{{ Session::get('message')}}</div> @endif 
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Sorry!</strong>Errores en tus datos.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif
					<form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/login') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<label class="col-md-4 control-label">E-Mail</label>
							<div class="col-md-6">
								<input type="email" class="form-control" name="email" value="{{ old('email') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Password</label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="password">
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<div class="checkbox">
									<label>
										<input type="checkbox" name="remember"> Recordar
									</label>
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">Login</button>
								<a class="btn btn-link" href="{{ url('/password/email') }}">¿Olvido su contraseña?</a>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		</div>
	</div>
</div>
</div>
@endsection
