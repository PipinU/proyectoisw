@extends('template/logued') @section('title','Crear Ingrediente') @section('content')

<div class="row">
    <div class="col-sm-6">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="row">
                    <div class="col-sm-12" align="center">
                        <div class="page-header">
                            <h1><small>Crear Ingrediente</small></h1>
                        </div>
                        {!! Form::open(['route'=>'admin.ingredient.store','method'=>'POST']) !!}
                            {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Nombre','required']) !!}
                            <br>
                             {!! Form::number('amount',null,['class'=>'form-control','placeholder'=>'Cantidad','required']) !!}
                            <br>
                             {!! Form::date('expiration',null,['class'=>'form-control','placeholder'=>'Expiracion','required']) !!}
                            <br>
                            {!! Form::submit('Registrar',['class'=>'btn btn-default']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
