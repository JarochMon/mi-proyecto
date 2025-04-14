<div class="modal fade" id="dynamicModal" tabindex="-1" aria-labelledby="dynamicModal" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="dynamicModalTitle">Título dinámico</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="dynamicModalBody">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" id="dynamicModalActionBtn" class="btn btn-primary">Confirmar</button>            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
    const modal = new bootstrap.Modal(document.getElementById('dynamicModal'));
    const modalTitle = document.getElementById('dynamicModalTitle');
    const modalBody = document.getElementById('dynamicModalBody');
    const actionBtn = document.getElementById('dynamicModalActionBtn');

    // Evento para todos los botones que abren el modal
    document.querySelectorAll('.modal-trigger').forEach(button => {
        button.addEventListener('click', function() {
            const action = this.getAttribute('data-action');
            const id = this.getAttribute('data-empleado-id');
            const nombre = this.getAttribute('data-empleado-nombre');



            switch(action) {
                case 'editar':
                    setupRegistrarModal();
                    break;
                case 'ver':
                    setupVerModal(id, nombre);
                    break;
                case 'borrar':
                    setupBorrarModal(id, nombre);
                    break;
            }
        });
    });

    // Configuración para cada acción
    function setupRegistrarModal() {
        modalTitle.textContent = 'Editar Empleado';
        modalBody.innerHTML =
                `<label for="" class="col-6 col-form-label col-form-label-lg">Datos Personales</label>
                <div class="row g-2">
                    <div class="col-lg-4 col-md-6 col-sm-12 form-floating">
                        <input type="text" id="disabledTextInput" class="form-control" placeholder="Javier">
                        <label for="floatingInput">Nombre(s)</label>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 form-floating">
                        <input type="text" id="disabledTextInput" class="form-control" placeholder="Jimenez">
                        <label for="floatingInput">Apellido Paterno</label>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 form-floating">
                        <input type="text" id="disabledTextInput" class="form-control" placeholder="Lopez">
                        <label for="floatingInput">Apellido Materna</label>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 form-floating">
                        <input type="text" id="disabledTextInput" class="form-control" placeholder="2727371829">
                        <label for="floatingInput">Telefono</label>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 form-floating">
                        <input type="text" id="disabledTextInput" class="form-control" placeholder="ejemplo@correo.com">
                        <label for="floatingInput">Correo</label>
                    </div>
                </div>
                <hr>
                <label for="" class="col-6 col-form-label col-form-label-lg">Direccion</label>
                <div class="row g-2">
                    <div class="col-lg-4 col-md-6 col-sm-12 form-floating">
                        <input type="text" id="disabledTextInput" class="form-control" placeholder="Avenida Benitez">
                        <label for="floatingInput">Calle</label>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 form-floating">
                        <input type="text" id="disabledTextInput" class="form-control" placeholder="Norte 10 y Norte 8">
                        <label for="floatingInput">Entre calles</label>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 form-floating">
                        <input type="text" id="disabledTextInput" class="form-control" placeholder="2">
                        <label for="floatingInput">Numero:</label>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 form-floating">
                        <input type="text" id="disabledTextInput" class="form-control" placeholder="Casa color naranja">
                        <label for="floatingInput">Referencia</label>
                    </div>
                </div>`;
        actionBtn.textContent = 'Editar';
        actionBtn.className = 'btn btn-primary';
        actionBtn.onclick = () => {
            alert('Lógica para registrar');
            modal.hide();
        };
    }

    function setupVerModal(id, nombre) {
        modalTitle.textContent = `Detalles de Empleado`;
        modalBody.innerHTML =
                `<label for="" class="col-6 col-form-label col-form-label-lg">Datos Personales</label>
                <div class="row g-2">
                    <div class="col-lg-4 col-md-6 col-sm-12 form-floating">
                        <input type="text" id="disabledTextInput" class="form-control" value="Javier" disabled>
                        <label for="floatingInput">Nombre(s)</label>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 form-floating">
                        <input type="text" id="disabledTextInput" class="form-control" value="Jimenez" disabled>
                        <label for="floatingInput">Apellido Paterno</label>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 form-floating">
                        <input type="text" id="disabledTextInput" class="form-control" value="Lopez" disabled>
                        <label for="floatingInput">Apellido Materna</label>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 form-floating">
                        <input type="text" id="disabledTextInput" class="form-control" value="2727371829" disabled>
                        <label for="floatingInput">Telefono</label>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 form-floating">
                        <input type="text" id="disabledTextInput" class="form-control" value="ejemplo@correo.com" disabled>
                        <label for="floatingInput">Correo</label>
                    </div>
                </div>
                <hr>
                <label for="" class="col-6 col-form-label col-form-label-lg">Direccion</label>
                <div class="row g-2">
                    <div class="col-lg-4 col-md-6 col-sm-12 form-floating">
                        <input type="text" id="disabledTextInput" class="form-control" value="Avenida Benitez" disabled>
                        <label for="floatingInput">Calle</label>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 form-floating">
                        <input type="text" id="disabledTextInput" class="form-control" value="Norte 10 y Norte 8" disabled>
                        <label for="floatingInput">Entre calles</label>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 form-floating">
                        <input type="text" id="disabledTextInput" class="form-control" value="2" disabled>
                        <label for="floatingInput">Numero:</label>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 form-floating">
                        <input type="text" id="disabledTextInput" class="form-control" value="Casa color naranja" disabled>
                        <label for="floatingInput">Referencia</label>
                    </div>
                </div>`;
        actionBtn.style.display = 'none'; // Ocultar botón en modo "Ver"
    }

    function setupBorrarModal(id, nombre) {
        modalTitle.textContent = 'Confirmar Eliminación';
        modalBody.innerHTML = `
            <p>¿Estás seguro de eliminar a <strong>${nombre}</strong></p>
            <p class="text-danger">Esta acción no se puede deshacer.</p>
        `;
        actionBtn.textContent = 'Confirmar Borrado';
        actionBtn.className = 'btn btn-danger';
        actionBtn.style.display = 'block';
        actionBtn.onclick = () => {
            alert(`Lógica para borrar ID: ${id}`);
            modal.hide();
        };
    }
});
</script>
