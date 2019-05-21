$(document).ready(function () {

    $("#extensao").blur(function ()
    {
        var extensao = $("#extensao").val();
        if (extensao.length === 0) {
            $('.extensao').removeClass('hidden');
        }
    });

    $(".cadastrarConcessao").click(function ()
    {
        var extensao = $("#extensao").val();
        var dataInicio = $("#dataInicio").val();
        var dataFim = $("#dataFim").val();
        var docAutorizacao = $("#docAutorizacao").val();

        if (extensao.length === 0) {
            $('.extensao').removeClass('hidden');
        } else if (dataInicio.length === 0) {
            $('.dataInicio').removeClass('hidden');
        } else if (dataFim.length === 0) {
            $('.dataFim').removeClass('hidden');

        } else {
            $.ajax({
                type: "POST",
                url: baseUrl + 'concessaotrajeto/index',
                async: false,
                data: {extensao: extensao, dataInicio: dataInicio, dataFim: dataFim, docAutorizacao: docAutorizacao

                },
                success: function () {
                    $(".alert-success").removeAttr("style");
                    location.reload();
                },
                error: function () {
                    alert("Error");
                }
            });
        }
    });

    function editarStatus(id, status) {

        //            alert('contate a manutenção');
        //		   alert("id = " + id + ", status = " + status);

        $.ajax({
            type: "POST",
            url: baseUrl + 'concessaotrajeto/editar-status',
            async: false,
            data: {id: id,
                status: status
            },
            success: function () {
            },
            error: function () {
            }
        });
    }

    $('#datePicker2').datepicker({
        format: 'dd/mm/yyyy'
    })
            .on('changeDate', function (e) {
                // Revalidate the date field
                $('#eventForm').formValidation('revalidateField', 'date');
            });

    $('#datePicker').datepicker({
        format: 'dd/mm/yyyy'
    })
            .on('changeDate', function (e) {
                // Revalidate the date field
                $('#eventForm').formValidation('revalidateField', 'date');
            });



    var estado = document.getElementById('estado');
    $('#onoff1').on('change', function () {
        var el = this;
        estado.innerHTML = el.checked ? 'ligado' : 'desligado';

        // aqui podes juntar a lógica do ajax
        $.ajax({
            url: "some.php",
            data: {
                estado: this.checked
            }
        }).done(function (msg) {
            if (msg == 'failed')
                return el.checked = !el.checked; // caso o servidor retorne "failed" mudar o estado do botão
            else
                alert("Info gravada: " + msg);
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
});


function Ncompleto() {
    var nome = document.getElementById("S").value.length;
    if (nome < 9) {
        document.getElementById("mensagem").innerHTML = "Erro! Escreva o seu nome e sobrenome."
        document.getElementById('cadastro').disabled = true;
    } else {
        document.getElementById("mensagem").innerHTML = ""
        document.getElementById('cadastro').disabled = false;
    }
}

function SomenteNumero(e) {
    var tecla = (window.event) ? event.keyCode : e.which;
    if ((tecla > 47 && tecla < 58))
        return true;
    else {
        if (tecla == 8 || tecla == 0)
            return true;
        else
            return false;
    }
}