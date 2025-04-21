export class ModalManager {
    constructor(modalId) {
        this.modal = document.getElementById(modalId);
        this.title = this.modal.querySelector('#dynamicModalTitle');
        this.body = this.modal.querySelector('#dynamicModalBody');
        this.actionBtn = this.modal.querySelector('#dynamicModalActionBtn');
    }

    open({ action, data, onConfirm }) {
        this.actionBtn.onclick = null;

        // Cambiar el contenido del modal según la acción
        switch (action) {
            case 'ver':
                this.title.textContent = `Detalles de ${data.nombre || 'Elemento'}`;
                this.body.innerHTML = this.renderDetails(data);
                this.actionBtn.style.display = 'none';
                break;

            case 'editar':
                this.title.textContent = `Editar ${data.nombre || 'Elemento'}`;
                this.body.innerHTML = this.renderEditForm(data);
                this.actionBtn.textContent = 'Guardar cambios';
                this.actionBtn.style.display = 'block';
                this.actionBtn.onclick = () => {
                    const formData = this.getFormData();
                    onConfirm({ ...data, ...formData });
                };
                break;

            case 'borrar':
                this.title.textContent = `Eliminar ${data.nombre || 'Elemento'}`;
                this.body.innerHTML = `<p>¿Está seguro que desea eliminar a <strong>${data.nombre}</strong>?</p>`;
                this.actionBtn.textContent = 'Confirmar eliminación';
                this.actionBtn.style.display = 'block';
                this.actionBtn.onclick = () => {
                    onConfirm({ id: data.id });
                };
                break;
        }

        bootstrap.Modal.getOrCreateInstance(this.modal).show();
    }

    close() {
        bootstrap.Modal.getInstance(this.modal).hide();
    }

    renderDetails(data) {
        let detailsHtml = '';
        for (const [key, value] of Object.entries(data)) {
            detailsHtml += `<p><strong>${key}:</strong> ${value}</p>`;
        }
        return detailsHtml;
    }

    renderEditForm(data) {
        let formHtml = '<form id="editForm">';
        for (const [key, value] of Object.entries(data)) {
            formHtml += `
                <div class="mb-3">
                    <label class="form-label">${key}</label>
                    <input type="text" class="form-control" name="${key}" value="${value}">
                </div>
            `;
        }
        formHtml += '</form>';
        return formHtml;
    }

    getFormData() {
        const form = document.getElementById('editForm');
        const formData = new FormData(form);
        const data = {};
        formData.forEach((value, key) => {
            data[key] = value;
        });
        return data;
    }
}
