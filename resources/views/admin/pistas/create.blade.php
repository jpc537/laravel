@extends('app')
@section('content')

<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading"><center><b>Crear Nueva Pista</b></center></div>

				<div class="panel-body">
					@if($errors->any())
					<div class="alert alert-danger" role="alert">
					<p>Entradas Incorrectas:</p>
					<ul>
						@foreach($errors->all()as $error)
						<li>{{$error}}</li>
						@endforeach
					</ul>
   					@endif
					</div>
				
					{!!Form::open(['route'=>'admin.pistas.store','method'=>'POST','class'=>''])!!}
						@include ('admin.pistas.partials.fields')
						</br>
						</br>
						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary"><center>Guardar Pista</center></button>
							</div>
						</div>
					</br>
				</br>
					{!!Form::close()!!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
