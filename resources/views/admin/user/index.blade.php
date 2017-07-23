@extends('template/logued')

@section('title','Inicio Administrador')


@section('content')

    <div class="panel panel-default">
        <div class="panel-body">
         @include('flash::message')
          <a class="btn btn-primary" href="{{ route('admin.user.create') }}">Crear Usuario</a>
           <table class="table">
               <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Telefono</th>
                        <th>Direccion</th>
                        <th>Rol</th>
                        <th>Usuario</th>
                        <th>Acción</th>
                   </tr>
               </thead>
               <tbody>
                    @foreach($users as $user)
                       <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->phone }}</td>
                            <td>{{ $user->address }}</td>
                            <td>{{ $user->rol }}</td>
                            <td>{{ $user->username }}</td>
                            <td><a href="{{ route('admin.user.edit',$user->id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></a>
                            <a href="{{ route('admin.user.destroy',$user->id) }}" onclick="return confirm('¿Seguro desea eliminar?')"class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a></td>
                       </tr>                        
                    @endforeach
                </tbody>
            </table>
            {{ $users->links() }}            
        </div>        
    </div>  

@endsection