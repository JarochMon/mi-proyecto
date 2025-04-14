<div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
    @if (session('success'))
        <div class="toast show align-items-center text-white bg-success" role="alert" aria-live="assertive" aria-atomic="true" data-bs-autohide="true" data-bs-delay="5000">
            <div class="d-flex">
                <div class="toast-body">
                    {{ session('success') }}
                </div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
        </div>
    @endif

    @if (session('error'))
        <div class="toast show align-items-center text-white bg-danger" role="alert" aria-live="assertive" aria-atomic="true" data-bs-autohide="true" data-bs-delay="5000">
            <div class="d-flex">
                <div class="toast-body">
                    {{ session('error') }}
                </div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
        </div>
    @endif
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {

    const toastElList = document.querySelectorAll('.toast');
    toastElList.forEach(toastEl => {

        console.log(toastElList);
        const toast = new bootstrap.Toast(toastEl, {
            autohide: true,
            delay: 5000
        });

      toast.show();

        // Eliminar el toast del DOM cuando se oculte
        toastEl.addEventListener('hidden.bs.toast', function() {
            toastEl.remove();
        });
    });
});
</script>
