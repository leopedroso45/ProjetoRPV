//$(document).ready(function () {


    $(".cadastrar").click(function ()
    {
        alert("click");
        
        var nome_usuario = $("#nome_usuario").val();
        var senha = $("#senha").val();
        var nomeCompleto = $("#nomeCompleto").val();
        var dataNascimento = $("#dataNascimento").val();
        var cpf = $("#cpf").val();
        var rg = $("#rg").val();
        var celular = $("#celular").val();
        var rua = $("#rua").val();
        var numeroCasa = $("#numeroCasa").val();
        var bairro = $("#bairro").val();
        var comprovanteResidencia = $("#comprovanteResidencia").val();
        var comprovanteMatricula = $("#comprovanteMatricula").val();
        moment.locale('pt-br');
        var data_solicitacao = moment().format('LLL');
        
        alert(nome_usuario);

        $.ajax({
            type: "POST",
            url: baseUrl + 'cadastro-estudante/index',
            async: false,
            data: {nome_usuario: nome_usuario, senha: senha, nomeCompleto: nomeCompleto, dataNascimento: dataNascimento,
                cpf: cpf, rg: rg, celular: celular, rua: rua, numeroCasa: numeroCasa, bairro: bairro, comprovanteResidencia: comprovanteResidencia,
                comprovanteMatricula: comprovanteMatricula, data_solicitacao: data_solicitacao
            },

            success: function () {
                $(".alert-success").removeAttr("style");
                location.reload();
                alert('Cadastrado!');
            },
            error: function () {
                alert("Error");
            }
        });
    });
//});