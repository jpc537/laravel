@extends('app')
@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-3 col-md-offset">
  <ul class="nav nav-pills nav-stacked">
    <!--<li><a href="../admin">Inicio</a></li>-->
    <li ><a href="{{route('admin.users.index') }}">Usuarios</a></li>
    <li class="active"><a href="{{route('admin.pistas.index') }}">Pistas</a></li>
    <li><a href="{{route('admin.reservas.index') }}">Reservas</a></li>
  </ul>
</div>
		<div class="col-md-9 col-md-offset">
			<div class="panel panel-default">
				<h2><div class="panel-heading"><center><b>Pistas Disponibles</b></center></div></h2>
 @if(Session::has('message')) 
 <div class="alert alert-{{ Session::get('class') }}">{{ Session::get('message')}}</div> @endif 
				<div class="panel-body">
					<table class="table table-striped">
					<tr >
						<th>Nombre</th>
						<th>Tipo</th>
						<th>Opciones</th>
					</tr>
					@foreach($pistas as $pista)
					<tr data-id="{{$pista->id}}">
						<td>{{$pista->nombre}}</td>
						<td>{{$pista->tipo}}</td>
						<td>
							<a href="#!" class="btn-delete">Eliminar</a>
						</td>
					</tr>
					@endforeach
					</table>
					<center><a class="btn btn-info" href="{{route('admin.pistas.create') }}" role="button"> Crear pista</a></center>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

