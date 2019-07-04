$(document).ready(function () {
    //$('#nome_promocao').mask('SSSSSSS');
    //$('#descricao_promocao').mask('SSSSSSSSSSSSSSS');
    $('#valor_promocao').mask('99.99');
});

$(".cadastrarPromocao").click(function (){

    var nome_promocao = $("#nome_promocao").val();
    var descricao_promocao = $("#descricao_promocao").val();
    var valor_promocao = $("#valor_promocao").val();

    $.ajax({
        type: "POST",
        url: baseUrl + 'promocao/index',
        async: false,
        data: {nome_promocao: nome_promocao, descricao_promocao: descricao_promocao, valor_promocao: valor_promocao},
        success: function () {
            bootbox.alert("Cadastro realizado com sucesso!", function () {
                location.reload();
            });
        },
        error: function (error) {
            alert('Algo deu errado: ' + error, function(){
                location.reload();
            });
        },
    });
});