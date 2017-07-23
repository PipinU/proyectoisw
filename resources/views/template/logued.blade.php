<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
</head>

<body>
    <!-- Inicio NAvbar -->
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Caffè Dolce Vita</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <button type="button" class="btn btn-default navbar-btn">Cerrar Sesión</button>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Fin NAvbar -->


    <div class="row">
        <div class="container-fluid">
            <!-- Inicio Lista -->
            <div class="col-sm-3">
                <div class="list-group">
                    <a href="{{ route('admin.user.index') }}" class="list-group-item">Gestionar Usuario</a>
                    <a href="{{ route('admin.ingredient.index') }}" class="list-group-item">Gestionar Ingrediente</a>
                </div>
            </div>
            <!-- Fin Lista -->

            <!-- Inicio Contenido -->
            <div class="col-sm-9">
                 @yield('content')
            </div>
            
           
            <!-- Fin Contenido -->
        </div>
    </div>
    
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>

</html>
