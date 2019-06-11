$(document).ready(function () {
    $('.datedropper').dateDropper({
        lang: 'pt'
    });

    $('#valor').mask('99,99');
});

$("#alocar_destino").click(function () {

    var id_destino = $("#sel1 option:selected").val();
    var descricao = $("#sel1 option:selected").text();

    document.getElementById("descricao_destino").value = descricao;
    document.getElementById("descricao_destino").src = id_destino;
});

$("#alocar_poltrona").click(function () {
    var poltronas = [];

//        Coletando todos onibus selecionados
    $('.selecionada').each(function () {
        poltronas.push($(this).attr("value"));
    });

    document.getElementById("descricao_poltrona").value = poltronas;
    document.getElementById("descricao_poltrona").src = poltronas;
});

$("#alocar_forma_pagamento").click(function () {

    var id_destino = $("#sel3 option:selected").val();
    var descricao = $("#sel3 option:selected").text();

    document.getElementById("descricao_forma_pagamento").value = descricao;
    document.getElementById("descricao_forma_pagamento").src = id_destino;
});

$(".poltrona").click(function () {
    $(this).removeClass("btn-success");
    $(this).addClass("btn-info");
    $(this).addClass("selecionada");
});

$('#passageiro').blur(function () {
    if (this.value.length === 0) {
        $('.passageiro').removeAttr("style");
    } else {
        $('.passageiro').attr("style", "display: none");
    }
});

$('#valor').blur(function () {
    if (this.value.length === 0) {
        $('.valor').removeAttr("style");
    } else {
        $('.valor').attr("style", "display: none");
    }
});

$('#poltrona').blur(function () {
    if (this.value.length === 0) {
        $('.poltrona').removeAttr("style");
    } else {
        $('.poltrona').attr("style", "display: none");
    }
});

$('#descricao_destino').blur(function () {
    if (this.src === "") {
        $('.destino').removeAttr("style");
    } else {
        $('.destino').attr("style", "display: none");
    }
});

$('#forma_pagamento').blur(function () {
    if (this.src === "") {
        $('.forma_pagamento').removeAttr("style");
    } else {
        $('.forma_pagamento').attr("style", "display: none");
    }
});

$(".cadastrar_compra").click(function () {
//    alert();

    var id_linha = $("#descricao_destino").attr("src");
    var id_usuario = $("#id_usuario").val();
//    var id_poltrona = $("#descricao_poltrona").attr("src");
    var id_forma_pagamento = $("#descricao_forma_pagamento").attr("src");
    var validade = $("#data_inicio").val();
    var passageiro = $("#passageiro").val();
    var valor = $("#valor").val();
    var data = $("#data_inicio").val();
    var seguro = "";
    var beneficio = "";
    var poltronas = [];

    if ($(".seguro-on").hasClass("active")) {
        seguro = "SIM";
    } else if ($(".seguro-off").hasClass("active")) {
        seguro = "NÃO";
    }

    if ($(".inteira").hasClass("active")) {
        beneficio = "INTEIRA";
    } else if ($(".meia").hasClass("active")) {
        beneficio = "MEIA";
    } else if ($(".isenta").hasClass("active")) {
        beneficio = "ISENTA";
    }



//        Coletando todos onibus selecionados
    $('.selecionada').each(function () {
        poltronas.push($(this).attr("value"));
    });

//    alert(seguro +' '+ beneficio);

//    alert(id_linha +' '+ id_usuario +' '+ id_poltrona +' '+ id_forma_pagamento +' '+ validade +' '+ valor +' '+ seguro +' '+ beneficio);

    if (valor.length === 0 && passageiro.length === 0) {
        $('.valor').removeAttr("style");
        $('.passageiro').removeAttr("style");

    } else if (valor.length === 0) {
        $('.valor').removeAttr("style");

    } else if (passageiro.length === 0) {
        $('.passageiro').removeAttr("style");

    } else {

        $.ajax({
            type: 'POST',
            url: baseUrl + 'compra/index',
            async: false,
            data: {id_linha: id_linha, id_usuario: id_usuario, id_poltrona: poltronas,
                id_forma_pagamento: id_forma_pagamento, passageiro: passageiro, data: data,
                validade: validade, valor: valor, seguro: seguro, beneficio: beneficio
            },
            beforeSend: function () {
                setTimeout(function () {
                    $('.img-loading').addClass("hidden");
                }, 1000);
            },
            success: function () {
                bootbox.alert({
                    message: "Cadastro realizado com sucesso.",
                    callback: function () {
                        location.reload();
                    }
                });

            },
            error: function () {
//                alert('error');
            }
        });
    }

});

function editarSeguro(id, seguro) {
//        alert(id + " " + seguro);

    $.ajax({
        type: "POST",
        url: baseUrl + 'compra/editar-seguro',
        async: false,
        data: {id: id,
            seguro: seguro
        },
        success: function () {
//                alert(id + " " + status);
        },
        error: function () {
//                alert("error");
        }
    });
}

function editarDesconto(id, desconto) {
//        alert(id + " " + desconto);

    $.ajax({
        type: "POST",
        url: baseUrl + 'compra/editar-desconto',
        async: false,
        data: {id: id,
            desconto: desconto
        },
        success: function () {
//                alert(id + " " + status);
        },
        error: function () {
//                alert("error");
        }
    });
}