@extends('template/logued')

@section('title','Menu Ingrediente Administrador')


@section('content')
    
    
    <div class="panel panel-default">
        <div class="panel-body">
         @include('flash::message')
          <a class="btn btn-primary" href="{{ route('admin.ingredient.create') }}">Crear Ingrediente</a>
           <table class="table">
               <thead>
                   <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Cantidad</th>
                        <th>Vencimiento</th>
                   </tr>
               </thead>
               <tbody>
                    @foreach($ingredients as $ingredient)
                       <tr>
                            <td>{{ $ingredient->id }}</td>
                            <td>{{ $ingredient->name }}</td>
                            <td>{{ $ingredient->amount }}</td>
                            <td>{{ $ingredient->expiration }}</td>
                            <td><a href="{{ route('admin.ingredient.edit',$ingredient->id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></a>
                            <a href="{{ route('admin.ingredient.destroy',$ingredient->id) }}" onclick="return confirm('¿Seguro desea eliminar?')" class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a></td>
                       </tr>                        
                    @endforeach
                </tbody>
            </table>
            {{ $ingredients->links() }}            
        </div>        
    </div>   

@endsection