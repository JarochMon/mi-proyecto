@extends('layouts.app')

@section('header')
    @include('componentes.admin.header')
@endsection

@section('menu')
    @include('componentes.admin.sidebar')
@endsection

@section('content')
    <div class="row g-3">
        <div class="col-md-6 col-sm-12">
            <div class="card shadow-sm">
                <div class="card-body">
                    Una card
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-12">
            <div class="card shadow-sm">
                <div class="card-body">
                    Una card
                </div>
            </div>
        </div>
    </div>
    @include('componentes.admin.alert')
@endsection
