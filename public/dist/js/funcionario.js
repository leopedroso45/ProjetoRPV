$(document).ready(function(){
    $("#data").mask("99/99/9999");
    $("#rg").mask("9999999999");
    $("#cpf").mask("999.999.999-99");
    $('#ctps').mask('9999999 99999 SS');
    $('#pis').mask('999.99999.99-9');
    $('#cnh').mask('99999999999');
    $("#telefone").mask("(99) 99999-9999");
    $('#dataAdmissao').mask('99/99/9999');     
});
 
$(".cadastrar-funcionario").click(function () {


    //Usuario
    var nome_usuario = $("#nome").val();;
    var senha = $("#nome").val();;

    //Funcionario
    var nome = $("#nome").val();
    var dataN = $("#id-cobrador").val();
    var cpf = $("#id-cobrador").val();
    var rg = $("#id-cobrador").val();
    var ctps = $("#id-cobrador").val();
    var pis = $("#id-cobrador").val();
    var cnh = $("#id-cobrador").val();
    var telefone = $("#id-cobrador").val();
    var salario = $("#id-cobrador").val();
    var email = $("#id-cobrador").val();
    var dataAdmissao = $("#id-cobrador").val(); 
    var cidade = $("#id-cobrador").val();
    var endereco = $("#id-cobrador").val();
    var numCasa = $("#id-cobrador").val();
    var bairro = $("#id-cobrador").val();

    var id_cobrador = $("#id-cobrador").val();


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


$(".edita").click(function ()
{
//        alert();
    var id = $("#id-cobrador").val();
    var nome = $("#nome").val();
    var cpf = $("#cpf").val();
    var rg = $("#rg").val();
    var carteiraTrabalho = $("#carteiraTrabalho").val();
    var pis = $("#pis").val();
    var dataAdmissao = $("#dataAdmissao").val();
    var cnh = $("#cnh").val();
    var telefone = $("#telefone").val();
    var email = $("#email").val();



    if (nome.length === 0) {
        $('.nome').removeAttr("style");

    } else if (cpf.length < 12) {
        $('.cpf').removeAttr("style");

        $('.nome').attr("style", "display:none");
    } else if (telefone.length < 1) {
        $('.telefone').removeAttr("style");

        $('.nome').attr("style", "display:none");
        $('.cpf').attr("style", "display:none");
    } else if (rg.length < 1) {
        $('.rg').removeAttr("style");

        $('.nome').attr("style", "display:none");
        $('.cpf').attr("style", "display:none");
        $('.telefone').attr("style", "display:none");
    } else if (carteiraTrabalho.length < 1) {
        $('.carteiraTrabalho').removeAttr("style");

        $('.nome').attr("style", "display:none");
        $('.cpf').attr("style", "display:none");
        $('.telefone').attr("style", "display:none");
        $('.rg').attr("style", "display:none");
    } else if (pis.length < 1) {
        $('.pis').removeAttr("style");

        $('.nome').attr("style", "display:none");
        $('.cpf').attr("style", "display:none");
        $('.telefone').attr("style", "display:none");
        $('.rg').attr("style", "display:none");
        $('.carteiraTrabalho').attr("style", "display:none");
    } else if (dataAdmissao.length < 10) {
        $('.dataAdmissao').removeAttr("style");

        $('.nome').attr("style", "display:none");
        $('.cpf').attr("style", "display:none");
        $('.telefone').attr("style", "display:none");
        $('.rg').attr("style", "display:none");
        $('.carteiraTrabalho').attr("style", "display:none");
        $('.pis').attr("style", "display:none");
    } else {


//        alert("id = " + id + ", status = " + status);

        $.ajax({
            type: "POST",
            url: baseUrl + 'cobrador/editar-cobradorajax',
            async: false,
            data: {id: id,
                nome: nome, cpf: cpf, rg: rg, carteiraTrabalho: carteiraTrabalho,
                pis: pis, dataAdmissao: dataAdmissao, cnh: cnh, telefone: telefone, email: email
            },

            success: function () {

                bootbox.alert("Alteração realizada com sucesso!", function () {

//                        location.reload();
                });

            },
            error: function () {
                bootbox.alert("Alteração realizada com sucesso!", function () {

                    location.href = baseUrl + 'cobrador';
                });
            }
        });
    }

});

//});

function editarAtivo(id, ativo)
{


$.ajax({
    type: "POST",
    url: baseUrl + 'cobrador/editar-ativo',
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









