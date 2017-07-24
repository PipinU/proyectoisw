<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="wrapper-page">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-sm-offset-4">
                    <div class="panel panel-primary" style="margin-top: 10rem;">
                        <div class="panel-heading">
                            <h3 class="text-center"> Bienvenido a Caffè Dolce Vita</h3>
                        </div>
                        <div class="panel-body">
                       
                            {!! Form::open(['class'=>'form-horizontal m-t-20','route'=>'login','method'=>'POST']) !!}

                            <div class="form-group ">
                                <div class="col-xs-12">
                                    {!! Form::text('username',null,['class'=>'form-control','placeholder'=>'Usuario','required']) !!}
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-xs-12">
                                    {!! Form::password('password', ['class'=>'form-control','placeholder'=>'Contraseña','required']) !!}
                                </div>
                            </div>

                            <div class="form-group text-center m-t-40">
                                <div class="col-xs-12">
                                    {!! Form::submit('Entrar',['class'=>'btn btn-primary']) !!}
                                </div>
                            </div>

                            {!! Form::close() !!} @include('flash::message')
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
