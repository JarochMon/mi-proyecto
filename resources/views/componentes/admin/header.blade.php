<nav class="navbar navbar-expand-md bg-light shadow-sm">
    <div class="container-fluid">
        {{-- Botón para abrir sidebar (solo en móviles) --}}
        <button class="btn p-1 d-md-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebarOffcanvas"
            aria-controls="sidebarOffcanvas">
            <i class="bi bi-list fs-2 m-0"></i>
        </button>

        {{-- Título centrado --}}
        <div class="mx-auto order-0 text-center">
            Empresa
        </div>

        <div class="collapse navbar-collapse justify-content-end d-none d-md-block">
            <form class="d-flex col-6" role="search">
                <input class="form-control me-2" type="search" placeholder="Buscar..." aria-label="Search">
                <button class="btn btn-outline-success" type="submit">
                    <i class="bi bi-search text-success"></i>
                </button>
            </form>
            <ul class="navbar-nav">
                <li class="nav-item ps-2">
                    <button type="button" class="btn btnnav" href="#">
                        <i class="bi bi-bell-fill fs-5"></i>
                    </button>
                </li>
                <li class="nav-item">
                    <div class="dropdown">
                        <button type="button" class="btn btnnav dropdown-toggle no-outline" data-bs-toggle="dropdown"
                            aria-expanded="false" href="#">
                            <i class="bi bi-person-circle fs-5"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li>
                                <a type="button" class="dropdown-item dropbtn" href="/dashboard">
                                    <i class="bi bi-person-circle fs-5 pe-2"></i>
                                    Perfil
                                </a>
                            </li>
                            <li>
                                <a type="button" class="dropdown-item dropbtn" href="#">
                                    <i class="bi bi-gear-fill fs-5 pe-2"></i>
                                    Configuracion
                                </a>
                            </li>
                            <hr class="mt-2 mb-2">
                            <li>
                                <a class="dropdown-item text-danger dropbtn" href="#">
                                    <i class="bi bi-box-arrow-left fs-5 pe-2"></i>
                                    Cerrar Sesion
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>

        <button class="btn p-1 d-md-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbarOffcanvas"
            aria-controls="navbarOffcanvas">
            <i class="bi bi-three-dots-vertical fs-2 m-0"></i>
        </button>
    </div>
</nav>
