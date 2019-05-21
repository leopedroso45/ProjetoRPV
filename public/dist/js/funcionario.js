$(document).ready(function () {
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
    if ($("#senha").val() !== $("#senha1").val()) {
        console.log("senhas divergentes")
        alert("As senhas não coincidem");
        return false;
    }
    //18 campos
    //Perfil/Cargo
    var id_perfil = $("#id_perfil").val();

    //Usuario
    var nome_usuario = $("#nome_usuario").val();
    var senha = $("#senha").val();

    //Funcionario
    var nome = $("#nome").val();
    var dataN = $("#dataN").val();
    var cpf = $("#cpf").val();
    var rg = $("#rg").val();
    var ctps = $("#ctps").val();
    var pis = $("#pis").val();
    var cnh = $("#cnh").val();
    var telefone = $("#telefone").val();
    var salario = $("#salario").val();
    var email = $("#email").val();
    var dataAdmissao = $("#dataAdmissao").val();
    var id_cidade = $("#id_cidade").val();
    var endereco = $("#endereco").val();
    var numCasa = $("#numCasa").val();
    var bairro = $("#bairro").val();

//alert();

    $.ajax({
        type: "POST",
        url: baseUrl + 'funcionario/index',
        async: false,
        data:
         {
            id_perfil: id_perfil, id_cidade: id_cidade, nome_usuario: nome_usuario, senha: senha,
            nome: nome, dataN: dataN, cpf: cpf, rg: rg, ctps: ctps, pis: pis, cnh: cnh, 
            telefone: telefone, salario: salario, email: email, dataAdmissao: dataAdmissao,
             endereco: endereco, numCasa: numCasa, bairro: bairro
         },
        success: function () {
            bootbox.alert("Cadastro realizado com sucesso!", function () {
                //location.reload();
            });
        },
        error: function (error) {
            alert(error);
            console.log(error);
         //   bootbox.alert("Algo de errado não está certo!", function () {
                //location.reload();
           // });
        }
    });
});

$(".edita").click(function () {
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
            url: baseUrl + 'funcionario/editar',
            async: false,
            data: {
                id: id,
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

                    location.href = baseUrl + 'funcionario';
                });
            }
        });
    }

});

//});

$("#alocar-cidade").click(function () {
    var id_cidade = $("#sel4 option:selected").val();
    var nome = $("#sel4 option:selected").text();

    document.getElementById("id_cidade").value = id_cidade;
    document.getElementById("nome-cidade").value = nome;
});








