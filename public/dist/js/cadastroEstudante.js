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
                alert('xd');
            },
            error: function () {
                alert("Error");
            }
        });
    });
});

function formatar(mascara, documento) {
    var i = documento.value.length;
    var saida = mascara.substring(0, 1);
    var texto = mascara.substring(i)

    if (texto.substring(0, 1) != saida) {
        documento.value += texto.substring(0, 1);
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
