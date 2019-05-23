$(document).ready(function () {


    $("#descricao").blur(function ()
    {
        var descricao = $("#descricao").val();
        if (descricao.length === 0) {
            $('.descricao').removeClass('hidden');
        }
    });

    $("#causa").blur(function ()
    {
        var causa = $("#causa").val();
        if (causa.length === 0) {
            $('.causa').removeClass('hidden');
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

        if (descricao.length === 0) {
            $('.descricao').removeClass('hidden');
        } else if (causa.length === 0) {
            $('.causa').removeClass('hidden');
        } else {
            $.ajax({
                type: "POST",
                url: baseUrl + 'sinistro/index',
                async: false,
                data: {descricao: descricao, causa: causa, culpado: culpado, custo: custo, data: data, hora: hora, pagante: pagante
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
    var descricao = $("#sel5 option:selected").text();

    document.getElementById("id_onibus").src = id_onibus;
    document.getElementById("id_onibus").value = descricao;
});
