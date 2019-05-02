function editarBeneficio(id, situacao) {
    var id1 = id;
    var situacao1 = situacao;

    $.ajax({
        type: "POST",
        url: "http://localhost/ProjetoRPV/public/update.php?id=" + id1 + "&situacao=" + situacao1 + "",
        async: false,
        data: {id: id,
            situacao: situacao
        },
        success: function () {
            location.reload();
        },
        error: function () {
            alert(Error);
        }
    });
}
