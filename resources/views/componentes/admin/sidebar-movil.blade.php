<div class="offcanvas offcanvas-start d-md-none text-bg-primary" tabindex="-1" id="sidebarOffcanvas"
    aria-labelledby="sidebarLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="sidebarLabel">Menú</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body">
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
                <a href={{ route('dashboard.index') }}
                class="nav-link text-white {{ request()->routeIs('dashboard.*') ? 'active' : '' }}"">
                    <i class="bi bi-house-door me-2"></i>Home</a>
            </li>
            <li class="nav-item">
                <a href={{ route('empleados.index') }}
                class="nav-link text-white  {{ request()->routeIs('empleados.*') ? 'active' : '' }}"">
                    <i class="bi bi-people me-2"></i>Empleados</a>
            </li>
            <li class="nav-item">
                <a href={{ route('facturas.index') }}
                class="nav-link text-white {{ request()->routeIs('facturas.*') ? 'active' : '' }}">
                    <i class="bi bi-file-earmark-post me-2"></i>Facturacion
                </a>
            </li>
            <li class="nav-item">
                <a href={{ route('capacitaciones.index') }}
                class="nav-link text-white {{ request()->routeIs('capacitaciones.*') ? 'active' : '' }}">
                    <i class="bi bi-camera-reels me-2"></i>Capacitaciones
                </a>
            </li>
        </ul>
    </div>
</div>
