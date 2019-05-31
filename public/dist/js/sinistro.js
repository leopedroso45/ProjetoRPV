$(document).ready(function () {


    $('#custo').mask('000.000,00', {reverse: true});
    $('#data').mask('99-99-9999');

    $("#descricao").blur(function ()
    {
        if (this.value.length === 0) {
            $('.descricao').removeClass('hidden');
        } else {
            $('.descricao').addClass('hidden');
        }
    });

    $("#causa").blur(function ()
    {
        var causa = $("#causa").val();
        if (causa.length === 0) {
            $('.causa').removeClass('hidden');
        } else {
            $('.causa').addClass('hidden');
        }
    });

    $("#culpado").blur(function ()
    {
        var culpado = $("#culpado").val();
        if (culpado.length === 0) {
            $('.culpado').removeClass('hidden');
        } else {
            $('.culpado').addClass('hidden');
        }
    });

    $("#custo").blur(function ()
    {
        var custo = $("#custo").val();
        if (custo.length === 0) {
            $('.custo').removeClass('hidden');
        } else {
            $('.custo').addClass('hidden');
        }
    });

    $("#data").blur(function ()
    {
        var data = $("#data").val();
        if (data.length === 0) {
            $('.data').removeClass('hidden');
        } else {
            $('.data').addClass('hidden');
        }
    });

    $("#hora").blur(function ()
    {
        var hora = $("#hora").val();
        if (hora.length === 0) {
            $('.hora').removeClass('hidden');
        } else {
            $('.hora').addClass('hidden');
        }
    });

    $("#pagante").blur(function ()
    {
        var pagante = $("#pagante").val();
        if (pagante.length === 0) {
            $('.pagante').removeClass('hidden');
        } else {
            $('.pagante').addClass('hidden');
        }
    });

    $(".cadastrar").click(function ()
    {
        var descricao = $("#descricao").val();
        var causa = $("#causa").val();
        var culpado = $("#culpado").val();
        var custo = $("#custo").val();
        var data = $("#data").val();
        var hora = $("#hora").val();
        var pagante = $("#pagante").val();
        var onibus = $("#sel5 option:selected").text();

        if (descricao.length === 0) {
            $('.descricao').removeClass('hidden');
        } else if (causa.length === 0) {
            $('.causa').removeClass('hidden');
        } else if (culpado.length === 0) {
            $('.culpado').removeClass('hidden');
        } else if (custo.length === 0) {
            $('.custo').removeClass('hidden');
        } else if (data.length === 0) {
            $('.data').removeClass('hidden');
        } else if (hora.length === 0) {
            $('.hora').removeClass('hidden');
        } else if (pagante.length === 0) {
            $('.pagante').removeClass('hidden');
        } else {
            $.ajax({
                type: "POST",
                url: baseUrl + 'sinistro/index',
                async: false,
                data: {descricao: descricao, causa: causa, culpado: culpado, custo: custo, data: data, hora: hora, pagante: pagante, onibus: onibus
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

});

$("#alocar").click(function () {
    var id_onibus = $("#sel5 option:selected").val();
    var onibus = $("#sel5 option:selected").text();

    document.getElementById("id_onibus").src = id_onibus;
    document.getElementById("id_onibus").value = onibus;
});



$(".editar").click(function ()
{
    var descricao = $("#descricao").val();
    var causa = $("#causa").val();
    var culpado = $("#culpado").val();
    var custo = $("#custo").val();
    var data = $("#data").val();
    var hora = $("#hora").val();
    var pagante = $("#pagante").val();
    var onibus = $("onibus").val();


    if (descricao.length === 0) {
        $('.descricao').removeClass('hidden');
    } else if (causa.length === 0) {
        $('.causa').removeClass('hidden');
    } else if (culpado.length === 0) {
        $('.culpado').removeClass('hidden');
    } else if (custo.length === 0) {
        $('.custo').removeClass('hidden');
    } else if (data.length === 0) {
        $('.data').removeClass('hidden');
    } else if (hora.length === 0) {
        $('.hora').removeClass('hidden');
    } else if (pagante.length === 0) {
        $('.pagante').removeClass('hidden');
    } else {
        $.ajax({
            type: "POST",
            url: baseUrl + 'sinistro/editar',
            async: false,
            data: {descricao: descricao, causa: causa, culpado: culpado, custo: custo, data: data, hora: hora, pagante: pagante, onibus: onibus
            },
            success: function () {
                var dialog = bootbox.dialog({
                    title: 'Mensagem',
                    message: '<p><i class="fa fa-spin fa-spinner"></i> Salvando as alterações...</p>',
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

                        dialog.find('.bootbox-body').html('Alterações realizadas com sucesso!');
                    }, 1000);
                });
            },
            error: function () {
                alert('error');
                var_dump();
            }
        });
    }
});