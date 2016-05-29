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
    <div class="container">
        <div class="row">
            <div class="transbox">
                <div class="col-md-3 pull-left">
                    <ul class="nav nav-pills nav-stacked">
                        <li class="active"><a href="#">Inicio</a></li>
                        <li><a href="{{route('admin.users.index') }}">Usuarios</a></li>
                        <li><a href="{{route('admin.pistas.index') }}">Pistas</a></li>
                        <li><a href="{{route('admin.reservas.index') }}">Reservas</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-8 col-md-offset">
                <div class="panel panel-default">
                    <div class="panel-heading"><h2><center>Bienvenido Administrador</center></h2></div>
                    <div class="panel-body"></div>
                </div>
            </div>
        </div>
    </div>
@endsection
