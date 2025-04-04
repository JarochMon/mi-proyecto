<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <title>Principal</title>

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }

        /* Establecer el color del enlace activo */
        .nav .nav-link.active {
            color: #ffffff !important;
            /* Color de texto blanco */
            background-color: #89bef7 !important;
            /* Fondo azul claro */
        }

        /* Cambiar el color del enlace activo al pasar el cursor */
        .nav .nav-link.active:hover {
            background-color: #5592cf !important;
            /* Fondo azul más oscuro */
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
    <div class="container-fluid">
        <div class="row">
            {{-- Sidebar ocupa 2 columnas en pantallas md o más, oculto en pantallas pequeñas --}}
            <div class="col-md-2 d-none d-md-block bg-primary text-white p-0">
                @yield('menu')
            </div>

            {{-- Contenido principal --}}
            <div class="col-md-10 col-12 p-0">
                {{-- Aquí puedes insertar el navbar normal --}}
                @yield('header')

                {{-- Aquí puedes agregar el contenido principal --}}
                <main class="p-4">
                    @yield('content')
                </main>
            </div>
        </div>
    </div>
    @include('componentes.admin.header-movil')
    @include('componentes.admin.sidebar-movil') <!-- Este contiene solo el offcanvas -->

    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</body>

</html>
