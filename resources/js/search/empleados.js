import { DataTable } from '../components/dataTable.js';
import { ModalManager } from '../components/modalManager.js';
import { showLoader, hideLoader } from '../components/utils.js';

// Función para obtener datos desde la API con filtros
async function obtenerEmpleados({ page, per_page }) {
    const estado = document.querySelector('#filtrosEstado')?.value || '';
    const area = document.querySelector('#filtrosCategoria')?.value || '';
    const buscar = document.querySelector('#inputBusqueda')?.value || '';

    const response = await axios.get('/obtener/empleados', {
        params: {
            page,
            per_page,
            estado,
            area,
            search: buscar
        }
    });

    const data = response.data;

    if (Array.isArray(data?.data)) {
        return { data: data.data, pagination: data.meta || data.pagination };
    }

    if (Array.isArray(data?.empleados)) {
        return { data: data.empleados, pagination: data.pagination };
    }

    if (Array.isArray(data)) {
        return {
            data,
            pagination: {
                total: data.length,
                per_page,
                current_page: page,
                last_page: Math.ceil(data.length / per_page)
            }
        };
    }

    return { data: [], pagination: { total: 0, per_page, current_page: page, last_page: 1 } };
}

function renderFilaEmpleado(empleado) {
    const safe = (val, fallback = '--') => val ?? fallback;

    const areas = {
        1: 'Administrativo',
        2: 'Operativo',
        3: 'Taller',
        4: 'Operario',
        5: 'Vigilancia'
    };

    const estados = {
        1: 'Vigente',
        2: 'Sin Vigencia',
    };

    return `
    <td>${safe(empleado.nombres, 'Sin nombre')}</td>
    <td>${safe(empleado.curp)}</td>
    <td>${safe(empleado.rfc)}</td>
    <td>${safe(empleado.nss)}</td>
    <td>${safe(empleado.correo)}</td>
    <td>${safe(empleado.tipo_sangre)}</td>
    <td>${safe(empleado.alergias)}</td>
    <td>${safe(empleado.fecha_contratacion)}</td>
    <td>${safe(empleado.telefono)}</td>
    <td>${safe(empleado.puesto)}</td>
    <td>${safe(areas[empleado.area] || 'Sin Área')}</td>
    <td>${safe(estados[empleado.estado] || 'Error')}</td>
    <td class="opciones">
      <div class="d-flex gap-1">
        <button class="btn btn-info btn-sm modal-trigger" data-action="ver"
            data-empleado-id="${empleado.codigo}" data-empleado-nombre="${safe(empleado.nombres)}"
            data-bs-toggle="modal" data-bs-target="#dynamicModal">
            <i class="bi bi-eye"></i>
        </button>
        <button class="btn btn-primary btn-sm modal-trigger" data-action="editar"
            data-empleado-id="${empleado.codigo}" data-empleado-nombre="${safe(empleado.nombres)}"
            data-bs-toggle="modal" data-bs-target="#dynamicModal">
            <i class="bi bi-pencil-square"></i>
        </button>
        <button class="btn btn-danger btn-sm modal-trigger" data-action="borrar"
            data-empleado-id="${empleado.codigo}" data-empleado-nombre="${safe(empleado.nombres)}"
            data-bs-toggle="modal" data-bs-target="#dynamicModal">
            <i class="bi bi-trash"></i>
        </button>
      </div>
    </td>
  `;
}

// Crear e inicializar la tabla
const empleadosTable = new DataTable({
    container: document.getElementById('tableContainer'),
    tbody: document.querySelector('#tabla-empleados tbody'),
    paginationContainer: document.getElementById('paginationContainer'),
    loadingIndicator: document.getElementById('loadingIndicator'),
    loadData: obtenerEmpleados,
    renderRow: renderFilaEmpleado,
    itemsPerPage: 20
});

empleadosTable.init();

document.querySelector('#filtrosEstado')?.addEventListener('change', () => empleadosTable.reload());
document.querySelector('#filtrosCategoria')?.addEventListener('change', () => empleadosTable.reload());
document.querySelector('#inputBusqueda')?.addEventListener('input', debounce(() => empleadosTable.reload(), 500));

const modalManager = new ModalManager('dynamicModal');

document.addEventListener('click', (e) => {
    const btn = e.target.closest('.modal-trigger');
    if (!btn) return;

    const codigo = btn.dataset.empleadoId;
    const nom = btn.dataset.empleadoNombre;
    const accion = btn.dataset.action;

    modalManager.open({
        action: accion,
        data: { id: codigo, nombre: nom },
        onConfirm: (data) => {
            // Aquí puedes manejar acciones como eliminar o editar
        }
    });
});

// Función debounce para evitar múltiples llamadas al escribir en el input
function debounce(func, wait) {
    let timeout;
    return function (...args) {
        clearTimeout(timeout);
        timeout = setTimeout(() => func.apply(this, args), wait);
    };
}
