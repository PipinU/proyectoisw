@extends('template/logued1')

@section('title','Menu Pedido Cajero')


@section('content')
    
    
    <div class="panel panel-default">
        <div class="panel-body">
         @include('flash::message')
          <a class="btn btn-primary" href="{{ route('cajero.order.create') }}">Crear Pedido</a>
           <table class="table">
               <thead>
                   <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Fecha</th>
                        <th>Total</th>
                   </tr>
               </thead>
               <tbody>
                    @foreach($orders as $order)
                       <tr>
                            <td>{{ $order->id }}</td>
                            <td>{{ $order->nombre_cli }}</td>
                            <td>{{ $order->fecha }}</td>
                            <td>{{ $order->total }}</td>
                            <td><a href="{{ route('cajero.order.edit',$order->id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></a>
                            <a href="{{ route('cajero.order.destroy',$order->id) }}" onclick="return confirm('¿Seguro desea eliminar?')" class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a></td>
                       </tr>                        
                    @endforeach
                </tbody>
            </table>
            {{ $orders->links() }}            
        </div>        
    </div>   

@endsection