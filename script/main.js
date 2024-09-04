
// Fungsi untuk melakukan pencarian
function cari() {
    var input = document.getElementById('searchInput').value.toLowerCase();
    var tableRows = document.querySelectorAll('.listsearch tr');

    tableRows.forEach(function (row) {
        var cells = row.querySelectorAll('td');
        var found = false;
        cells.forEach(function (cell) {
            if (cell.textContent.toLowerCase().indexOf(input) > -1) {
                found = true;
            }
        });
        if (found) {
            row.style.display = '';
        } else {
            row.style.display = 'none';
        }
    });
}
