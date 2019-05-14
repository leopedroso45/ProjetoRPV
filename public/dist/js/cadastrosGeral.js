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

            success: function () {
                $(".alert-success").removeAttr("style");
                location.reload();
                alert('Cadastrado!');
            },
//            error: function () {
//                alert("Error");
//            }
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
function verificaCamposPreenchidos() {
    var usuario = document.getElementById("nome_usuario").value;
    if (usuario === is_null()) {
        document.getElementById('cadastro').disabled = true;
    }

}

function verify() {
    var senha = document.getElementById("senha").value;
    var confirmacao = document.getElementById("confirmarSenha").value;
    if (senha == confirmacao) {
        document.getElementById("mensagem").innerHTML = ""
        document.getElementById('cadastro').disabled = false;
    } else {
        document.getElementById("mensagem").innerHTML = "Erro! As senhas nao correspodem."
        document.getElementById('cadastro').disabled = true;
    }
}

function minemaxlenght() {
    var minimo = document.getElementById("senha").value.length;
    var confirmar = document.getElementById("confirmarSenha").value.length;
    if (minimo > 5) {
        document.getElementById("mensagem").innerHTML = ""
        document.getElementById('cadastro').disabled = false;
    } else {
        document.getElementById("mensagem").innerHTML = "Erro! Minímo 6 caracteres."
        document.getElementById('cadastro').disabled = true;
    }
}

function Ncompleto() {
    var nome = document.getElementById("nomeCompleto").value.length;
    if (nome < 10) {
        document.getElementById("mensagem1").innerHTML = "Erro! Escreva o seu nome e sobrenome."
        document.getElementById('cadastro').disabled = true;
    } else {
        document.getElementById("mensagem1").innerHTML = ""
        document.getElementById('cadastro').disabled = false;
    }
}

function validaUsuario() {
    var usuario = document.getElementById("nome_usuario").value.length;
    if (usuario < 10) {
        document.getElementById("mensagem2").innerHTML = "Nome de usuário deve possuir no mínimo 10 caracteres."
        document.getElementById('cadastro').disabled = true;
    } else {
        document.getElementById("mensagem2").innerHTML = ""
        document.getElementById('cadastro').disabled = false;
    }
}

function validaCPF() {
    var cpf = document.getElementById("cpf").value.length;
    if (cpf < 14) {
        document.getElementById("mensagem3").innerHTML = "O CPF está errado."
        document.getElementById('cadastro').disabled = true;
    } else {
        document.getElementById("mensagem3").innerHTML = ""
        document.getElementById('cadastro').disabled = false;
    }
}

function verificacheckbox() {
    var check = document.getElementById("nenhum");
    var check1 = document.getElementById("meiaPassagem");
    var check2 = document.getElementById("isencao");

    if (check.checked && check1.checked && check2.checked == true) {
        document.getElementById("mensagem4").innerHTML = ""
        document.getElementById('cadastro').disabled = false;
    } else {
        document.getElementById("mensagem4").innerHTML = "Marque um tipo de benefício que se encaixa!"
        document.getElementById('cadastro').disabled = true;
    }
}