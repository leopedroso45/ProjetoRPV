$(document).ready(function () {
    $('#peso').mask('9.99');
    $('#tamanho').mask('9.99');
    $('#marca').mask('SSSSSSSSSSSSSS');
    $('#cor').mask('SSSSSSSSSSSSSSSS');
    $('#banheiro').mask('99');
    $('#arcondicionado').mask('99');
    $('#numero_passageiros').mask('999');
    $('#cpf-cobrador').mask('999999999-99');
});


$(".editarTarifaFrete").click(function ()
{
    var id = $("#id_tarifa").val();
    var peso = $("#peso").val();
    var tamanho = $("#tamanho").val();
    var observacao = $("#observacao").val();

    if (peso.length === 0) {
        $(".peso").removeAttr("style");
        $(".tamanho").attr("style", "display:none");

    } else if (tamanho.length === 0) {
        $(".peso").attr("style", "display:none");
        $(".tamanho").removeAttr("style");

    } else {
        $.ajax({
            type: "POST",
            url: baseUrl + 'tarifa-frete/index',
            async: false,
            data: {id: id, peso: peso, tamanho: tamanho, observacao: observacao
            },
            success: function () {
                bootbox.alert("Edição realizada com sucesso!", function () {
                    location.reload();
                });
            },
            error: function () {
                console.log();
            }
        });
    }
});