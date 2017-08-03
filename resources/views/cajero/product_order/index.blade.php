@extends('template/logued1') 
 @section('content')


	<a href="{{route('cajero.product_order.create')}}" class="btn btn-info">
	Registrar Detalle</a><hr>
	<table class="table table-striped">
		<thead>
			<th>Nombre del cliente</th>
			<th>Nombre Producto</th>
			<th>Precio</th>
			<th>Total</th>
		    <th>Fecha</th>
		</thead>
		<tbody>
			@foreach($acts_agree as $ac_ag)
				<tr>
					<td>{{\App\Order::find($ac_ag->order_id)->nombre_cli}}</td>
					<td>{{\App\Product::find($ac_ag->product_id)->nombre}}</td>

					
					<td>{{\App\Product::find($ac_ag->product_id)->precio}}</td>

					
					<td>{{\App\Order::find($ac_ag->order_id)->total}}</td>

					
					<td>{{\App\Order::find($ac_ag->order_id)->fecha}}</td>
					<td>
					<a href="{{route('cajero.product_order.destroy',[$ac_ag->order_id,$ac_ag->product_id])}}" class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>

@endsection
