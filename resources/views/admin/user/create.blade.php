@extends('template/logued')
 @section('title','Crear Usuario')
  @section('content')

<div class="row">
    <div class="col-sm-6">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="row">
                    <div class="col-sm-12" align="center">
                        <div class="page-header">
                            <h1><small>Crear Usuario</small></h1>
                        </div>                        
                                            
                        <form action="{{ route('admin.user.store') }}" method="post">
                            <input name="name" type="text" class="form-control" placeholder="Nombre">
                            <br>
                            <input name="phone" type="text" class="form-control" placeholder="Telefono">
                            <br>
                            <input name="address" type="text" class="form-control" placeholder="Direccion">
                            <br>
                            <select name="rol" class="form-control">
                                <option value="">Seleccione un Rol...</option>
                                <option value="Administrador">Administrador</option>
                                <option value="Mesero">Mesero</option>
                                <option value="Cajero">Cajero</option>
                            </select>
                            <br>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input name="username" type="text" class="form-control" placeholder="Usuario">
                            </div>
                            <br>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                <input name="password" type="password" class="form-control" placeholder="Contraseña">
                            </div>
                            <br>
                            <button class="btn btn-default" type="submit">Registrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
