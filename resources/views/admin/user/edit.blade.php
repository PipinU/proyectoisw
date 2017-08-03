@extends('template/logued')

@section('title','Editar Usuario')
@section('content')
    {!! Form :: open(['route'=>['admin.user.update',$user],'method'=>'PUT'])!!}


        
    

        <div class="form-group">
        
            {!! Form::label('name','Editar Nombre') !!}
            {!!Form::text('name',$user->name,['class'=>'form-control','placeholder'=>'nombre ','required'])!!} 
            
        </div>


        <div class="form-group">
        
            {!! Form::label('phone','editar telefono') !!}
            {!!Form::text('phone',$user->phone,['class'=>'form-control','placeholder'=>'Telefono ','required'])!!}   
            
        </div>
           <div class="form-group">
        
            {!! Form::label('address','editar direccion') !!}
            {!!Form::text('address',$user->address,['class'=>'form-control','placeholder'=>'Direccion ','required'])!!}   
            
        </div>

        <div class="form-group">
        
            {!! Form::label('rol','editar tipo de usuario') !!}
            {!!Form::text('rol',$user->rol,['class'=>'form-control','placeholder'=>'Rol','required'])!!} 
            
        </div>

         <div class="form-group">
        
            {!! Form::label('username','editar usuario') !!}
            {!!Form::text('username',$user->username,['class'=>'form-control','placeholder'=>'Usuario','required'])!!}  
            
        </div>
        <div class="form-group">
        
            {!! Form::label('password','editar contraseña') !!}
            {!!Form::text('password',$user->password,['class'=>'form-control','placeholder'=>'Contraseña','required'])!!}  
            
        </div>

        


        <div class="form-group">
        
            {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
            <a href="{{route('admin.user.index') }} " class="btn btn-primary" role="button">Cancelar</a>
            
        </div>
    {!!Form::close()!!}
@endsection