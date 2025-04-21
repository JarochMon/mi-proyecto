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
            <div class="card shadow-sm">
                <div class="card-body d-flex align-middle justify-content-between">
                    <h4 class="align-middle m-0">Facturas</h4>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit"><i class="bi bi-search"></i></button>
                    </form>
                </div>
            </div>
            <br>
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Apellido</th>
                                    <th scope="col">Cuenta</th>
                                    <th scope="col">Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                    <td class="opciones">
                                        <div class="d-flex gap-1">
                                            <button class="btn btn-info btn-sm modal-trigger" data-action="ver"
                                                data-empleado-id="1" data-empleado-nombre="Juan Pérez" data-bs-toggle="modal"
                                                data-bs-target="#dynamicModal">
                                                <i class="bi bi-eye"></i>
                                            </button>
                                            <button class="btn btn-primary btn-sm modal-trigger" data-action="editar"
                                                data-bs-toggle="modal" data-bs-target="#dynamicModal">
                                                <i class="bi bi-pencil-square"></i>
                                            </button>
                                            <button class="btn btn-danger btn-sm modal-trigger" data-action="borrar"
                                                data-empleado-id="1" data-empleado-nombre="Juan Pérez" data-bs-toggle="modal"
                                                data-bs-target="#dynamicModal">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </div>
                                        @include('admin.empleados.modals.modalDatos')
                                    </td>
                                </tr>
                                <tr>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <td colspan="2">Larry the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('componentes.admin.alert')
@endsection
