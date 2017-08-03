@extends('template/logued') @section('title','Crear Producto') @section('content')

<div class="row">
    <div class="col-sm-6">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="row">
                    <div class="col-sm-12" align="center">
                        <div class="page-header">
                            <h1><small>Crear Producto</small></h1>
                        </div>
                        {!! Form::open(['route'=>'admin.product.store','method'=>'POST']) !!}
                            {!! Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Nombre','required']) !!}
                            <br>
                             {!! Form::text('descripcion',null,['class'=>'form-control','placeholder'=>'Descripcion','required']) !!}
                            <br>
                             {!! Form::number('precio',null,['class'=>'form-control','placeholder'=>'Precio','required']) !!}
                            <br>
                           <div class="form-group">
        
            {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
            <a href="{{route('admin.product.index') }} " class="btn btn-primary" role="button">Cancelar</a>
            
        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
