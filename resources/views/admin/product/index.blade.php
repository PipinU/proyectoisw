@extends('template/logued')

@section('title','Menu Producto Administrador')


@section('content')
    
    
    <div class="panel panel-default">
        <div class="panel-body">
         @include('flash::message')
          <a class="btn btn-primary" href="{{ route('admin.product.create') }}">Crear Producto</a>
           <table class="table">
               <thead>
                   <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Descripcion</th>
                        <th>Precio</th>
                   </tr>
               </thead>
               <tbody>
                    @foreach($products as $product)
                       <tr>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->nombre }}</td>
                            <td>{{ $product->descripcion }}</td>
                            <td>{{ $product->precio }}</td>
                            <td><a href="{{ route('admin.product.edit',$product->id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></a>
                            <a href="{{ route('admin.product.destroy',$product->id) }}" onclick="return confirm('¿Seguro desea eliminar?')" class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a></td>
                       </tr>                        
                    @endforeach
                </tbody>
            </table>
            {{ $products->links() }}            
        </div>        
    </div>   

@endsection