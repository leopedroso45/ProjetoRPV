    $(document).ready(function () {

    var estado = document.getElementById('estado');
    $('#onoff1').on('change', function() {
        var el = this;
        estado.innerHTML = el.checked ? 'ligado' : 'desligado';

        // aqui podes juntar a lógica do ajax
        $.ajax({
            url: "some.php",
            data: {
                estado: this.checked
            }
        }).done(function(msg) {
            if (msg == 'failed') return el.checked = !el.checked; // caso o servidor retorne "failed" mudar o estado do botão
            else alert("Info gravada: " + msg);
        });
    });
    
    $("#botaoConceder").click(function () {
          
       var nenhum;
       var meiaPassagem;
       var cpf;
       var rg;
       var celular;
       var rua;
       var numero_casa;
       var bairro;
       var tipo_deficiencia;
       var atestado_medico;
       var beneficio;
    
       

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