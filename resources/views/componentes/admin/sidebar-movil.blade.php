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
                <a href="#"
                class="nav-link text-white">
                    <i class="bi bi-people me-2"></i>Orders</a>
            </li>
            <li><a href="#" class="nav-link text-white">Products</a></li>
            <li><a href="#" class="nav-link text-white">Customers</a></li>
        </ul>
    </div>
</div>
