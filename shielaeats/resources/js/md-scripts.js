$(document).ready(function () {
    $('#companyTable').DataTable();
    $('.dataTables_length').addClass('bs-select');
  });

document.querySelectorAll('.form-outline').forEach((formOutline) => {
    new mdb.Input(formOutline).init();
});




function productUpdate() {
    productAddToTable();
    console.log('test');
}

function productAddToTable() {
    let row = parseInt($('#companyTable >tbody >tr').length + 1);
    let company = $("#companyField").val();
    let office = $("#officeField").val();
    let employee = $("#employeeField").val();
    // First check if a <tbody> tag exists, add one if not
    if ($("#companyTable tbody").length == 0) {
        $("#companyTable").append("<tbody></tbody>");
    }

    // Append product to the table
    $("#companyTable tbody").append(`
    <tr id='${row}'>
        <th scope='row'>${row}</th>
        <td>${company}</td>
        <td>${office}</td>
        <td>${employee}</td>
        <td>
            <i class="fas fa-edit"></i>
            <i class="fas fa-trash"></i>
        </td>
    </tr>`)
}

