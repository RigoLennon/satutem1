<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>SDI</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'SDI') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;<li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                <p>Declaraciones</p>
                            </a>

                            <ul class="dropdown-menu">
                                <li>
                                    <a href="{{ url('/create/declaracion') }}">Declaraciones</a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        @yield('content')


        <div class="container">
            <table class="table table-striped">
                <thead>
                TODAS LAS DECLARACIONES
                <tr>
                    <td>ID del alumno</td>
                    <td>Ejercicio</td>
                    <td>Periodo</td>
                    <td>Fecha de presentacion</td>
                    <td>No. de Operacion</td>
                    <td>Declaracion</td>
                    <td>Tipo de Declaracion</td>
                    <td>Linea de captura</td>
                </tr>
                </thead>
                <tbody>
                @foreach ($declarations as $row)
                    <tr>
                        <td>{{ $row->user_id }}</td>
                        <td>{{ $row->excercise }}</td>
                        <td>{{ $row-> period}}</td>
                        <td>{{ $row-> date }}</td>
                        <td>{{ $row-> operation}}</td>
                        <td>{{ $row-> declaration }}</td>
                        <td>{{ $row-> declaration_type }}</td>
                        <td>{{ $row-> capture }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
