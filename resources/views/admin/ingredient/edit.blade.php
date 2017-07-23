@extends('template/logued') @section('title','Editar Ingrediente' . $ingredient->name) @section('content')

<div class="row">
    <div class="col-sm-6">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="row">
                    <div class="col-sm-12" align="center">
                        <div class="page-header">
                            <h1><small>Editar Ingrediente</small></h1>
                        </div>                        
                                            
                        <form method="put" action="{{ route('admin.ingredient.update',$ingredient->id) }}" >
                            <input value="{{ $ingredient->name }}" name="name" type="text" class="form-control" placeholder="Nombre">
                            <br>
                            <input value="{{ $ingredient->amount }}" name="amount" type="text" class="form-control" placeholder="Monto">
                            <br>
                            <input value="{{ $ingredient->expiration }}" name="expiration" type="text" class="form-control" placeholder="Fecha de Expiracion">
                            <br>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-ingredient"></i></span>
                               </div>
                            <br>
                            <button class="btn btn-warning" type="submit">Editar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
