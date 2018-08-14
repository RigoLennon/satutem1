@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Acceder al simulador</div>

                <div class="panel-body">

                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                            <label for="username" class="col-md-4 control-label">RFC:</label>

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control" name="username" value="{{ old('username') }}" required autofocus><br>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Contraseña:</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>
                            </div>
                        </div>


                        <div class="col-md-12 text-center">
                            @if ($errors->has('username'))
                                <div class="alert alert-danger" role="alert">
                                    <strong>{{ $errors->first('username') }}</strong>
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-success">
                                    Iniciar sesión
                                </button>

                                <button class="btn btn-default"><a href="{{ route('register') }}">Registrarse</a></button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="alert alert-success" role="alert">
                <h4 class="alert-heading">Antes de comenzar</h4>
                <hr>
                <p>*Asegurate de estar <strong><u>registrado en el sistema</u></strong>, si no lo estas, presiona el boton de <a href="{{ route('register') }}">"Registarse"</a></p>
                <p>*Comprueba que tu <strong><u>RFC y Contraseña</u></strong> sean correctos</p>
                <p>*Asegurate de que tu cuenta este <strong><u>activa</u></strong>, si no, ponte en contacto con el administrador</p>
            </div>

        </div>
    </div>
</div>
@endsection
