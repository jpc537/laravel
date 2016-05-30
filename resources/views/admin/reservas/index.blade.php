@extends('app')
@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-3 col-md-offset">
  <ul class="nav nav-pills nav-stacked">
   <!-- <li><a href="../admin">Inicio</a></li>-->
    <li ><a href="{{route('admin.users.index') }}">Usuarios</a></li>
    <li ><a href="{{route('admin.pistas.index') }}">Pistas</a></li>
    <li class="active"><a href="{{route('admin.reservas.index') }}">Reservas</a></li>
  </ul>
</div>
		<div class="col-md-9 col-md-offset">
			<div class="panel panel-default">
				<h2><center><div class="panel-heading"><b>Listado de Reservas</b></div></center></h2>
 @if(Session::has('message')) 
 <div class="alert alert-{{ Session::get('class') }}">{{ Session::get('message')}}</div> @endif 
				<div class="panel-body">
					<table class="table table-striped">
					<tr >
						<th>Pista</th>
						<th>Id usuario</th>
						<th>Fecha y Hora</th>
						<th>Acciones</th>
					</tr>
					@foreach($reservas as $reserva)
					<?php	$fecha=date("d-m-Y",strtotime($reserva->fechaR));
					$fechaActual = date('d-m-Y '); 
					?>
					<tr data-id="{{$reserva->id}}">
						<td>{{$reserva->id_pista}}</td>
						<td>{{$reserva->id_user}}</td>
						<td>{{$fecha}} --- {{$reserva->horaR}}</td>
						<td>
							
							<a href="#!" class="btn-delete">Eliminar</a>
						</td>
					</tr>
					@endforeach
					</table>
					<!--<p><a class="btn btn-info" href="#" role="button">Crear reserva</a></p>-->
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
{!! Form::open(['route' => ['admin.reservas.destroy', ':RESERVA_ID'], 'method' => 'DELETE', 'id' => 'form-delete']) !!}
 {!! Form::close() !!}

@section('scripts')
<script>
$(document).ready(function () {
    $('.btn-delete').click(function (e) {
        e.preventDefault();
        var row = $(this).parents('tr');
        var id = row.data('id');
        var form = $('#form-delete');
        var url = form.attr('action').replace(':RESERVA_ID', id);
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

