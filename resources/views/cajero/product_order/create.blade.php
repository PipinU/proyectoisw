@extends('template/logued1') @section('title','Crear Detalle') @section('content')

	{!! Form::open(['route'=>'cajero.product_order.store','method'=>'POST']) !!}

	@php 
		$orders = App\Order::all();
		foreach($orders as $agrees){
			$arrayAgrees[$agrees->id] = $agrees->nombre_cli;
		}
	@endphp

	@php 
		$products = App\Product::all();
		foreach($products as $acts){
			$arrayActs[$acts->id] = $acts->nombre;
		}
	@endphp

	<div clas=="form-group">
		{!! Form::label('nombre_cli','Nombre del cliente') !!}
		{!! Form::select('order_id',$arrayAgrees)!!}
	</div>
	<hr>
	<div clas=="form-group">
		{!! Form::label('nombre','Nombre del producto') !!}
		{!! Form::select('product_id',$arrayActs)!!}
	</div>
	<hr>
	<div class="form-group">
		{!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}
		<a href="{{route('cajero.product_order.index') }} " class="btn btn-primary" role="button">Cancelar</a>
	</div>	
	
	{!! Form::close()!!}

@endsection
