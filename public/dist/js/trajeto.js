$("#seta1").click(function ()
{
    var id_parada = $("#sel3 option:selected").val();
    var local = $("#sel3 option:selected").text();

    if (id_parada == null) {
        $("div#aviso").show("slow");

    } else {
        $("#teste1").append('<div class="row" id="paradax" style="padding: 10px; padding-bottom: 0px;">' +
                '<div class="col-9">' +
                '<a class="form-control ids" at=' + id_parada + ' type="text" name="parada[]"  disabled style="color: black; width: 305px; padding-left: 10px;">' + local + ' </a>' +
                '</div>' +
                '<div class="col-3"  style="padding-botton: 0px; padding-left: 5px; " >' +
                '<input class="form-control horarios" name="horarios[]"  type="time" style="width: 100px; padding-bottom: 0px;">' +
                '</div>' +
                '</div>'
                );
        // document.getElementById(id_parada).value = local;
    }
});

$("#alocar-cobrador").click(function () {
    var id_cobrador = $("#sel4 option:selected").val();
    var nome = $("#sel4 option:selected").text();

    document.getElementById("id-cobrador").value = id_cobrador;
    document.getElementById("descricao-cobrador").value = nome;
});

$("#alocar-motorista").click(function () {
    var id_motorista = $("#sel5 option:selected").val();
    var nome = $("#sel5 option:selected").text();

    document.getElementById("id-motorista").value = id_motorista;
    document.getElementById("descricao-motorista").value = nome;
});

$("#alocar-onibus").click(function () {
    var id_onibus = $("#sel6 option:selected").val();
    var placa = $("#sel6 option:selected").text();

    document.getElementById("id-onibus").value = id_onibus;
    document.getElementById("descricao-onibus").value = placa;
});

$(".cadastrar-trajeto").click(function () {

    var id_parada;
    var id_motorista = $("#id-motorista").val();
    var id_cobrador = $("#id-cobrador").val();
    var horario;
    var descricao = $("#descricao1").val();
    var num_paradas;
    id_onibus_urbano = $("#id-onibus").val();
    // var id_cobrador = $("#id_cobrador").val();
    // var id_onibus = $("#id_onibus").val();

    var paradas = [];
    var horarios = [];
    var cont = 0;

    alert("id cobrador = " + id_cobrador);
    alert("id motorista = " + id_motorista);
    alert("id onibus = " + id_onibus_urbano);


//        Coletando todos cnaes selecionados
    $('.ids').each(function () {

        paradas.push($(this).attr("at"));


        cont++;

    });



    num_paradas = cont;
    id_parada = paradas.toString();

    //alert("id_parada = " + id_parada+" num_paradas = " + num_paradas );



    $.ajax({
        type: 'POST',
        url: baseUrl + 'trajeto/index',
        data: {id_parada: id_parada, descricao: descricao, num_paradas: num_paradas,
            id_motorista: id_motorista, id_cobrador: id_cobrador, id_onibus_urbano: id_onibus_urbano
        },
        async: false,
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
                            // window.location = baseUrl + '';
                        }
                    }
                }
            });
            dialog.init(function () {
                setTimeout(function () {

                    dialog.find('.bootbox-body').html('Trajeto cadastrado com sucesso!');
                }, 2000);

            });

        },
        error: function () {
//                alert('error');
        }
    });
});

function editarAtivo(id, ativo)
{


    $.ajax({
        type: "POST",
        url: baseUrl + 'trajeto/editar-ativo',
        async: false,
        data: {id: id,
            ativo: ativo
        },
        success: function () {

        },
        error: function () {

//                $('.dataTable').reload();
        }
    });
}