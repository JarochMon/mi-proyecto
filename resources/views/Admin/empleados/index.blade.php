@extends('layouts.app')



@section('header')
    @include('componentes.admin.header')
@endsection

@section('menu')
    @include('componentes.admin.sidebar')
@endsection

@section('content')
    <style>
        .opciones {
            width: 10%;
        }
    </style>

    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card shadow-sm" id="inicioEmpleados">
                <div class="card-body">
                    <div class="row align-items-center g-2">
                        <div class="col-md-4 col-12">
                            <h4 class="ms-2">Empleados</h4>
                        </div>
                        <div class="col-md-8 col-12">
                            <div class="row justify-content-end g-2">
                                <div class="col-xl-3 col-lg-4 col-md-6 col-6">
                                    <label for="">Estados</label>
                                    <select id="filtrosEstado" class="form-select" aria-label="Default select example">
                                        <option value="" selected>Todos</option>
                                        <option value="1">Vigente</option>
                                        <option value="2">Sin Vigencia</option>
                                    </select>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-6">
                                    <label for="">Areas</label>
                                    <select id="filtrosCategoria" class="form-select" aria-label="Default select example">
                                        <option value="" selected>Todas</option>
                                        <option value="1">Administrativo</option>
                                        <option value="2">Operativo</option>
                                        <option value="3">Taller</option>
                                        <option value="4">Operario</option>
                                        <option value="5">Vigilancia</option>
                                    </select>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-12 col-12">
                                    <label for="">Buscar</label>
                                    <div class="d-flex">
                                        <input id="inputBusqueda" class="form-control" type="search" placeholder="Busca Nombre,Correo,Curp">
                                        <button id="btnBuscar" class="btn btn-outline-success ms-2 flex-shrink-0" type="submit">
                                            <i class="bi bi-filetype-xlsx"></i>Excel
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="table-responsive" id="tableContainer">
                        <table id="tabla-empleados" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">CURP</th>
                                    <th scope="col">RFC</th>
                                    <th scope="col">NSS</th>
                                    <th scope="col">Correo</th>
                                    <th scope="col">Tipo de Sangre</th>
                                    <th scope="col">Alergias</th>
                                    <th scope="col">Fecha Contratacion</th>
                                    <th scope="col">Telefono</th>
                                    <th scope="col">Puesto</th>
                                    <th scope="col">Area</th>
                                    <th scope="col">Estado</th>
                                    <th scope="col">Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                            <tfoot>
                            </tfoot>
                        </table>
                    </div>
                    <div id="loadingIndicator" style="display: none; text-align: center;">
                        <div class="spinner-border text-primary" role="status">
                            <span class="visually-hidden">Cargando...</span>
                        </div>
                        <p>Cargando empleados...</p>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mt-3" id="paginationContainer"></div>
                </div>
            </div>
        </div>
    </div>
    @include('Admin.empleados.modals.modalDatos')
    @include('componentes.admin.alert')
@endsection

@section('scripts')
    @vite(['resources/js/search/empleados.js'])
@endsection
