<style>
body {
    background-image: url("http://www.asdfgh.es/wp-content/uploads/2015/12/futbol-sala1.jpg");

}
div.transbox {
    margin: 30px;
    background-color: #ffffff;
    opacity: 0.68;
    filter: alpha(opacity=60);
}
</style>
@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="transbox">
		<div class="col-md-3 col-md-offset">
  <ul class="nav nav-pills nav-stacked">
    <li><a href="../admin">Inicio</a></li>
    <li class="active"><a href="#"> Usuarios</a></li>
    <li><a href="{{route('admin.pistas.index') }}">Pistas</a></li>
    <li><a href="{{route('admin.reservas.index') }}">Reservas</a></li>
  </ul>
</div>
</div>
		<div class="container">
		<div class="col-md-8 col-md-offset">
			<div class="panel panel-default">
				<div class="panel-heading">Usuarios</div>
 					@if(Session::has('message'))
 <div class="alert alert-{{ Session::get('class') }}">{{ Session::get('message')}}</div> @endif
				<div class="panel-body">
					
					{!! Form::model(Request::all(), ['route' => 'admin.users.index', 'method' => 'GET', 'class' => 'navbar-form navbar-left pull-right', 'role' => 'search']) !!}
                      <div class="form-group">
                        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre de usuario']) !!}
                        
                      </div>
                      <button type="submit" class="btn btn-default">Buscar</button>
                    {!! Form::close() !!}
					<p><a class="btn btn-info" href="{{route('admin.users.create') }}" role="button">Crear Usuario</a></p>
					Listado de usuarios
					<table class="table table-striped">
					<tr >
						<th>#</th>
						<th>Nombre</th>
						<th>Email</th>
						<th>Rol</th>
						<th>Activo</th>
						<th>Acciones</th>
					</tr>
					@foreach($users as $user)
					<tr data-id="{{$user->id}}">
						<td>{{$user->id}}</td>
						<td>{{$user->name}}</td>
						<td>{{$user->email}}</td>
						<td>{{$user->rol}}</td>
						<td>{{$user->activo}}</td>
						<td>
							<a href="{{route('admin.users.edit',$user) }}">Editar</a>
							<a href="#!" class="btn-delete">Eliminar</a>
						</td>
					</tr>
					@endforeach
					</table>
					{!!$users->render()!!}
				
				</div>
			</div>
		</div>
	</div>
	</div>
</div>
@endsection

{!! Form::open(['route' => ['admin.users.destroy', ':USER_ID'], 'method' => 'DELETE', 'id' => 'form-delete']) !!}
 {!! Form::close() !!}

@section('scripts')
<script>
$(document).ready(function () {
    $('.btn-delete').click(function (e) {
        e.preventDefault();
        var row = $(this).parents('tr');
        var id = row.data('id');
        var form = $('#form-delete');
        var url = form.attr('action').replace(':USER_ID', id);
        var data = form.serialize();
        row.fadeOut();
        $.post(url, data, function (result) {
            alert(message);
        }).fail(function () {
            alert($result.message);
            row.show();
        });
    });
});
</script>

@endsection

