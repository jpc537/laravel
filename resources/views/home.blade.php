<style >
    div.transbox {
        margin: 30px;
        background-color: #ffffff;
        opacity: 0.68;
        filter: alpha(opacity=60); /* For IE8 and earlier */
    }

    .thumb {
        height: 300px;
        border: 1px solid #000;
        margin: 10px 5px 0 0;
    }
</style>
@extends('app')
@section('content')
    <div class="container-fluid">
        estas logueado!
        <div class="row">
            <div class="col-md-7 ">
                <div class="transbox">
                    <div class="panel panel-default">
                        <div class="panel-heading"><b><b><p>Pistas Disponibles</p></b></b></div>
                        <div class="panel-body">
                            <a href="#contenido-oculto-1" class="btn btn-primary"rel="modalBox">Reservar</a>
                            </br>
                            </br>
                            <table class="table table-striped">
                                <tr >
                                    <th>#</th>
                                    <th>Pista</th>
                                    <th>Tipo</th>
                                    <th>Aforo</th>

                                </tr>
                                @foreach($pistas as $pista)

                                    <tr data-id="{{$pista->id}}">
                                        <td><img src="http://vignette3.wikia.nocookie.net/bobesponja/images/e/eb/Icono_paloma_verde.png/revision/latest?cb=20141011194335"width='25' height='25'></td>
                                        <td>{{$pista->nombre}}</td>
                                        <td>{{$pista->tipo}}</td>
                                        <td>{{$pista->aforo}}</td>
                                @endforeach
                            </table>



                            <div id='contenido-oculto-1' style="display:none">AÑADIR RESERVA
                                <form method="POST"action="home">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                    <div class="form-group">
                                        <div class="col-md-6 col-md-offset-4">

                                            {!!Form::label('pista','pista a reservar:')!!}
                                            {!! Form::select('pista', $pistaSelect,null,array('class'=>'form-control','style'=>'' ))!!}

                                            {!! Form::label('fechaReserva', 'Fecha reserva') !!}
                                            {!! Form::input('date', 'fechaR', null, ['class' => 'form-control', 'placeholder' => 'Date'])!!}
                                            {!!Form::label('hora','Hora Reserva')!!}
                                            {!! Form::select('horaR', array('09:00-11:00' => '09:00-11:00', '11:00-13:00' => '11:00-13:00', '13:00-15:00' => '13:00-15:00', '15:00-17:00' => '15:00-17:00', '17:00-19:00' => '17:00-19:00', '19:00-21:00' => '19:00-21:00'), null, array('class'=>'form-control','style'=>'' )) !!}
                                            </br>
                                            <button type="submit" class="btn btn-primary">
                                                Guardar reserva
                                            </button>
                                        </div>
                                    </div>
                                </form>
                                </br>
                                </br>
                                </br>
                                </br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if($reservas==null)

    @else
        <div class="col-md-5 pull-right" >
            <div class="transbox">
                <div class="panel panel-default">
                    <div class="panel-heading"><b><b><p>Mis Reservas</p></b></b></div>
                    <div class="panel-body">


                        <table class="table table-striped">
                            <tr >
                                <th>PISTA</th>
                                <th>FECHA</th>
                                <th>HORA</th>
                            </tr>
                            @foreach($reservas as $reserva)
                                <?php	$fecha=date("d-m-Y",strtotime($reserva->fechaR));
                                $fechaActual = date('d-m-Y ');
                                ?>
                                @if($fecha<$fechaActual-0.5)
                                @else
                                    <tr data-id="{{$reserva->id}}">
                                        <td>{{$reserva->id_pista}}</td>
                                        <td>{{$fecha}} </td>
                                        <td>{{$reserva->horaR}}</td>
                                        <td><a class="glyphicon glyphicon-remove"class="btn-delete" aria-hidden="true" href="#!"></a></td>
                                @endif
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
            @endif
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


