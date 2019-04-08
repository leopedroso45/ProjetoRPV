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




$(document).on('click', '.clickable', function (e) {
//    alert();
    var $this = $(this);
    if (!$this.hasClass('card-collapsed')) {
        $this.parents('.card').find('.card-body').slideUp();
        $this.addClass('card-collapsed');
//        $this.find('i').removeClass('glyphicon-chevron-down').addClass('glyphicon-chevron-up');

    } else {
        $this.parents('.card').find('.card-body').slideDown();
        $this.removeClass('card-collapsed');
//        $this.find('i').removeClass('glyphicon-chevron-up').addClass('glyphicon-chevron-down');

    }
});

//$(".cadastrarTarifa").click(function ()
//{
//
//    var valor = $("#valor").val();
//    var vigencia = $("#vigencia").val();
//
//    $.ajax({
//        type: "POST",
//        url: baseUrl + 'tarifa/index',
//        async: false,
//        data: {valor: valor, vigencia: vigencia
//        },
//        success: function () {
//            $(".alert-success").removeAttr("style");
//        },
//        error: function () {
//            alert("error");
//        }
//    });
//    //}
//});



$(".cadastrarTarifa").click(function () {
    var id_trajeto;
    var valor = $("#valor").val();
    var vigencia = $("#vigencia").val();
    var trajetos = [];
    var cont = 0;
    
    $('.ids').each(function () {
            trajetos.push($(this).attr("at"));
            cont++;
    });

    id_trajeto = trajetos.toString();
        alert("id_trajeto = " + trajetos + ", valor = " + valor);
        
    $.ajax({
        type: 'POST',
        url: baseUrl + 'tarifa/index',
        async: false,
        data: {valor: valor, vigencia: vigencia, id_trajeto: id_trajeto
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
                            window.location = baseUrl + 'logradouro';
                        }
                    }
                }
            });
            dialog.init(function () {
                setTimeout(function () {
                    dialog.find('.bootbox-body').html('Cadastro realizado com sucesso!');
                }, 3000);
            });

        },
        error: function () {
//                alert('error');
        }
    });
});


