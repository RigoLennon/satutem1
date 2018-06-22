
@extends('layouts.app')

@section('content')
    @if(Auth::user())
    <div class="col-sm-offset-3 col-sm-6">
        <div class="panel-title">
            <h1>Declaraciones</h1>
        </div>



    </div>

    <!-- aqui empieza el formulario -->
    <form action="{{ url('/create/declaracion') }}"  method="POST">
        <div class="form-horizontal">
            <div class="col-sm-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">*Documento</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" placeholder="Consulta Declaración" readonly>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-4 control-label">*RFC</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" placeholder="{{ Auth::user()->username }}" readonly>
                    </div>
                </div>

                <div class="form-group">
                    <input type="hidden" value="{{ csrf_token() }}" name="_token">
                    <label class="col-sm-4 control-label">Periodicidad</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" placeholder="Mensual" readonly>
                    </div>
                </div>

                <div class="form-group">
                    <label for="period" class="col-sm-4 control-label">Periodo</label>
                    <div class="col-sm-8">
                        <select type="text" class="form-control" name="period">
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
                </div>

                <div class="form-group">
                    <label for="date" class="col-sm-4 control-label">Fecha de Presentación</label>
                    <div class="col-sm-8">
                        <input type="date" class="form-control" name="date">
                    </div>
                </div>

                <div class="form-group">
                    <label for="operation" class="col-sm-4 control-label">No. de Operación</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="operation">
                    </div>
                </div>

            </div>

            <div class="col-sm-6">
                <div class="form-group">
                    <label for="declaration" class="col-sm-4 control-label">*Declaración</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="declaration">
                    </div>
                </div>

                <div class="form-group">
                    <label for="declaration_type" class="col-sm-4 control-label">Tipo de Declaración</label>
                    <div class="col-sm-8">
                        <select type="text" class="form-control" name="declaration_type">
                            <option value="Normal">Normal</option>
                            <option value="Complementaria">Complementaria</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="date" class="col-sm-4 control-label">*Ejercicio</label>
                    <div class="col-sm-8">
                        <select type="text" class="form-control" name="excercise">
                            <option value="2018">2018</option>
                            <option value="2017">2017</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="capture" class="col-sm-4 control-label">Línea de Captura</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="capture">
                    </div>
                </div>

                <div class="pull-right">
                    <button type="submit" class="btn btn-success">
                        Registrar declaracion
                    </button>
                </div>
            </div>
        </div>
        </div>
    </form>

    @endif
@endsection
