@extends('template/logued1')

@section('title','Editar Pedido')
@section('content')
    {!! Form :: open(['route'=>['cajero.order.update',$order],'method'=>'PUT'])!!}


        
    

        <div class="form-group">
        
            {!! Form::label('nombre_cli','Editar Nombre') !!}
            {!!Form::text('nombre_cli',$product->nombre_cli,['class'=>'form-control','placeholder'=>'Nombre ','required'])!!} 
            
        </div>


        <div class="form-group">
        
            {!! Form::label('fecha','Editar Fecha') !!}
            {!!Form::date('fecha',$product->fecha,['class'=>'form-control','placeholder'=>'Fecha ','required'])!!}   
            
        </div>
           
       
        
        <div class="form-group">
        
            {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
            <a href="{{route('admin.product.index') }} " class="btn btn-primary" role="button">Cancelar</a>
            
        </div>
    {!!Form::close()!!}
@endsection