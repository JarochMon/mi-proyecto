// components/dataTable.js
import { renderPaginationComponent } from './pagination.js';
import { showLoader, hideLoader, renderEmpty, renderError } from './utils.js';

export class DataTable {
    constructor({
        container,
        tbody,
        paginationContainer,
        loadingIndicator,
        loadData,       // Función async ({ page, per_page }) => { data, pagination }
        renderRow,      // Función para renderizar una fila
        itemsPerPage
    }) {
        this.container = container;
        this.tbody = tbody;
        this.paginationContainer = paginationContainer;
        this.loadingIndicator = loadingIndicator;
        this.loadDataFn = loadData;
        this.renderRowFn = renderRow;  // Usamos renderRowFn aquí
        this.itemsPerPage = itemsPerPage;
        this.currentPage = 1;
    }

    async init(page = 1) {
        try {
            showLoader(this.loadingIndicator);

            const { data, pagination } = await this.loadDataFn({
                page,
                per_page: this.itemsPerPage
            });

            this.currentPage = pagination.current_page || 1;
            this.lastPage = pagination.last_page || 1;

            this.renderRows(data);
            this.renderPagination(pagination);
        } catch (error) {
            console.error('Error cargando datos:', error);
            renderError(this.tbody);
        } finally {
            hideLoader(this.loadingIndicator);
        }
    }

    async reload() {
        const currentPage = this.paginationContainer.querySelector('.active')?.textContent || 1;
        await this.loadDataFn({
            page: currentPage,
            per_page: this.itemsPerPage
        }).then(({ data, pagination }) => {
            this.renderTable(data);  // Usar renderTable
            this.renderPagination(pagination);
        });
    }

    renderTable(data) {
        this.tbody.innerHTML = ''; // Limpiar las filas actuales
        data.forEach(item => {
            const row = this.renderRowFn(item);  // Usar renderRowFn aquí
            this.tbody.innerHTML += `<tr>${row}</tr>`;
        });
    }

    renderRows(data) {
        this.tbody.innerHTML = ''; // Limpiar tabla

        if (!data || data.length === 0) {
            renderEmpty(this.tbody);
            return;
        }

        for (const item of data) {
            const tr = document.createElement('tr');
            tr.innerHTML = this.renderRowFn(item);  // Usar renderRowFn aquí
            this.tbody.appendChild(tr);
        }
    }

    renderPagination(pagination) {
        if (this.paginationContainer) {
            renderPaginationComponent(this.paginationContainer, pagination, (newPage) => {
                this.init(newPage); // Volver a cargar tabla
            });
        }
    }
}
