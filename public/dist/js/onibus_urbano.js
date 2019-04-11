/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$('#placa').mask('SSSAAAA');
$('#ano').mask('9999');
$('#km').mask('99999999');
$('#renavam').mask('99999999999'); //11
$('#chassi').mask('99999999999999999'); //17
$('#modelo').mask('AAAAAAAAAAAAAAAAAAAAAAAAAA');
$('#marca').mask('SSSSSSSSSSSSSSSSS');
$('#cor').mask('SSSSSSSSSSSSSSSS');
$('#banheiro').mask('99');
$('#arcondicionado').mask('99');
$('#numero_passageiros').mask('999');
$('#numero_assentos').mask('999');

$(document).on('click', '.clickable', function (e) {
//    alert();
    var $this = $(this);
    if (!$this.hasClass('card-collapsed')) {
        $this.parents('.card').find('.card-body').slideUp();
        $this.addClass('card-collapsed');
//        $this.find('i').removeClass('glyphicon-chevron-down').addClass('glyphicon-chevron-up');

    } else {
        $this.parents('.card').find('.card-body').slideDown();
        $this.removeClass('card-collapsed');
//        $this.find('i').removeClass('glyphicon-chevron-up').addClass('glyphicon-chevron-down');

    }
});

$('#placa').blur(function () {

    if (this.value.length === 0) {
        $('.placa').removeAttr("style");
        $('.placa_tamanho').attr("style", "display: none");

    } else if (this.value.length < 7) {
        $('.placa').attr("style", "display: none");
        $('.placa_tamanho').removeAttr("style");

    } else {
        $('.placa_tamanho').attr("style", "display: none");
        $('.placa').attr("style", "display: none");
    }
});

$('#ano').blur(function () {
    if (this.value.length === 0) {
        $('.ano').removeAttr("style");
        $('.ano_tamanho').attr("style", "display: none");

    } else if (this.value.length < 4) {
        $('.ano').attr("style", "display: none");
        $('.ano_tamanho').removeAttr("style");

    } else {
        $('.ano_tamanho').attr("style", "display: none");
        $('.ano').attr("style", "display: none");
    }
});

//Capacidade
$('#numero_passageiros').blur(function () {
    var numero_assentos = document.getElementById("numero_assentos").value;
    var numero_passageiros = document.getElementById("numero_passageiros").value;

    if (this.value.length === 0) {
        $('.numero_passageiros').removeAttr("style");
        $('.numero_passageiros_maximo').attr("style", "display: none");

    } else if (numero_passageiros < numero_assentos) {
        $('.numero_passageiros_maximo').removeAttr("style");
        $('.numero_passageiros').attr("style", "display: none");

    } else {
        $('.numero_passageiros_maximo').attr("style", "display: none");
        $('.numero_passageiros').attr("style", "display: none");
    }
});

$('#numero_assentos').blur(function () {
    var numero_passageiros = document.getElementById("numero_passageiros").value;
    var numero_assentos = document.getElementById("numero_assentos").value;

    if (this.value.length === 0) {
        $('.numero_assentos').removeAttr("style");
        $('.numero_assentos_maximo').attr("style", "display: none");

    } else if (numero_assentos > numero_passageiros) {
        $('.numero_assentos_maximo').removeAttr("style");
        $('.numero_assentos').attr("style", "display: none");

    } else {
        $('.numero_assentos_maximo').attr("style", "display: none");
        $('.numero_assentos').attr("style", "display: none");
    }
});

$('#chassi').blur(function () {
    if (this.value.length === 0) {
        $('.chassi').removeAttr("style");
        $('.chassi_tamanho').attr("style", "display: none");

    } else if (this.value.length < 17) {
        $('.chassi').attr("style", "display: none");
        $('.chassi_tamanho').removeAttr("style");

    } else {
        $('.chassi_tamanho').attr("style", "display: none");
        $('.chassi').attr("style", "display: none");
    }
});

$('#km').blur(function () {
    if (this.value.length === 0) {
        $('.km').removeAttr("style");
    } else {
        $('.km').attr("style", "display: none");
    }
});

$('#renavam').blur(function () {
    if (this.value.length === 0) {
        $('.renavam').removeAttr("style");
        $('.renavam').attr("style", "display: none");

    } else if (this.value.length < 11) {
        $('.renavam').attr("style", "display: none");
        $('.renavam_tamanho').removeAttr("style");

    } else {
        $('.renavam_tamanho').attr("style", "display: none");
        $('.renavam').attr("style", "display: none");
    }
});

$('#cor').blur(function () {
    if (this.value.length === 0) {
        $('.cor').removeAttr("style");
    } else {
        $('.cor').attr("style", "display: none");
    }
});

$('#marca').blur(function () {
    if (this.value.length === 0) {
        $('.marca').removeAttr("style");
    } else {
        $('.marca').attr("style", "display: none");
    }
});

$('#modelo').blur(function () {
    if (this.value.length === 0) {
        $('.modelo').removeAttr("style");
    } else {
        $('.modelo').attr("style", "display: none");
    }
});

$(".cadastrar-onibus-urbano").click(function ()
{
    $('.img-loading').removeClass("hidden");

    var placa = $("#placa").val();
    var ano = $("#ano").val();
    var numero_passageiros = $("#numero_passageiros").val();
    var numero_assentos = $("#numero_assentos").val();
    var chassi = $("#chassi").val();
    var km = $("#km").val();
    var renavam = $("#renavam").val();
    var cor = $("#cor").val();
    var marca = $("#marca").val();
    var modelo = $("#modelo").val();


    if (placa.length === 0 && ano.length === 0 && numero_passageiros.length === 0 &&
            numero_assentos.length === 0 && chassi.length === 0 && km.length === 0 &&
            renavam.length === 0 && cor.length === 0 && marca.length === 0 &&
            modelo.length === 0) {
        setTimeout(function () {
            $('.placa').removeAttr("style");
            $('.ano').removeAttr("style");
            $('.numero_passageiros').removeAttr("style");
            $('.numero_assentos').removeAttr("style");
            $('.chassi').removeAttr("style", "display: none");
            $('.km').removeAttr("style");
            $('.renavam').removeAttr("style");
            $('.cor').removeAttr("style");
            $('.marca').removeAttr("style");
            $('.modelo').removeAttr("style");
            setTimeout(function () {
                $('.img-loading').addClass("hidden");
            }, 1000);
        }, 1000);

    } else if (placa.length === 0) {
        $('.placa').removeAttr("style");
        $('.placa_tamanho').attr("style", "display: none");
        setTimeout(function () {
            $('.img-loading').addClass("hidden");
        }, 1000);
    } else if (placa.length < 7) {
        $('.placa_tamanho').removeAttr("style");
        setTimeout(function () {
            $('.img-loading').addClass("hidden");
        }, 1000);
    } else if (ano.length === 0) {
        $('.ano').removeAttr("style");
        setTimeout(function () {
            $('.img-loading').addClass("hidden");
        }, 1000);
    } else if (ano.length < 4) {
        $('.ano_tamanho').removeAttr("style");
        setTimeout(function () {
            $('.img-loading').addClass("hidden");
        }, 1000);
    } else if (numero_passageiros.length === 0) {
        $('.numero_passageiros').removeAttr("style");
        setTimeout(function () {
            $('.img-loading').addClass("hidden");
        }, 1000);
    } else if (numero_passageiros < numero_assentos) {
        $('.numero_assentos_maximo').removeAttr("style");
        $('.numero_passageiros_maximo').removeAttr("style");
        setTimeout(function () {
            $('.img-loading').addClass("hidden");
        }, 1000);
    } else if (numero_assentos.length === 0) {
        $('.numero_assentos').removeAttr("style");
        setTimeout(function () {
            $('.img-loading').addClass("hidden");
        }, 1000);
    } else if (chassi.length === 0) {
        $('.chassi').removeAttr("style", "display: none");
        setTimeout(function () {
            $('.img-loading').addClass("hidden");
        }, 1000);
    } else if (chassi.length < 17) {
        $('.chassi_tamanho').removeAttr("style");
        setTimeout(function () {
            $('.img-loading').addClass("hidden");
        }, 1000);
    } else if (km.length === 0) {
        $('.km').removeAttr("style");
        setTimeout(function () {
            $('.img-loading').addClass("hidden");
        }, 1000);
    } else if (renavam.length === 0) {
        $('.renavam').removeAttr("style");
        setTimeout(function () {
            $('.img-loading').addClass("hidden");
        }, 1000);
    } else if (renavam.length < 7) {
        $('.renavam_tamanho').removeAttr("style");
        setTimeout(function () {
            $('.img-loading').addClass("hidden");
        }, 1000);
    } else if (cor.length === 0) {
        $('.cor').removeAttr("style");
        setTimeout(function () {
            $('.img-loading').addClass("hidden");
        }, 1000);
    } else if (marca.length === 0) {
        $('.marca').removeAttr("style");
        setTimeout(function () {
            $('.img-loading').addClass("hidden");
        }, 1000);
    } else if (modelo.length === 0) {
        $('.modelo').removeAttr("style");
        setTimeout(function () {
            $('.img-loading').addClass("hidden");
        }, 1000);
    } else {
        $.ajax({
            type: "POST",
            url: baseUrl + 'onibus-urbano/index',
            async: false,
            data: {placa: placa, ano: ano, numero_passageiros: numero_passageiros,
                numero_assentos: numero_assentos, chassi: chassi, km: km,
                renavam: renavam, cor: cor, marca: marca, modelo: modelo
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
                alert('error');
            },
            complete: function () {
            }
        });
    }
});


$(".editar-onibus-urbano").click(function ()
{
    $('.img-loading').removeClass("hidden");

    var id = $("#id_onibus_urbano").val();
    var placa = $("#placa").val();
    var ano = $("#ano").val();
    var numero_passageiros = $("#numero_passageiros").val();
    var numero_assentos = $("#numero_assentos").val();
    var chassi = $("#chassi").val();
    var km = $("#km").val();
    var renavam = $("#renavam").val();
    var cor = $("#cor").val();
    var marca = $("#marca").val();
    var modelo = $("#modelo").val();


    if (placa.length === 0 && ano.length === 0 && numero_passageiros.length === 0 &&
            numero_assentos.length === 0 && chassi.length === 0 && km.length === 0 &&
            renavam.length === 0 && cor.length === 0 && marca.length === 0 &&
            modelo.length === 0) {
        setTimeout(function () {
            $('.placa').removeAttr("style");
            $('.ano').removeAttr("style");
            $('.numero_passageiros').removeAttr("style");
            $('.numero_assentos').removeAttr("style");
            $('.chassi').removeAttr("style", "display: none");
            $('.km').removeAttr("style");
            $('.renavam').removeAttr("style");
            $('.cor').removeAttr("style");
            $('.marca').removeAttr("style");
            $('.modelo').removeAttr("style");
            setTimeout(function () {
                $('.img-loading').addClass("hidden");
            }, 1000);
        }, 1000);

    } else if (placa.length === 0) {
        $('.placa').removeAttr("style");
        $('.placa_tamanho').attr("style", "display: none");
        setTimeout(function () {
            $('.img-loading').addClass("hidden");
        }, 1000);
    } else if (placa.length < 7) {
        $('.placa_tamanho').removeAttr("style");
        setTimeout(function () {
            $('.img-loading').addClass("hidden");
        }, 1000);
    } else if (ano.length === 0) {
        $('.ano').removeAttr("style");
        setTimeout(function () {
            $('.img-loading').addClass("hidden");
        }, 1000);
    } else if (ano.length < 4) {
        $('.ano_tamanho').removeAttr("style");
        setTimeout(function () {
            $('.img-loading').addClass("hidden");
        }, 1000);
    } else if (numero_passageiros.length === 0) {
        $('.numero_passageiros').removeAttr("style");
        setTimeout(function () {
            $('.img-loading').addClass("hidden");
        }, 1000);
    } else if (numero_passageiros < numero_assentos) {
        $('.numero_assentos_maximo').removeAttr("style");
        $('.numero_passageiros_maximo').removeAttr("style");
        setTimeout(function () {
            $('.img-loading').addClass("hidden");
        }, 1000);
    } else if (numero_assentos.length === 0) {
        $('.numero_assentos').removeAttr("style");
        setTimeout(function () {
            $('.img-loading').addClass("hidden");
        }, 1000);
    } else if (chassi.length === 0) {
        $('.chassi').removeAttr("style", "display: none");
        setTimeout(function () {
            $('.img-loading').addClass("hidden");
        }, 1000);
    } else if (chassi.length < 17) {
        $('.chassi_tamanho').removeAttr("style");
        setTimeout(function () {
            $('.img-loading').addClass("hidden");
        }, 1000);
    } else if (km.length === 0) {
        $('.km').removeAttr("style");
        setTimeout(function () {
            $('.img-loading').addClass("hidden");
        }, 1000);
    } else if (renavam.length === 0) {
        $('.renavam').removeAttr("style");
        setTimeout(function () {
            $('.img-loading').addClass("hidden");
        }, 1000);
    } else if (renavam.length < 7) {
        $('.renavam_tamanho').removeAttr("style");
        setTimeout(function () {
            $('.img-loading').addClass("hidden");
        }, 1000);
    } else if (cor.length === 0) {
        $('.cor').removeAttr("style");
        setTimeout(function () {
            $('.img-loading').addClass("hidden");
        }, 1000);
    } else if (marca.length === 0) {
        $('.marca').removeAttr("style");
        setTimeout(function () {
            $('.img-loading').addClass("hidden");
        }, 1000);
    } else if (modelo.length === 0) {
        $('.modelo').removeAttr("style");
        setTimeout(function () {
            $('.img-loading').addClass("hidden");
        }, 1000);
    } else {
        $.ajax({
            type: "POST",
            url: baseUrl + 'onibus-urbano/editar',
            async: false,
            data: {placa: placa, ano: ano, numero_passageiros: numero_passageiros,
                numero_assentos: numero_assentos, chassi: chassi, km: km,
                renavam: renavam, cor: cor, marca: marca, modelo: modelo,
                id: id
            },
            beforeSend: function () {
                setTimeout(function () {
                    $('.img-loading').addClass("hidden");
                }, 1000);

            },
            success: function () {
//                setTimeout(function () {}, 2000);

                bootbox.alert({
                    message: "Alteração realizada com sucesso.",
                    callback: function () {
                        location.reload();
                    }
                });
            },
            error: function () {
                alert('error');
            },
            complete: function () {

            }
        });
    }
});

function editarStatus(id, situacao) {
//        alert(id + " " + status);

    $.ajax({
        type: "POST",
        url: baseUrl + 'onibus-urbano/editar-situacao',
        async: false,
        data: {id: id,
            situacao: situacao
        },
        success: function () {
//                alert(id + " " + status);
        },
        error: function () {
//                alert("error");
        }
    });
}