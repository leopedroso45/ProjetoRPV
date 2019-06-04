
$("#valor").mask("9,99");

$("#alocar-categoria").click(function(){

    $(".validaCategoria").attr("style", "display:none");

    var texto = $("#sel option:selected").text();
    var id = $("#sel option:selected").val();
    
    


    document.getElementById("categoria").value = texto;
    document.getElementById("categoria").src = id;

});

$("#data_inicio").focus(function(){
    $(".validaIf").attr("style", "display:none");
    $(".validaDobanco").attr("style", "display:none");
    $(".validaCategoria").attr("style", "display:none");
     $(".validaInicio").attr("style", "display:none");
     $(".validaFim").attr("style", "display:none");
});
$("#data_fim").focus(function(){
    $(".validaIf").attr("style", "display:none");
    $(".validaDobanco").attr("style", "display:none");
     $(".validaCategoria").attr("style", "display:none");
      $(".validaInicio").attr("style", "display:none");
     $(".validaFim").attr("style", "display:none");
});
$("#valor").focus(function(){
    $(".validaValor").attr("style", "display:none");
    $(".validaDobanco").attr("style", "display:none");
     $(".validaCategoria").attr("style", "display:none");
      $(".validaInicio").attr("style", "display:none");
     $(".validaFim").attr("style", "display:none");
});
$("#categoria").focus(function(){
    $(".validaValor").attr("style", "display:none");
    $(".validaDobanco").attr("style", "display:none");
     $(".validaCategoria").attr("style", "display:none");
     $(".validaInicio").attr("style", "display:none");
     $(".validaFim").attr("style", "display:none");


});

$(".cadastrar-tarifa").click(function () {
    //moment.locale('pt-br');

    

    var id_categoria = $("#categoria").attr("src");

    var inicio = moment($("#data_inicio").val());
    var fim = moment($("#data_fim").val());

    var fimTeste = $("#data_fim").val();
    
    var hoje = moment().format('YYYY-MM-DD');
    var fimVazio = false;
    

    // if (moment($("#data_inicio").val()).isBefore(moment().format('YYYY-MM-DD'))) {
    //     alert("inicio menor");
    // }
    

    if ($("#data_inicio").val() === "" || $("#data_inicio").val() === null) {
        $(".validaInicio").removeAttr("style");
    }
    else if ($("#data_fim").val() === "" || $("#data_inicio").val() === null) {
        $(".validaFim").removeAttr("style");
    }
    else if ($("#categoria").val() === "" || $("#categoria").val() === null) {
        $(".validaCategoria").removeAttr("style");
    }
    else if ($("#valor").val() === "" || $("#valor").val() === null) {
        $(".validaValor").removeAttr("style");
    }
    else if (inicio > fim) {
       // alert("A data de fim não pode ser menor que a data de início da tarifa.");

        $(".validaIf").removeAttr("style");
    }
    else if (moment($("#data_inicio").val()).isBefore(moment().format('YYYY-MM-DD'))) {
        $(".validaHoje").removeAttr("style");
    }
    


    else{

        if (fimTeste === "" || fimTeste === null) {
        fimVazio = true;
    }

        var data_inicio = moment($("#data_inicio").val(), "YYYY-MM-DD");
        data_inicio = moment(data_inicio).format("DD/MM/YYYY");
        

        var data_fim;
        if (fimVazio) {
           data_fim = "";
           
        }
        else{
            data_fim =  moment($("#data_fim").val(), "YYYY-MM-DD");
            data_fim = moment(data_fim).format("DD/MM/YYYY");
        }

        


        var valor = $("#valor").val();

        var iniciox = moment(inicio).format("YYYY-MM-DD");
        var fimx = moment(fim).format("YYYY-MM-DD");
       

        $.ajax({
            type: 'POST',
            url: baseUrl + 'tarifa-intermunicipal/index',
            data: { id_categoria: id_categoria, iniciox: iniciox, fimx: fimx, valor: valor
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
                               window.location = baseUrl + 'tarifa-intermunicipal';
                           }
                       }
                   }
               });
                dialog.init(function () {
                    setTimeout(function () {

                        dialog.find('.bootbox-body').html('Tarifa cadastrada com sucesso!');
                    }, 1000);

                });

            },
            error: function () {
                
                               
                               $(".validaDobanco").removeAttr("style");

                           
            }
        });


    }

    


});