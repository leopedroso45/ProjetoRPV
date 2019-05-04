$(document).ready(function () {
    $('.datedropper').dateDropper({
        lang: 'pt'
    });

    $('#valor').mask('99,999.99');

    $('.onibus').DataTable();

    $('#data_inicio, body').click(function () {

        var data_inicio = $("#data_inicio").val();
        var data_fim = $("#data_fim").val();

        var dataInicio = data_inicio.split("/");
        var anoInicioString = dataInicio[2];
        var anoInicioInt = parseInt(anoInicioString, 10);

        var dataFim = data_fim.split("/");
        var diaFimString = dataFim[0];
        var mesFimString = dataFim[1];
        var anoFimString = dataFim[2];
        var anoFimInt = parseInt(anoFimString, 10);

        anoFimInt = anoInicioInt + 1;

        var datafinal = (diaFimString + "/" + mesFimString + "/" + anoFimInt);

        $("#data_fim").val(datafinal);
    });

    $(".cadastrar-apolice").click(function () {

        var id_onibus;
        var tipo_onibus;
        var descricao = $("#descricao").val();
        var data_inicio = $("#data_inicio").val();
        var data_fim = $("#data_fim").val();
        var valor = $("#valor").val();
        var tipo = [];
        var onibus = [];
        var cont = 0;
        var num_onibus = 0;

        var dataInicio = data_inicio.split("/");
        var dataFim = data_fim.split("/");

//            Data nok
        if (dataInicio[2] > dataFim[2] && dataInicio[1] > dataFim[1]) {
            $('.data').removeAttr("style");
            $('.dia').attr("style", "display: none");
            $('.mes').attr("style", "display: none");
            $('.ano').attr("style", "display: none");


//            Ano nok
        } else if (dataInicio[2] > dataFim[2]) {
            $('.ano').removeAttr("style");
            $('.dia').attr("style", "display: none");
            $('.mes').attr("style", "display: none");
            $('.data').attr("style", "display: none");

//            Ano ok, mês nok
        } else if (dataInicio[2] < dataFim[2] && dataInicio[1] > dataFim[1] ||
                dataInicio[2] === dataFim[2] && dataInicio[1] > dataFim[1]) {
            $('.mes').removeAttr("style");
            $('.dia').attr("style", "display: none");
            $('.data').attr("style", "display: none");
            $('.ano').attr("style", "display: none");

//            Ano ok, Mês ok, dia nok
        } else if (dataInicio[2] < dataFim[2] && dataInicio[1] < dataFim[1] && dataInicio[0] > dataFim[0] ||
                dataInicio[2] === dataFim[2] && dataInicio[1] === dataFim[1] && dataInicio[0] > dataFim[0]) {
            $('.dia').removeAttr("style");
            $('.data').attr("style", "display: none");
            $('.mes').attr("style", "display: none");
            $('.ano').attr("style", "display: none");
        }

//        Coletando todos onibus selecionados
        $('.ids').each(function () {
            onibus.push($(this).attr("id"));
            tipo.push($(this).attr("itemtype"));
            cont++;
        });

        num_onibus = cont;
        id_onibus = onibus.toString();
        tipo_onibus = tipo.toString();

//        for (var i = 0; i < id_onibus.length; i++) {
        alert("id_onibus = " + id_onibus + " tipo = " + tipo_onibus);
//        }

        alert(" onibus = " + num_onibus);

        $.ajax({
            type: 'POST',
            url: baseUrl + 'apolice/index',
            data: {id_onibus: id_onibus, descricao: descricao, tipo: tipo,
                data_inicio: data_inicio, data_fim: data_fim, valor: valor
            },
            async: false,
            success: function () {
                var dialog = bootbox.dialog({
                    title: 'Mensagem',
                    message: '<p><i class="fa fa-spin fa-spinner"></i> Cadastro realizado com sucesso!</p>',
                    closeButton: false,
                    buttons: {
                        ok: {
                            label: "OK",
                            className: 'btn-primary',
                            callback: function () {
                                location.reload();
                            }
                        }
                    }
                });
                dialog.init(function () {
                    setTimeout(function () {

                        dialog.find('.bootbox-body').html('Apolice cadastrado com sucesso!');
                    }, 2000);

                });

            },
            error: function () {
//                alert('error');
            }
        });
    });


});

$(function () {

    var id = "";
    var onibus = [];
    var cont = "";
    var id_bus = "";
    var length = 0;
//    var $checkBox = $(this);

    $('body').on('click', '.list-left tbody tr, .list-right tbody tr', function () {
        id = $(this).attr('id');
        $(this).toggleClass('active');
    });

    $('.list-arrows button').click(function () {
        var $button = $(this), actives = '';

        if ($button.hasClass('move-left')) {
            length = $('.list-right table .active').length;
//            alert(length);

            if (length === 1) {

                actives = $('.list-right table tr.active');
                actives.clone().appendTo('.list-left table');
                actives.remove();
                $('.list-left #' + id).addClass('ids');
                $('.list-left #' + id).attr("name", "onibus[]");


            } else {
                $('.list-right div div div div a i').removeClass('fa-check-circle');
                $('.list-right div div div div a i').addClass('fa-circle-notch');

                $('.list-right .active').each(function () {
                    onibus.push($(this).attr("id"));
                    cont++;
                });

                id = onibus.toString();
                id_bus = id.split(" ");
                id_bus = id.split(",");
//            alert(id_bus.length);
                actives = $('.list-right table tr.active');
                actives.clone().appendTo('.list-left table');
                actives.remove();

                for (var i = 0; i < id_bus.length; i++) {
                    $('.list-left #' + id_bus[i]).addClass('ids');
                    $('.list-left #' + id_bus[i]).attr("name", "onibus[]");
                }
            }


        } else if ($button.hasClass('move-right')) {

            $('.list-left .active').each(function () {
                onibus.push($(this).attr("id"));
                cont++;
            });

            id = onibus.toString();
            id_bus = id.split(" ");
            id_bus = id.split(",");
            actives = $('.list-left table tr.active');
            actives.clone().appendTo('.list-right table');
            actives.remove();

            for (var i = 0; i < id_bus.length; i++) {
                $('.list-right #' + id_bus[i]).removeClass('ids');
                $('.list-right #' + id_bus[i]).removeAttr("name", "onibus[]");
            }
        }
    });

    $('.dual-list .selector').click(function () {
        var $checkBox = $(this);

        if (!$checkBox.hasClass('selected')) {
            id = $(this).attr('id');

            $checkBox.addClass('selected').closest('.well').find('table tbody tr:not(.active)').addClass('active');
            $checkBox.children('i').removeClass('fa-circle-notch').addClass('fa-check-circle');

        } else {
            id = $(this).attr('id');

            $checkBox.removeClass('selected').closest('.well').find('table tbody tr.active').removeClass('active');
            $checkBox.children('i').removeClass('fa-check-circle').addClass('fa-circle-notch');
        }
    });

    $('[name="SearchDualList"]').keyup(function (e) {
        var code = e.keyCode || e.which;
        if (code == '9')
            return;
        if (code == '27')
            $(this).val(null);
        var $rows = $(this).closest('.dual-list').find('table tr');
        var val = $.trim($(this).val()).replace(/ +/g, ' ').toLowerCase();
        $rows.show().filter(function () {
            var text = $(this).text().replace(/\s+/g, ' ').toLowerCase();
            return !~text.indexOf(val);
        }).hide();
    });
});




function onibusPorIdApolice(id_apolice) {
    var id = id_apolice;

    $.ajax({
        type: 'POST',
        url: baseUrl + 'apolice/index',
        data: {id: id
        },
        async: false,
        success: function () {

        },
        error: function () {

        }
    });
}