export function renderPaginationComponent(container, pagination, onPageChange) {
    container.innerHTML = ''; // Limpiar paginación previa

    const { current_page, last_page, per_page, total } = pagination;
    const from = (current_page - 1) * per_page + 1;
    const to = Math.min(from + per_page - 1, total);
    console.log('Paginación recibida:', pagination);
    console.log('Valores:', { current_page, last_page, per_page, total });

    const paginationWrapper = document.createElement('div');
    paginationWrapper.className = 'd-flex justify-content-between align-items-center flex-wrap gap-2';

    const ul = document.createElement('ul');
    ul.className = 'pagination mb-0';

    const createPageItem = (label, page, disabled = false, active = false) => {
      const li = document.createElement('li');
      li.className = `page-item ${disabled ? 'disabled' : ''} ${active ? 'active' : ''}`;

      const a = document.createElement('a');
      a.className = 'page-link';
      a.href = '#';
      a.textContent = label;

      if (!disabled && !active) {
        a.addEventListener('click', (e) => {
          e.preventDefault();
          onPageChange(page);
        });
      }

      li.appendChild(a);
      return li;
    };

    ul.appendChild(createPageItem('«', current_page - 1, current_page === 1));

    for (let i = 1; i <= last_page; i++) {
      ul.appendChild(createPageItem(i, i, false, i === current_page));
    }

    ul.appendChild(createPageItem('»', current_page + 1, current_page === last_page));

    const infoText = document.createElement('div');
    infoText.className = 'text-muted ms-auto';
    infoText.textContent = total === 0 ? 'No hay resultados para mostrar' : `Mostrando de ${from} a ${to} de ${total} resultados`;

    paginationWrapper.appendChild(ul);        // Izquierda
    paginationWrapper.appendChild(infoText);  // Derecha

    container.appendChild(paginationWrapper);
  }
