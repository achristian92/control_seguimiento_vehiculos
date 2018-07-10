@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Tabla de Contenido
                </div>
                <div class="panel-body">
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="panel panel-danger">
                                    <div align="center" class="panel-body">
                                        <img src="assets/img/registrovehiculo.png"/>
                                    </div>
                                    <div align="center" class="panel-footer">
                                        <a href="">
                                            <button class="btn btn-default" type="button">
                                                Administrador
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="panel panel-danger">
                                    <div align="center" class="panel-body">
                                        <img src="assets/img/buscarcarro.png"/>
                                    </div>
                                    <div align="center" class="panel-footer">
                                        <a href="">
                                            <button class="btn btn-default" type="button">
                                                Bienes y SST
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="panel panel-danger">
                                    <div align="center" class="panel-body">
                                        <img src="assets/img/mantenimiento.png"/>
                                    </div>
                                    <div align="center" class="panel-footer">
                                        <a href="">
                                            <button class="btn btn-default" type="button">
                                                Vehiculos y Seguros
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
