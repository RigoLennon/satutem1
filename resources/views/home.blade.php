@extends('layouts.app')

@section('content')
    @php
    $users = DB::table('users')->get();
    @endphp

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">


    <!--->

    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Bienvenido <strong>{{ Auth::user()->name }}</strong></h3>
            </div>

            <ul class="list-unstyled components">
                <p>Panel de  Administracion</p>
                <li class="active">
                    <a href="" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Lista de Alumnos</a>
                </li>
                <li>
                    <a href="{{ url('/home/show') }}">Delcaraciones</a>
                </li>
                <!--<li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Pages</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="#">Page 1</a>
                        </li>
                        <li>
                            <a href="#">Page 2</a>
                        </li>
                        <li>
                            <a href="#">Page 3</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">Portfolio</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>-->
            </ul>

            <footer class="text-center">Simulador para la Declaracion de Impuestos</footer>
            <footer class="text-center">Universidad Tecnológica de Manzanillo</footer>
        </nav>

        <!-->


        <!-->
            <div class="container">
                <div class="col-md-8 col-md-offset-3" style="padding: 1.2em;">
                    <div class="panel panel-default">
                        <div class="panel-heading"><h3>Lista de alumnos Activos/Inactivos</h3></div>

                        <div class="panel-body">

                            @if (Auth::user()->usertype == 1)

                                <table id="users" class="table table-borderless">
                                    <thead>
                                    <tr>
                                        <td><h4>Nombre</h4></td>
                                        <td><h4>RFC</h4></td>
                                        <td><h4>Estado</h4></td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($users as $x)
                                        @if($x->usertype !=1)
                                            <tr>
                                                <td>{{ $x->name }}</td>
                                                <td>{{ $x->username }}</td>
                                                <td>
                                                    @if($x->status == 1)
                                                        <a href="{{ url('update/user',[$x->id, $status = 0]) }}" name="id" type="button" class="btn btn-danger">Desactivo</a>
                                                    @else
                                                        <a href="{{ url('update/user',[$x->id, $status = 1]) }}" name="id" type="button" class="btn btn-success">Activar</a>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endif
                                    @endforeach
                                    </tbody>
                                </table>
                                <a href="{{ route('declarations.pdf') }}" class="btn btn-sm btn-primary">
                                    Descargar productos en PDF
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <!-->
@endsection
