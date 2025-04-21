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

        .categorias-container {
            width: 100%;
            /* Ocupa todo el ancho en móvil */
        }

        @media (min-width: 768px) {
            .categorias-container {
                width: 260px;
                /* Ancho fijo solo en desktop */
                flex-shrink: 0;
            }

            .divider {
                width: 1px;
                background-color: #dee2e6;
                margin: 0 12px;
            }
        }

        .capacitaciones-container {
            flex-grow: 1;
            min-width: 0;
        }

        .divider {
            width: 1px;
            background-color: #dee2e6;
            margin: 0 12px;
        }
    </style>

    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="row align-items-center g-2">
                        <!-- Columna del título (40%) -->
                        <div class="col-md-4 col-12">
                            <h4 class="m-0">Capacitaciones</h4>
                        </div>

                        <!-- Columna de filtros (60%) -->
                        <div class="col-md-8 col-12">
                            <div class="row g-2">
                                <!-- Selector de categoría -->
                                <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                                    <select class="form-select">
                                        <option value="" selected>Todas las categorías</option>
                                        <option value="1">Categoría 1</option>
                                        <option value="2">Categoría 2</option>
                                        <option value="3">Categoría 3</option>
                                    </select>
                                </div>

                                <!-- Rango de fechas -->
                                <div class="col-xl-5 col-lg-6 col-md-6 col-12">
                                    <div class="d-flex align-items-center">
                                        <div class="input-group">
                                            <input type="date" class="form-control" placeholder="Username"
                                                aria-label="Username">
                                            <span class="input-group-text">a</span>
                                            <input type="date" class="form-control" placeholder="Server"
                                                aria-label="Server">
                                        </div>
                                    </div>
                                </div>

                                <!-- Buscador -->
                                <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                                    <div class="d-flex">
                                        <input class="form-control" type="search" placeholder="Buscar">
                                        <button class="btn btn-outline-success ms-2 flex-shrink-0" type="submit">
                                            <i class="bi bi-search"></i>
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
                <div class="card-body p-0">
                    <div class="d-flex flex-column flex-md-row p-3">
                        <div class="categorias-container mb-3 mb-md-0">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <label class="col-form-label col-form-label-lg m-0">Categorías</label>
                                <button class="btn btn-outline-success btn-sm">
                                    <i class="bi bi-plus"></i>
                                </button>
                            </div>
                            <ul class="list-group categorias">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <span class="text-truncate" style="max-width: 150px;">
                                        Este es un texto muy largo que debería truncarse con puntos suspensivos si no cabe
                                    </span>
                                    <div>
                                        <button class="btn btn-sm btn-outline-primary me-1">
                                            <i class="bi bi-pencil-square"></i>
                                        </button>
                                        <button class="btn btn-sm btn-outline-danger">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </div>
                                </li>
                                <li class="list-group-item">A second item</li>
                                <li class="list-group-item">A third item</li>
                                <li class="list-group-item">A fourth item</li>
                                <li class="list-group-item">And a fifth one</li>
                            </ul>
                        </div>
                        <div class="divider d-none d-md-block"></div>
                        <div class="capacitaciones-container mt-3 mt-md-0">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <label class="col-form-label col-form-label-lg m-0">Cpacitaciones</label>
                                <button class="btn btn-outline-success btn-sm">
                                    <i class="bi bi-plus"></i>
                                </button>
                            </div>
                            <div class="table-responsive tbl-container bdr">
                                <table class="table table-bordered mb-0">
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
                                                        data-empleado-id="1" data-empleado-nombre="Juan Pérez"
                                                        data-bs-toggle="modal" data-bs-target="#dynamicModal">
                                                        <i class="bi bi-eye"></i>
                                                    </button>
                                                    <button class="btn btn-primary btn-sm modal-trigger"
                                                        data-action="editar" data-bs-toggle="modal"
                                                        data-bs-target="#dynamicModal">
                                                        <i class="bi bi-pencil-square"></i>
                                                    </button>
                                                    <button class="btn btn-danger btn-sm modal-trigger" data-action="borrar"
                                                        data-empleado-id="1" data-empleado-nombre="Juan Pérez"
                                                        data-bs-toggle="modal" data-bs-target="#dynamicModal">
                                                        <i class="bi bi-trash"></i>
                                                    </button>
                                                </div>
                                                @include('admin.empleados.modals.modalDatos')
                                            </td>
                                        </tr>
                                        <!-- Más filas... -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('componentes.admin.alert')
@endsection
