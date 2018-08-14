@extends('layouts.app')

@section('content')
    @if(Auth::user())

        <link href="{{ asset('css/style.css') }}" rel="stylesheet">

        <div class="container">
            <h2>Declaracion Provisional o Definitiva de Impuestos Federales</h2>

                <form action="{{ url('/create/declaracion') }}"  method="POST" id="form">
                    <input type="hidden" value="{{ csrf_token() }}" name="_token">
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <label class="col-sm-4 control-label">*RFC</label>
                            <input type="text" class="form-control" placeholder="{{ Auth::user()->username }}" readonly>
                        </div>
                        <div class="col-sm-6 form-group">
                            <label class="col-sm-4 control-label">*Tipo de Declaracion</label>
                            <select type="text" class="form-control" name="declaration_type">
                                <option value="Normal">Normal</option>
                                <option value="Complementaria">Complementaria</option>
                            </select>
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="date" class="col-sm-4 control-label">*Periodicidad</label>
                            <input type="text" class="form-control" placeholder="Mensual" readonly>
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="declaration" class="col-sm-4 control-label">*Periodo</label>
                            <select type="text" class="form-control" name="period">
                                <option value="null">Seleccionar...</option>
                                <option value="ENERO">Enero</option>
                                <option value="FEBRERO">Febrero</option>
                                <option value="MARZO">Marzo</option>
                                <option value="ABRIL">Abril</option>
                                <option value="MAYO">Mayo</option>
                                <option value="JUNIO">Junio</option>
                                <option value="JULIO">Julio</option>
                                <option value="AGOSTO">Agosto</option>
                                <option value="SEPTIEMBRE">Septiembre</option>
                                <option value="OCTUBRE">Octubre</option>
                                <option value="NOVIEMBRE">Noviembre</option>
                                <option value="DICIEMBRE">Diciembre</option>
                            </select>
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="declaration" class="col-sm-4 control-label">*Ejercicio</label>
                            <select type="text" class="form-control" name="excercise">
                                <option value="2018">2018</option>
                                <option value="2017">2017</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <sub>*Campos Oblgatorios</sub>
                    </div>
                    <br>
                </form>

            <div class="tab">
                <!--Este div esta vacio para esconder el siguiente paso del formulario de la declaracion-->
            </div>

            <div class="tab">
                <h2>Obligaciones Registradas</h2>

                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th scope="col"> </th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Fecha de Vencimiento</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row"><input type="checkbox" class="form-check-input" id="exampleCheck1" checked disabled></th>
                        <td>ISR PERSONAS FÍSICAS. ACTIVIDAD EMPRESARIAL Y PROFESIONAL</td>
                        <td>22/07/2018</td>
                    </tr>
                    <tr>
                        <th scope="row"><input type="checkbox" class="form-check-input" id="exampleCheck1" checked disabled></th>
                        <td>IMPUESTO AL VALOR AGREGADO</td>
                        <td>22/07/2018</td>
                    </tr>
                    </tbody>
                </table>
            </div>

            <div style="overflow:auto;">
                <div style="float:right;">
                    <button class="btn btn-default" type="button" id="prevBtn" onclick="nextPrev(-1)"><< Atrás</button>
                    <button class="btn btn-default" type="button" id="nextBtn" onclick="nextPrev(1)">Siguiente >></button>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        Siguiente >>
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3 class="modal-title" id="exampleModalLabel">Declaraciones</h3>
                                </div>
                                <div class="modal-body">

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="panel-group">
                                                <div class="panel panel-primary">
                                                    <div class="panel-heading">
                                                        Titulo
                                                    </div>
                                                    <div class="panel-body">
                                                        Hola
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="panel-group">
                                                <div class="panel panel-primary">
                                                    <div class="panel-heading">
                                                        Titulo
                                                    </div>
                                                    <div class="panel-body">
                                                        Hola
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    <script src="{{ asset('js/components.js') }}"></script>

    @endif
@endsection
