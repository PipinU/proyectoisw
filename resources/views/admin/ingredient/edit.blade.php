@extends('template/logued')

@section('title','Editar Ingrediente')
@section('content')
    {!! Form :: open(['route'=>['admin.ingredient.update',$ingredient],'method'=>'PUT'])!!}


        
    

        <div class="form-group">
        
            {!! Form::label('name','Editar Nombre') !!}
            {!!Form::text('name',$ingredient->Nombre,['class'=>'form-control','placeholder'=>'Nombre ','required'])!!} 
            
        </div>


        <div class="form-group">
        
            {!! Form::label('amount','Editar Cantidad') !!}
            {!!Form::text('amount',$ingredient->Cantidad,['class'=>'form-control','placeholder'=>'Cantidad ','required'])!!}   
            
        </div>
           
        <div class="form-group">
        
            {!! Form::label('expiration','Editar Fecha') !!}
            {!!Form::text('expiration',$ingredient->Fecha,['class'=>'form-control','placeholder'=>'Fecha ','required'])!!}   
            
        </div>
        
        <div class="form-group">
        
            {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
            <a href="{{route('admin.ingredient.index') }} " class="btn btn-primary" role="button">Cancelar</a>
            
        </div>
    {!!Form::close()!!}
@endsection