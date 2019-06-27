$(document).ready(function () {


    $('#peso').mask('999', {reverse: true});
    $('#altura').mask('999');
    $('#comprimento').mask('999');
    $('#cpfRemetente').mask('999.999.999-99');
    $('#cpfDestinatario').mask('999.999.999-99');
    $('#largura').mask('999');
    $('#cepRemetente').mask('99999-000');
    $('#cepDestinatario').mask('99999-000');
    $('#celularRemetente').mask('(99) 99999-9999');
    $('#celularDestinatario').mask('(99) 99999-9999');
    $('#numeroDestinatario').mask('9999');

    $("#nomeProduto").blur(function ()
    {
        if (this.value.length === 0) {
            $('.nomeProduto').removeClass('hidden');
        } else {
            $('.nomeProduto').addClass('hidden');
        }
    });

    $("#altura").blur(function ()
    {
        var altura = $("#altura").val();
        if (altura.length === 0) {
            $('.altura').removeClass('hidden');
        } else {
            $('.altura').addClass('hidden');
        }
    });

    $("#largura").blur(function ()
    {
        var largura = $("#largura").val();
        if (largura.length === 0) {
            $('.largura').removeClass('hidden');
        } else {
            $('.largura').addClass('hidden');
        }
    });

    $("#comprimento").blur(function ()
    {
        var comprimento = $("#comprimento").val();
        if (comprimento.length === 0) {
            $('.comprimento').removeClass('hidden');
        } else {
            $('.comprimento').addClass('hidden');
        }
    });

    $("#peso").blur(function ()
    {
        var peso = $("#peso").val();
        if (peso.length === 0) {
            $('.peso').removeClass('hidden');
        } else {
            $('.peso').addClass('hidden');
        }
    });

    $("#nomeRemetente").blur(function ()
    {
        var nomeRemetente = $("#nomeRemetente").val();
        if (nomeRemetente.length === 0) {
            $('.nomeRemetente').removeClass('hidden');
        } else {
            $('.nomeRemetente').addClass('hidden');
        }
    });

    $("#cpfRemetente").blur(function ()
    {
        var cpfRemetente = $("#cpfRemetente").val();
        if (cpfRemetente.length < 14) {
            $('.cpfRemetente').removeClass('hidden');
        } else {
            $('.cpfRemetente').addClass('hidden');
        }
    });

    $("#ruaRemetente ").blur(function ()
    {
        var ruaRemetente = $("#ruaRemetente ").val();
        if (ruaRemetente.length === 0) {
            $('.ruaRemetente ').removeClass('hidden');
        } else {
            $('.ruaRemetente ').addClass('hidden');
        }
    });

    $("#bairroRemetente ").blur(function ()
    {
        var bairroRemetente = $("#bairroRemetente ").val();
        if (bairroRemetente.length === 0) {
            $('.bairroRemetente ').removeClass('hidden');
        } else {
            $('.bairroRemetente ').addClass('hidden');
        }
    });

    $("#cepRemetente ").blur(function ()
    {
        var cepRemetente = $("#cepRemetente ").val();
        if (cepRemetente.length === 0) {
            $('.cepRemetente ').removeClass('hidden');
        } else {
            $('.cepRemetente ').addClass('hidden');
        }
    });

    $("#cidadeRemetente ").blur(function ()
    {
        var cidadeRemetente = $("#cidadeRemetente ").val();
        if (cidadeRemetente.length === 0) {
            $('.cidadeRemetente ').removeClass('hidden');
        } else {
            $('.cidadeRemetente ').addClass('hidden');
        }
    });

    $("#celularRemetente ").blur(function ()
    {
        var celularRemetente = $("#celularRemetente ").val();
        if (celularRemetente.length === 0) {
            $('.celularRemetente ').removeClass('hidden');
        } else {
            $('.celularRemetente ').addClass('hidden');
        }
    });

    $("#nomeDestinatario ").blur(function ()
    {
        var nomeDestinatario = $("#nomeDestinatario ").val();
        if (nomeDestinatario.length === 0) {
            $('.nomeDestinatario ').removeClass('hidden');
        } else {
            $('.nomeDestinatario ').addClass('hidden');
        }
    });

    $("#cpfDestinatario ").blur(function ()
    {
        var cpfDestinatario = $("#cpfDestinatario ").val();
        if (cpfDestinatario.length < 14) {
            $('.cpfDestinatario ').removeClass('hidden');
        } else {
            $('.cpfDestinatario ').addClass('hidden');
        }
    });

    $("#ruaDestinatario ").blur(function ()
    {
        var ruaDestinatario = $("#ruaDestinatario ").val();
        if (ruaDestinatario.length === 0) {
            $('.ruaDestinatario ').removeClass('hidden');
        } else {
            $('.ruaDestinatario ').addClass('hidden');
        }
    });

    $("#numeroDestinatario ").blur(function ()
    {
        var numeroDestinatario = $("#numeroDestinatario ").val();
        if (numeroDestinatario.length === 0) {
            $('.numeroDestinatario ').removeClass('hidden');
        } else {
            $('.numeroDestinatario ').addClass('hidden');
        }
    });

    $("#bairroDestinatario ").blur(function ()
    {
        var bairroDestinatario = $("#bairroDestinatario ").val();
        if (bairroDestinatario.length === 0) {
            $('.bairroDestinatario ').removeClass('hidden');
        } else {
            $('.bairroDestinatario ').addClass('hidden');
        }
    });

    $("#cepDestinatario ").blur(function ()
    {
        var cepDestinatario = $("#cepDestinatario ").val();
        if (cepDestinatario.length === 0) {
            $('.cepDestinatario ').removeClass('hidden');
        } else {
            $('.cepDestinatario ').addClass('hidden');
        }
    });

    $("#cidadeDestinatario ").blur(function ()
    {
        var cidadeDestinatario = $("#cidadeDestinatario ").val();
        if (cidadeDestinatario.length === 0) {
            $('.cidadeDestinatario ').removeClass('hidden');
        } else {
            $('.cidadeDestinatario ').addClass('hidden');
        }
    });

    $("#celularDestinatario ").blur(function ()
    {
        var celularDestinatario = $("#celularDestinatario ").val();
        if (celularDestinatario.length === 0) {
            $('.celularDestinatario ').removeClass('hidden');
        } else {
            $('.celularDestinatario ').addClass('hidden');
        }
    });
});

$(".cadastrar").click(function ()
{
//        alert();
    var nomeProduto = $("#nomeProduto").val();
    var altura = $("#altura").val();
    var largura = $("#largura").val();
    var comprimento = $("#comprimento").val();
    var peso = $("#peso").val();
    var nomeRemetente = $("#nomeRemetente").val();
    var cpfRemetente = $("#cpfRemetente").val();
    var ruaRemetente = $("#ruaRemetente").val();
    var bairroRemetente = $("#bairroRemetente").val();
    var cepRemetente = $("#cepRemetente").val();
    var cidadeRemetente = $("#cidadeRemetente").val();
    var celularRemetente = $("#celularRemetente").val();
    var nomeDestinatario = $("#nomeDestinatario").val();
    var cpfDestinatario = $("#cpfDestinatario").val();
    var ruaDestinatario = $("#ruaDestinatario").val();
    var numeroDestinatario = $("#numeroDestinatario").val();
    var bairroDestinatario = $("#bairroDestinatario").val();
    var cepDestinatario = $("#cepDestinatario").val();
    var cidadeDestinatario = $("#cidadeDestinatario").val();
    var celularDestinatario = $("#celularDestinatario").val();

    if (nomeProduto.length === 0) {
        $('.nomeProduto').removeClass('hidden');
    } else if (altura.length === 0) {
        $('.altura').removeClass('hidden');
    } else if (largura.length === 0) {
        $('.largura').removeClass('hidden');
    } else if (comprimento.length === 0) {
        $('.comprimento').removeClass('hidden');
    } else if (peso.length === 0) {
        $('.peso').removeClass('hidden');
    } else if (nomeRemetente.length === 0) {
        $('.nomeRemetente').removeClass('hidden');
    } else if (cpfRemetente.length === 0) {
        $('.cpfRemetente').removeClass('hidden');
    } else if (ruaRemetente.length === 0) {
        $('.ruaRemetente').removeClass('hidden');
    } else if (bairroRemetente.length === 0) {
        $('.bairroRemetente').removeClass('hidden');
    } else if (cepRemetente.length === 0) {
        $('.cepRemetente').removeClass('hidden');
    } else if (cidadeRemetente.length === 0) {
        $('.cidadeRemetente').removeClass('hidden');
    } else if (celularRemetente.length === 0) {
        $('.celularRemetente').removeClass('hidden');
    } else if (nomeDestinatario.length === 0) {
        $('.nomeDestinatario').removeClass('hidden');
    } else if (cpfDestinatario.length === 0) {
        $('.cpfDestinatario').removeClass('hidden');
    } else if (ruaDestinatario.length === 0) {
        $('.ruaDestinatario').removeClass('hidden');
    } else if (numeroDestinatario.length === 0) {
        $('.numeroDestinatario').removeClass('hidden');
    } else if (bairroDestinatario.length === 0) {
        $('.bairroDestinatario').removeClass('hidden');
    } else if (cepDestinatario.length === 0) {
        $('.cepDestinatario').removeClass('hidden');
    } else if (cidadeDestinatario.length === 0) {
        $('.cidadeDestinatario').removeClass('hidden');
    } else if (celularDestinatario.length === 0) {
        $('.celularDestinatario').removeClass('hidden');
    } else {
        $.ajax({
            type: "POST",
            url: baseUrl + 'encomendas/index',
            async: false,
            data: {nomeProduto: nomeProduto, altura: altura, largura: largura, comprimento: comprimento, peso: peso, nomeRemetente: nomeRemetente, cpfRemetente: cpfRemetente,
                ruaRemetente: ruaRemetente, bairroRemetente: bairroRemetente, cepRemetente: cepRemetente, cidadeRemetente: cidadeRemetente, celularRemetente: celularRemetente,
                nomeDestinatario: nomeDestinatario, cpfDestinatario: cpfDestinatario, ruaDestinatario: ruaDestinatario, numeroDestinatario: numeroDestinatario,
                bairroDestinatario: bairroDestinatario, cepDestinatario: cepDestinatario, cidadeDestinatario: cidadeDestinatario, celularDestinatario: celularDestinatario
            },
            success: function () {
                var dialog = bootbox.dialog({
                    title: 'Mensagem',
                    message: '<p><i class="fa fa-spin fa-spinner"></i> Salvando...</p>',
                    closeButton: false,
                    buttons: {
                        ok: {
                            label: "OK",
                            className: 'btn-primary',
                            callback: function () {
                                window.location = baseUrl + 'encomendas';
                            }
                        }
                    }
                });
                dialog.init(function () {
                    setTimeout(function () {

                        dialog.find('.bootbox-body').html('Transporte de encomenda solicitada com sucesso!');
                    }, 1000);
                });
            },
            error: function () {
                alert('error');
            }
        });
    }
});


$(".editar").click(function ()
{
    var nomeProduto = $("#nomeProduto").val();
    var altura = $("#altura").val();
    var largura = $("#largura").val();
    var comprimento = $("#comprimento").val();
    var peso = $("#peso").val();
    var nomeRemetente = $("#nomeRemetente").val();
    var cpfRemetente = $("#cpfRemetente").val();
    var ruaRemetente = $("#ruaRemetente").val();
    var bairroRemetente = $("#bairroRemetente").val();
    var cepRemetente = $("#cepRemetente").val();
    var cidadeRemetente = $("#cidadeRemetente").val();
    var celularRemetente = $("#celularRemetente").val();
    var nomeDestinatario = $("#nomeDestinatario").val();
    var cpfDestinatario = $("#cpfDestinatario").val();
    var ruaDestinatario = $("#ruaDestinatario").val();
    var numeroDestinatario = $("#numeroDestinatario").val();
    var bairroDestinatario = $("#bairroDestinatario").val();
    var cepDestinatario = $("#cepDestinatario").val();
    var cidadeDestinatario = $("#cidadeDestinatario").val();
    var celularDestinatario = $("#celularDestinatario").val();

    if (nomeProduto.length === 0) {
        $('.nomeProduto').removeClass('hidden');
    } else if (altura.length === 0) {
        $('.altura').removeClass('hidden');
    } else if (largura.length === 0) {
        $('.largura').removeClass('hidden');
    } else if (comprimento.length === 0) {
        $('.comprimento').removeClass('hidden');
    } else if (peso.length === 0) {
        $('.peso').removeClass('hidden');
    } else if (nomeRemetente.length === 0) {
        $('.nomeRemetente').removeClass('hidden');
    } else if (cpfRemetente.length === 0) {
        $('.cpfRemetente').removeClass('hidden');
    } else if (ruaRemetente.length === 0) {
        $('.ruaRemetente').removeClass('hidden');
    } else if (bairroRemetente.length === 0) {
        $('.bairroRemetente').removeClass('hidden');
    } else if (cepRemetente.length === 0) {
        $('.cepRemetente').removeClass('hidden');
    } else if (cidadeRemetente.length === 0) {
        $('.cidadeRemetente').removeClass('hidden');
    } else if (celularRemetente.length === 0) {
        $('.celularRemetente').removeClass('hidden');
    } else if (nomeDestinatario.length === 0) {
        $('.nomeDestinatario').removeClass('hidden');
    } else if (cpfDestinatario.length === 0) {
        $('.cpfDestinatario').removeClass('hidden');
    } else if (ruaDestinatario.length === 0) {
        $('.ruaDestinatario').removeClass('hidden');
    } else if (numeroDestinatario.length === 0) {
        $('.numeroDestinatario').removeClass('hidden');
    } else if (bairroDestinatario.length === 0) {
        $('.bairroDestinatario').removeClass('hidden');
    } else if (cepDestinatario.length === 0) {
        $('.cepDestinatario').removeClass('hidden');
    } else if (cidadeDestinatario.length === 0) {
        $('.cidadeDestinatario').removeClass('hidden');
    } else if (celularDestinatario.length === 0) {
        $('.celularDestinatario').removeClass('hidden');
    } else {
        $.ajax({
            type: "POST",
            url: baseUrl + 'encomendas/editar',
            async: false,
            data: {nomeProduto: nomeProduto, altura: altura, largura: largura, comprimento: comprimento, peso: peso, nomeRemetente: nomeRemetente, cpfRemetente: cpfRemetente,
                ruaRemetente: ruaRemetente, bairroRemetente: bairroRemetente, cepRemetente: cepRemetente, cidadeRemetente: cidadeRemetente, celularRemetente: celularRemetente,
                nomeDestinatario: nomeDestinatario, cpfDestinatario: cpfDestinatario, ruaDestinatario: ruaDestinatario, numeroDestinatario: numeroDestinatario,
                bairroDestinatario: bairroDestinatario, cepDestinatario: cepDestinatario, cidadeDestinatario: cidadeDestinatario, celularDestinatario: celularDestinatario
            },
            success: function () {
                var dialog = bootbox.dialog({
                    title: 'Mensagem',
                    message: '<p><i class="fa fa-spin fa-spinner"></i> Salvando...</p>',
                    closeButton: false,
                    buttons: {
                        ok: {
                            label: "OK",
                            className: 'btn-primary',
                            callback: function () {
                                window.location = baseUrl + 'sinistro';
                            }
                        }
                    }
                });
                dialog.init(function () {
                    setTimeout(function () {

                        dialog.find('.bootbox-body').html('Sinistro cadastrado com sucesso!');
                    }, 1000);
                });
            },
            error: function () {
                alert('error');
            }
        });
    }
});