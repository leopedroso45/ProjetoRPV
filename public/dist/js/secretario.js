$('#placa').mask('AAA-9999');
$('#ano').mask('9999');
$('#km').mask('99999999');
$('#renavam').mask('99999999999'); //11
$('#chassi').mask('99999999999999999'); //17
$('#modelo').mask('SSSSSSSSSSSSSS');
$('#marca').mask('SSSSSSSSSSSSSS');
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

//var auto_refresh = setInterval (function () {
//    $.ajax({
//        url: baseUrl + 'onibus-urbano/index',
//        success: function (response) {
//            $('.dataTable').html(response);
//        }
//    });
//}, 3000);

//     setInterval(function(){
//            $(".dataTable").load()
//        }, 1000);

$(".cadastrar-onibus-urbano").click(function ()
{
    var placa = $("#placa").val();
    var ano = $("#ano").val();
    var situacao = $("#situacao").val();
    var numero_assentos = $("#numero_assentos").val();
    var numero_passageiros = $("#numero_passageiros").val();
    var chassi = $("#chassi").val();
    var km = $("#km").val();
    var renavam = $("#renavam").val();
    var cor = $("#cor").val();
    var marca = $("#marca").val();
    var modelo = $("#modelo").val();

    if (placa.length < 7) {
        $('.placa').removeClass('hidden');
        $('.alert-success').addClass('hidden');

    } else {
        $.ajax({
            type: "POST",
            url: baseUrl + 'onibus-urbano/index',
            async: false,
            data: {placa: placa, ano: ano, situacao: situacao,
                numero_assentos: numero_assentos, numero_passageiros: numero_passageiros,
                chassi: chassi, km: km, renavam: renavam, cor: cor, marca: marca,
                modelo: modelo
            },
            success: function () {
                $(".alert-success").removeAttr("style");
            },
            error: function () {
                alert("error");
            }
        });
    }
});
//
//$(".cadastrar-onibus-").click(function ()
//{
//    var placa = $("#placa").val();
//    var ano = $("#ano").val();
//    var situacao = $("#situacao").val();
//    var numero_assentos = $("#numero_assentos").val();
//    var numero_passageiros = $("#numero_passageiros").val();
//    var chassi = $("#chassi").val();
//    var km = $("#km").val();
//    var email = $("#ano").val();
//    var cpf = $("#situacao").val();
//    var senha = $("#numero_assentos").val();
//    var telefone = $("#numero_passageiros").val();
//    var repetir_senha = $("#chassi").val();
//
//    if (nome.length < 10) {
//        $('.nome').removeClass('hidden');
//        $('.alert-success').addClass('hidden');
//
//    } else if (email.length < 10) {
//        $('.nome').addClass('hidden');
//        $('.email').removeClass('hidden');
//        $('.alert-success').addClass('hidden');
//
//    } else if (cpf.length < 11) {
//        $('.email').addClass('hidden');
//        $('.cpf').removeClass('hidden');
//        $('.alert-success').addClass('hidden');
//
//    } else if (telefone.length < 11) {
//        $('.cpf').addClass('hidden');
//        $('.telefone').removeClass('hidden');
//        $('.alert-success').addClass('hidden');
//
//    } else if (senha.length < 8) {
//        $('.telefone').addClass('hidden');
//        $('.tamanho').removeClass('hidden');
//        $('.alert-success').addClass('hidden');
//
//    } else if (senha !== repetir_senha) {
//        $('.tamanho').addClass('hidden');
//        $('.diferente').removeClass('hidden');
//        $('.alert-success').addClass('hidden');
//
//    } else {
//        $.ajax({
//            type: "POST",
//            url: baseUrl + 'onibus-urbano/index',
//            async: false,
//            data: {nome: nome, email: email, cpf: cpf,
//                senha: senha, telefone: telefone
//            },
//            success: function () {
//                $('.diferente').addClass('hidden');
//                $('.alert-success').removeClass('hidden');
//                document.getElementById("formulario").reset();
//            },
//            error: function () {
//                alert("error");
//            }
//        });
//    }
//});


