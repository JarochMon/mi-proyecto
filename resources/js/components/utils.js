// components/utils.js

export function showLoader(indicatorElement) {
    if (indicatorElement) {
      indicatorElement.style.display = 'block';
    }
  }

  export function hideLoader(indicatorElement) {
    if (indicatorElement) {
      indicatorElement.style.display = 'none';
    }
  }

  export function renderEmpty(tbody) {
    tbody.innerHTML = `<tr><td colspan="100%">No se encontraron registros.</td></tr>`;
  }

  export function renderError(tbody, message = 'Error al cargar los datos.') {
    tbody.innerHTML = `<tr><td colspan="100%">${message}</td></tr>`;
  }


 //139 VIANEY
