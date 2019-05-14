
$(".cadastrarFormaPagamento").click(function ()
{
    alert();
    var descricao = $("#descricao").val();

    if (descricao.length === 0) {
        $(".descricao").removeAttr("style");
    } else {
        $.ajax({
            type: "POST",
            url: baseUrl + 'forma-pagamento/index',
            async: false,
            data: {descricao: descricao
            },
            success: function () {
                bootbox.alert("Cadastro realizado com sucesso!", function(){
                    location.reload();
                });  
            },
            error: function () {
                alert("error");
            }
        });
    }
});


$(".editarFormaPagamento").click(function ()
{
    var id = $("#id_pagamento").val();
    var descricao = $("#descricao").val();

    if (descricao.length === 0) {
        $(".descricao").removeAttr("style");
    } else {    
        $.ajax({
            type: "POST",
            url: baseUrl + 'forma-pagamento/editar',
            async: false,
            data: {descricao: descricao, id: id
            },
            success: function () {
                bootbox.alert("Edição realizada com sucesso!", function(){
                    location.reload();
                });
            },
            error: function () {
                console.log();
            }
        });
    }
});

function editarStatus(id,status) {
      //  alert();

//alert(id, status);
$.ajax({
    type: "POST",
    url: baseUrl + 'forma-pagamento/editar-status',
    async: false,
    data: {id: id,
        status: status},
        success: function () {
            bootbox.alert("Edição realizada com sucesso!", function(){
                location.reload();
            });
        },
        error: function () {


        }
    });
}