$(document).ready(function () {
    $('#tarifa').mask('9.99');
    $('#numeroParada').mask('9999');
    $('#modelo').mask('SSSSSSSSSSSSSS');
    $('#marca').mask('SSSSSSSSSSSSSS');
    $('#cor').mask('SSSSSSSSSSSSSSSS');
    $('#banheiro').mask('99');
    $('#arcondicionado').mask('99');
    $('#numero_passageiros').mask('999');
    $('#cpf-cobrador').mask('999999999-99');
});

$(".cadastrarParada").click(function ()
{
    var numeroParada = $("#numeroParada").val();
    var local = $("#local").val();
    var complemento = $("#complemento").val();

    if (numeroParada.length === 0) {
        $(".numeroParada").removeAttr("style");
        $(".local").attr("style", "display:none");

    } else if (local.length === 0) {
        $(".numeroParada").attr("style", "display:none");
        $(".local").removeAttr("style");

    } else {
        $.ajax({
            type: "POST",
            url: baseUrl + 'parada-onibus/index',
            async: false,
            data: {
                numeroParada: numeroParada, local: local,
                complemento: complemento
            },
            success: function () {
                bootbox.alert("Cadastro realizado com sucesso!", function () {
                    location.reload();
                });

                //$(".alert-success").removeAttr("style");
            },
            error: function () {
                alert("error");
            }
        });
    }
});


$(".editarParada").click(function ()
{
    var id = $("#id_parada").val();
    var numeroParada = $("#numeroParada").val();
    var local = $("#local").val();
    var complemento = $("#complemento").val();

    if (numeroParada.length === 0) {
        $(".numeroParada").removeAttr("style");
        $(".local").attr("style", "display:none");

    } else if (local.length === 0) {
        $(".numeroParada").attr("style", "display:none");
        $(".local").removeAttr("style");

    } else {
        $.ajax({
            type: "POST",
            url: baseUrl + 'parada-onibus/editar',
            async: false,
            data: {numeroParada: numeroParada, id: id, local: local,
                complemento: complemento
            },
            success: function () {
                bootbox.alert("Edição realizada com sucesso!", function () {
//                    location.reload();
                });
            },
            error: function () {
                console.log();
            }
        });
    }
});