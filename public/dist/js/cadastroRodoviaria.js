$(document).ready(function () {


    $(".cadastrar").click(function ()
    {
        var nome = $("#nome").val();
        var cidade = $("#cidade").val();
        var estado = $("#estado").val();
        var responsavel = $("#responsavel").val();
        var data_inicio = $("#data_inicio").val();

        $.ajax({
            type: "POST",
            url: baseUrl + 'rodoviarias-passagem-local/index',
            async: false,
            data: {nome:nome, cidade:cidade, estado:estado, data_inicio:data_inicio, responsavel:responsavel
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
});

function editarStatus(id, status) {

    //            alert('contate a manutenção');
    //		   alert("id = " + id + ", status = " + status);

    $.ajax({
        type: "POST",
        url: baseUrl + 'rodoviariaspassagemlocal/editar-status',
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