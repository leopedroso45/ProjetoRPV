$(document).ready(function () {


    $(".cadastrar").click(function ()
    {
        
        $('.img-loading').removeClass("hidden");
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
        var tipo_deficiencia = $("#tipo_deficiencia").val();
        var atestado_medico = $("#atestado_medico").val();
        moment.locale('pt-br');
        var data_solicitacao = moment().format('LLL'); 

        $.ajax({
            type: "POST",
            url: baseUrl + 'cadastro-deficiente/index',
            async: false,
            data: {nome_usuario: nome_usuario, senha: senha, nomeCompleto: nomeCompleto, dataNascimento: dataNascimento,
                cpf: cpf, rg: rg, celular: celular, rua: rua, numeroCasa: numeroCasa, bairro: bairro, tipo_deficiencia: tipo_deficiencia,
                atestado_medico: atestado_medico, data_solicitacao: data_solicitacao
            },
                beforeSend: function () {
                    setTimeout(function () {
                        $('.img-loading').addClass("hidden");
                    }, 1000);
                },
                success: function () {
                    bootbox.alert({
                        message: "Cadastro realizado com sucesso.",
                        callback: function () {
                            location.reload();
                        }
                    });

                },
                error: function () {
//                alert('error');
                }
        });
    });
});
