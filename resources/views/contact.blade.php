

@extends('app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col col-md-6 col-md-offset-3"   >
                <div class="panel panel-default">
                    <div class="panel-heading"><h3 class="panel-title">Contacto</h3></div>
                    <div class="panel-body">
                        {!! Form::open(['route' => 'send', 'method' => 'post']) !!}
                        <div class="form-group">
                            {!! Form::label('email', 'E-Mail') !!}
                            {!! Form::email('email', null, ['class' => 'form-control' ]) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('subject', 'Asunto') !!}
                            {!! Form::text('subject', null, ['class' => 'form-control' ]) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('body', 'Mensaje') !!}
                            {!! Form::textarea('body', null, ['class' => 'form-control' ]) !!}
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
1
2
3
4
5
6
7
8
9
10
11
12
13
14
15
16
17
18
19
20
21
22
23
24
25
26
27
28
29
30
31
@extends('app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col col-md-6 col-md-offset-3"   >
                <div class="panel panel-default">
                    <div class="panel-heading"><h3 class="panel-title">Contacto</h3></div>
                    <div class="panel-body">
                        {!! Form::open(['route' => 'send', 'method' => 'post']) !!}
                        <div class="form-group">
                            {!! Form::label('email', 'E-Mail') !!}
                            {!! Form::email('email', null, ['class' => 'form-control' ]) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('subject', 'Asunto') !!}
                            {!! Form::text('subject', null, ['class' => 'form-control' ]) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('body', 'Mensaje') !!}
                            {!! Form::textarea('body', null, ['class' => 'form-control' ]) !!}
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
