 
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

        alert("id cobrador = "+id_cobrador);
        alert("id motorista = "+id_motorista);
        alert("id onibus = "+id_onibus_urbano);
       

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