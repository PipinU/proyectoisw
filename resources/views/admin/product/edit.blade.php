@extends('template/logued')

@section('title','Editar Producto')
@section('content')
    {!! Form :: open(['route'=>['admin.product.update',$product],'method'=>'PUT'])!!}


        
    

        <div class="form-group">
        
            {!! Form::label('nombre','Editar Nombre') !!}
            {!!Form::text('nombre',$product->nombre,['class'=>'form-control','placeholder'=>'Nombre ','required'])!!} 
            
        </div>


        <div class="form-group">
        
            {!! Form::label('descripcion','Editar Descripcion') !!}
            {!!Form::text('descripcion',$product->descripcion,['class'=>'form-control','placeholder'=>'Descripcion ','required'])!!}   
            
        </div>
           
        <div class="form-group">
        
            {!! Form::label('precio','Editar Precio') !!}
            {!!Form::number('precio',$product->precio,['class'=>'form-control','placeholder'=>'Precio ','required'])!!}   
            
        </div>
        
        <div class="form-group">
        
            {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
            <a href="{{route('admin.product.index') }} " class="btn btn-primary" role="button">Cancelar</a>
            
        </div>
    {!!Form::close()!!}
@endsection