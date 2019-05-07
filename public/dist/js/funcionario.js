$("#data").mask("99/99/9999");
$("#rg").mask("9999999999");
$("#cpf").mask("999.999.999-99");
$('#ctps').mask('9999999 99999 SS');
$('#pis').mask('999.99999.99-9');
$('#cnh').mask('99999999999');
$("#telefone").mask("(99) 99999-9999");
$('#dataAdmissao').mask('99/99/9999'); 
 
$(".cadastrar-cobrador").click(function ()
{
    var nome = $("#nome").val();
    var cpf = $("#cpf").val();
    var cnh = $("#cnh").val();
    var pis = $("#pis").val();
    var carteiraTrabalho = $("#carteiraTrabalho").val();
    var rg = $("#rg").val();
    var dataAdmissao = $("#dataAdmissao").val();
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
        $.ajax({
            type: "POST",
            url: baseUrl + 'cobrador/index',
            async: false,
            data: {
                nome: nome, cpf: cpf,
                rg: rg, carteiraTrabalho: carteiraTrabalho, pis: pis,
                dataAdmissao: dataAdmissao, cnh: cnh, email: email,
                telefone: telefone
            },
            success: function () {
                //$('.alert-success').removeAttr("style");
                bootbox.alert("Cadastro realizado com sucesso!", function () {

                    location.reload();
                });


            },
            error: function () {


            }
        });
    }


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









