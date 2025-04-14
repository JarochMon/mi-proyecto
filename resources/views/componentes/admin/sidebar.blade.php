<div class="d-none d-md-block bg-primary text-white vh-100 p-3">
    <a href="/" class="d-flex align-items-center mb-3 text-white text-decoration-none">
        <span class="fs-4">MenuPrincipal</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href={{ route('dashboard.index') }}
            class="nav-link text-white {{ request()->routeIs('dashboard.*') ? 'active' : '' }}">
            <i class="bi bi-house-door me-2"></i>Home
            </a>
        </li>
        <li class="nav-item">
            <a href={{ route('empleados.index') }}
            class="nav-link text-white {{ request()->routeIs('empleados.*') ? 'active' : '' }}">
               <i class="bi bi-people me-2"></i>Empleados
            </a>
        </li>
        <li class="nav-item">
            <a href={{ route('empleados.index') }}
            class="nav-link text-white {{ request()->routeIs('facturas.*') ? 'active' : '' }}">
               <i class="bi bi-people me-2"></i>Facturacion
            </a>
        </li>
        <li class="nav-item">
            <a href={{ route('empleados.index') }}
            class="nav-link text-white {{ request()->routeIs('capacitaciones.*') ? 'active' : '' }}">
               <i class="bi bi-people me-2"></i>Capacitaciones
            </a>
        </li>
        {{-- <li class="nav-item">
            <button class="btn-toggle d-inline-flex btn collapsed nav-link text-white {{ request()->routeIs('facturas.*') ? 'active' : '' }}"
             data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="true">
             <i class="bi bi-file-earmark-ruled me-2"></i>Facturas</a>
            </button>
            <div class="collapse ms-4" id="home-collapse">
              <ul class="btn-toggle-nav list-unstyled pb-1">
                <li>
                    <a href="#"
                    class="link-light d-inline-flex text-decoration-none rounded {{ request()->routeIs('facturas.facturar') ? 'active' : '' }}">
                        <i class="bi bi-file-earmark me-2"></i>Facturar</a>
                  </li>
                  <li>
                    <a href="#" class="link-light d-inline-flex text-decoration-none rounded">
                        <i class="bi bi-currency-dollar me-2"></i>Liquidar</a>
                  </li>
              </ul>
            </div>
          </li> --}}
    </ul>
</div>
