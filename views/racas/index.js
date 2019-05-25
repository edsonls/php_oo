$(function () {
    getList();
});

function getList() {
    let listBody = '';
    $.ajax(
        {
            url: 'controller.php',
            type: 'POST',
            data: {op: 1},
            success: function (data) {
                $.each(data, function (i, value) {
                    console.log(value);
                    listBody += `<tr>
                                    <td>${value.id}</td>
                                    <td>${value.nome}</td>
                                    <td>
                                        <button class="btn btn-success btn-sm" onclick="edit(${value.id})">Edite</button>
                                        <button class="btn btn-danger btn-sm" onclick="delet(${value.id})">Deletar</button>
                                    </td>
                                 </tr>`;
                });
                $('#listRacas').html(listBody);
            }
        }
    );
}

function edit(id) {
//todo
}

function delet(id) {
//todo
}