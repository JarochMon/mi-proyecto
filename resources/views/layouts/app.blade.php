<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>Empresa</title>

    <style>
        /* Reset básico */
        html,
        body {
            height: 100%;
            margin: 0;
            padding: 0;
            overflow-x: hidden;
        }

        /* Layout principal */
        .main-wrapper {
            display: flex;
            min-height: 100vh;
        }

        /* Sidebar fijo */
        .sidebar-fixed {
            width: 250px;
            min-height: 100vh;
            position: fixed;
            left: 0;
            background: #0d6efd;
            color: white;
            z-index: 1000;
        }

        /* Contenido principal */
        .main-content {
            flex: 1;
            margin-left: 250px;
            /* Igual al ancho del sidebar */
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        /* Header ajustado */
        .main-header {
            position: sticky;
            top: 0;
            z-index: 100;
            background: white;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            width: 100%;
        }

        /* Contenido desplazable */
        .scrollable-content {
            flex: 1;
            overflow-y: auto;
            padding: 20px;
        }

        /* Responsive: ocultar sidebar en móviles */
        @media (max-width: 767.98px) {
            .sidebar-fixed {
                display: none;
            }

            .main-content {
                margin-left: 0;
            }
        }

        @media (max-width: 767.98px) {
            .main-content {
                width: 100vw;
                /* Ocupa todo el ancho de la pantalla */
                margin-left: 0;
                overflow-x: hidden;
                /* Previene desbordamiento horizontal */
            }

            .table-responsive {
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
                /* Mejor desplazamiento en iOS */
            }

            .card-body {
                padding: 15px;
                /* Reducir padding en móviles */
            }

            .opciones {
                width: auto;
                /* Ancho flexible para columnas de opciones */
                min-width: 120px;
                /* Ancho mínimo para los botones */
            }
        }

        /* Tus estilos personalizados existentes */
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        .nav .nav-link.active {
            color: #ffffff !important;
            background-color: #89bef7 !important;
        }

        .nav .nav-link.active:hover {
            background-color: #5592cf !important;
        }

        .btnnav:focus,
        .btnnav:active,
        .btnnav:focus:active,
        .btnnav:focus-visible {
            outline: none !important;
            box-shadow: none !important;
            border-color: transparent !important;
        }

        .dropbtn:focus,
        .dropbtn:active,
        .dropbtn:focus:active,
        .dropbtn:focus-visible {
            background-color: transparent !important;
            color: inherit !important;
            outline: none !important;
            box-shadow: none !important;
        }
    </style>
</head>

<body>
    <div class="main-wrapper">
        <!-- Sidebar fijo -->
        <aside class="sidebar-fixed d-none d-md-block">
            @yield('menu')
        </aside>

        <!-- Contenido principal -->
        <div class="main-content">
            <!-- Header ajustado -->
            <header class="main-header">
                @yield('header')
            </header>

            <!-- Contenido desplazable -->
            <main class="scrollable-content">
                @yield('content')
            </main>
        </div>
    </div>

    @include('componentes.admin.header-movil')
    @include('componentes.admin.sidebar-movil')

    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    @stack('scripts')
</body>

</html>
