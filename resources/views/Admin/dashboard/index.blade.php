@extends('layouts.app')



@section('header')
    @include('componentes.admin.header')
@endsection

@section('menu')
    @include('componentes.admin.sidebar')
@endsection

@section('content')
    <style>
        .card {
            background: linear-gradient(135deg, #3f85f0 0%, #fbebff 100%);
            color: white;
        }
    </style>
    <div class="row g-4">
        <div class="col-md-4 col-sm-12 col-6">
            <a href="{{ route('empleados.index') }}" class="text-decoration-none">
                <div class="card shadow-sm hover-effect">
                    <div class="card-body">
                        <h5 class="card-title">Empleados</h5>
                        <p class="card-text">Total: 200</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4 col-sm-6 col-6">
            <a href="{{ route('empleados.index') }}" class="text-decoration-none">
                <div class="card shadow-sm hover-effect">
                    <div class="card-body">
                        <h5 class="card-title">Facturas</h5>
                        <p class="card-text">Total: 200</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4 col-sm-6 col-12">
            <a href="{{ route('empleados.index') }}" class="text-decoration-none">
                <div class="card shadow-sm hover-effect">
                    <div class="card-body">
                        <h5 class="card-title">Productos</h5>
                        <p class="card-text">Total: 200</p>
                    </div>
                </div>
            </a>
        </div>
    </div>

<hr>
    <div class="row g-3">
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card shadow-sm">
                <div class="accordion">
                    <div class="accordion-item shadow-sm">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true">
                                Gráfica 1
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne">
                            @include('componentes.admin.graficas.graficaBarras')
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card shadow-sm">
                <div class="accordion">
                    <div class="accordion-item shadow-sm">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="true">
                                Gráfica 2
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo">
                            @include('componentes.admin.graficas.graficaLinea')
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card shadow-sm">
                <div class="accordion">
                    <div class="accordion-item shadow-sm">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="true">
                                Gráfica 3
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse show" aria-labelledby="headingThree">
                            @include('componentes.admin.graficas.graficaDona')
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card shadow-sm">
                <div class="accordion">
                    <div class="accordion-item shadow-sm">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour" aria-expanded="true">
                                Gráfica 4
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse show" aria-labelledby="headingFour">
                            @include('componentes.admin.graficas.graficaRadar')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @include('componentes.admin.alert')
@endsection
