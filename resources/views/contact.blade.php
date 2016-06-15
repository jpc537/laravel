@extends('app')
@section('content')
<div class="container">
   <div class="row">
       <div class="col col-md-6 col-md-offset-3"   >
           <div class="panel panel-default">
             <div class="panel-heading"><center><h3 class="panel-title">Formulario de contacto</h3></center></div>
             <div class="panel-body">

                 {!! Form::open(['route' => 'mail.store', 'method' => 'POST', 'role' => 'form']) !!}
                 <div class="form-group">
                     {!! Form::label('email', 'E-Mail') !!}
                     {!! Form::email('email', null, ['class' => 'form-control' ]) !!}
                 </div>
                 <div class="form-group">
                     {!! Form::label('asunto', 'Asunto') !!}
                     {!! Form::text('asunto', null, ['class' => 'form-control' ]) !!}
                 </div>
                 <div class="form-group">
                     {!! Form::label('mensaje', 'Mensaje') !!}
                     {!! Form::textarea('mensaje', null, ['class' => 'form-control' ]) !!}
                 </div>
                 <div class="form-group">

                     {!! Form::submit('Enviar', ['class' => 'btn btn-success ' ] ) !!}
                 </div>
                 {!! Form::close() !!}
             </div>
           </div>
        </div>
   </div>
</div>
@endsection

