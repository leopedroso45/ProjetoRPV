$(document).ready(function () {


    $(".cadastrar").click(function ()
    {
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
       

        if (nome_usuario.length === 0) {
            $('.nome_usuario').removeClass('hidden');
        } else if (dataInicio.length === 0) {
            $('.dataInicio').removeClass('hidden');
        } else if (dataFim.length === 0) {
            $('.dataFim').removeClass('hidden');

        } else {
            $.ajax({
                type: "POST",
                url: baseUrl + 'cadastro-estudante/index',
                async: false,
                data: {nome_usuario: nome_usuario, senha: senha, nomeCompleto: nomeCompleto, dataNascimento: dataNascimento,
                    cpf: cpf, rg: rg, celular: celular, rua: rua, numeroCasa: numeroCasa, bairro: bairro, comprovanteResidencia: comprovanteResidencia,
                    comprovanteMatricula: comprovanteMatricula
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
});