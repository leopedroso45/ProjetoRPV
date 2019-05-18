$(document).ready(function () {


    $(".cadastrar").click(function ()
    {
        var descricao = $("#descricao").val();
        var causa = $("#causa").val();
        var culpado = $("#culpado").val();
        var custo = $("#custo").val();

        $.ajax({
            type: "POST",
            url: baseUrl + 'sinistro/index',
            async: false,
            data: {descricao: descricao, causa: causa, culpado: culpado, custo: custo,
            },

            success: function () {
                $(".alert-success").removeAttr("style");
                location.reload();
                alert($descricao);
                alert('Cadastrado!');
            },
            error: function () {
                alert("Error");
            }
        });
    });
});