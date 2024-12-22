function sortTableSTT(columnIndex) {
    const table = document.querySelector('.table tbody');
    const rows = Array.from(table.rows);

    rows.sort((a, b) => {
        const aValue = parseInt(a.cells[columnIndex].textContent);
        const bValue = parseInt(b.cells[columnIndex].textContent);

        return aValue - bValue;
    });

    rows.forEach(row => table.appendChild(row));
}

let sortDirection = {};

function sortTable(columnIndex) {
    const table = document.querySelector('.table tbody');
    const rows = Array.from(table.rows);

    if (!sortDirection[columnIndex]) {
        sortDirection[columnIndex] = 'asc';
    } else {
        sortDirection[columnIndex] = sortDirection[columnIndex] === 'asc' ? 'desc' : 'asc';
    }

    rows.sort((a, b) => {
        const aValue = parseFloat(a.cells[columnIndex].textContent.replace(/,/g, '')) || 0;
        const bValue = parseFloat(b.cells[columnIndex].textContent.replace(/,/g, '')) || 0;

        return sortDirection[columnIndex] === 'asc' ? aValue - bValue : bValue - aValue;
    });

    rows.forEach(row => table.appendChild(row));

    document.querySelectorAll('.sort-button').forEach(button => button.classList.remove('desc'));
    const currentButton = document.querySelector(`.sort-button[data-column="${columnIndex}"]`);
    if (sortDirection[columnIndex] === 'desc') {
        currentButton.classList.add('desc');
    }
}