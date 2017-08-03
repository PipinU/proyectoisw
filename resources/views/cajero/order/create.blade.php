@extends('template/logued1') @section('title','Crear Pedido') @section('content')

<div class="row">
    <div class="col-sm-6">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="row">
                    <div class="col-sm-12" align="center">
                        <div class="page-header">
                            <h1><small>Crear Pedido</small></h1>
                        </div>
                        @php 
                            $users = App\User::all();
                            foreach($users as $acts){
                             $arrayActs[$acts->id] = $acts->name;
                        }
                        @endphp

                        {!! Form::open(['route'=>'cajero.order.store','method'=>'POST']) !!}
                            {!! Form::text('nombre_cli',null,['class'=>'form-control','placeholder'=>'Nombre','required']) !!}
                            <br>
                             {!! Form::date('fecha',null,['class'=>'form-control','placeholder'=>'Fecha','required']) !!}
                            <br>
                             {!! Form::number('total',null,['class'=>'form-control','placeholder'=>'Total','required']) !!}
                            <br>
                            <br>
                                {!! Form::label('name','Nombre del vendedor') !!}
                            {!! Form::select('user_id',$arrayActs)!!}
                            <br><br>
                           <div class="form-group">
        
            {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
            <a href="{{route('cajero.order.index') }} " class="btn btn-primary" role="button">Cancelar</a>
            
        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
