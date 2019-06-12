





var cont = 0;
var cont2 = 100;
var trechoVazio = false;

$("#add-trecho").click(function ()
{
   $(".validaInserirUmTrecho").attr("style", "display:none");
   if (cont===0) {

     cont++;


     $("fieldset").append(  '<div class="row trecho" id="a" style="padding-left: 15px; padding-right: 15px">'+
        '<div class="col-2" style="padding-top: 30px"><button type="button"class="btn btn-light move up" style="margin-right:5px" ><i class="fas fa-angle-up"></i></button><button type="button" class="btn btn-light move down"><i class="fas fa-angle-down"></i></button></div>'+
        
        '<div class="col-5" >'+
        '<label for="descricao" id="label">Local</label><label  style="color:red" id="label">*</label>'+
        '<a data-toggle="modal" data-target="#exampleModalCenter">'+
        '<div class="input-group">'+
        '<div class="input-group-prepend" style="margin-left:-50px">'+
        '<span style="cursor: pointer;" class="input-group-text" id="validationTooltipUsernamePrepend">'+
        'Selecionar'+
        '</span>'+
        '</div>'+
        '<input type="hidden" id="id-trecho">'+
        
        '<input type="text" class="form-control ids" src="" name="trecho[]" disabled id="descricao-trecho'+cont+'">'+
        '</div>'+
        '</a>'+
        
        '</div>'+
        '<div class="col-2">'+
        '<label for="descricao" id="label">Tempo (minutos)</label><label  style="color:red" id="label">*</label>'+
        '<input type="text" class="form-control hrs" value="" id="tempo-trecho'+cont+'" name="horarios[]"  placeholder="Duração do trecho"   >'+
        '</div>'+


        '<div class="col-2">'+
        '<label for="descricao" id="label">Distância (km)</label><label  style="color:red" id="label">*</label>'+
        '<input type="text" class="form-control kms" value="" id="km-trecho'+cont+'" name="quilometros[]"  placeholder="Distância do trecho"   >'+
        '</div>'+


        '<div class="col-1" style="padding-top: 30px">'+
        '<button type="button" id="xxx"  class="btn btn-block btn-danger remove" >X</button>'+
        '</div>'+
        '</div>');

     $(".kms").mask("9999");
     $(".hrs").mask("9999");

 }
 else{
    if (document.getElementById("descricao-trecho"+cont).value === "") {



        $('.validaTrecho').removeAttr("style");


        

    }
    else if (document.getElementById("tempo-trecho"+cont).value === "") {

        $('.validaTempo').removeAttr("style");

    }
    else if (document.getElementById("km-trecho"+cont).value === "") {

        $('.validaKm').removeAttr("style");

    }
    else{



        cont++;
        

        $("fieldset").append(   '<div class="row trecho" id="a" style="padding-left: 15px; padding-right: 15px">'+
            '<div class="col-2" style="padding-top: 30px"><button type="button"class="btn btn-light move up" style="margin-right:5px" ><i class="fas fa-angle-up"></i></button><button type="button" class="btn btn-light move down"><i class="fas fa-angle-down"></i></button></div>'+
            
            '<div class="col-5" >'+
            '<label for="descricao" id="label">Local</label><label  style="color:red" id="label">*</label>'+
            '<a data-toggle="modal" data-target="#exampleModalCenter">'+
            '<div class="input-group">'+
            '<div class="input-group-prepend" style="margin-left:-50px">'+
            '<span style="cursor: pointer;" class="input-group-text" id="validationTooltipUsernamePrepend">'+
            'Selecionar'+
            '</span>'+
            '</div>'+
            '<input type="hidden" id="id-trecho">'+
            
            '<input type="text" class="form-control ids" src="" name="trecho[]" disabled id="descricao-trecho'+cont+'">'+
            '</div>'+
            '</a>'+
            
            '</div>'+
            '<div class="col-2">'+
            '<label for="descricao" id="label">Tempo (minutos)</label><label  style="color:red" id="label">*</label>'+
            '<input type="text" class="form-control hrs" value="" id="tempo-trecho'+cont+'" name="horarios[]"  placeholder="Duração do trecho"   >'+
            '</div>'+


            '<div class="col-2">'+
            '<label for="descricao" id="label">Distância (km)</label><label  style="color:red" id="label">*</label>'+
            '<input type="text" class="form-control kms" value="" id="km-trecho'+cont+'" name="quilometros[]"  placeholder="Distância do trecho"   >'+
            '</div>'+


            '<div class="col-1" style="padding-top: 30px">'+
            '<button type="button" id="xxx"  class="btn btn-block btn-danger remove" >X</button>'+
            '</div>'+
            '</div>');

        $(".kms").mask("9999");
        $(".hrs").mask("9999");
    }
}

// id="tempo-trecho'+cont+'"



});





$("#tempo_fim").blur(function(){


 var tempo_trechox = $("#tempo-trecho1").val();


 var tempo_fim = $("#tempo_fim").val();

 var total = parseInt(tempo_fim) + parseInt(tempo_trechox);







 $("#tempototal").html("Tempo total estimado da linha: " + quatro ); 
});

$("#alocar-trecho").click(function () {

    $('.validaTrecho').attr("style", "display:none");

    
    $(".validaTrechovazio").attr("style", "display:none");
    var id_trecho = $("#sel4 option:selected").val();
    var descricao = $("#sel4 option:selected").text();
    


    
    document.getElementById("descricao-trecho"+cont).value = descricao;
    document.getElementById("descricao-trecho"+cont).src = id_trecho;
});

$("#alocar-trecho-inicio").click(function () {


    var id_trecho = $("#sel5 option:selected").val();
    var descricao = $("#sel5 option:selected").text();
    


    
    document.getElementById("descricao-trecho-inicio").value = descricao;
    document.getElementById("descricao-trecho-inicio").src = id_trecho;
});









$(document).on("click",".move", function() {

    var row = $(this).closest('.trecho');
    
    if ($(this).hasClass('up'))
        row.prev().before(row);
    else
        row.next().after(row);
});
var tempoTotall;
function atualizaLabel(){
    var tempoParcial = 0;
    var contador = 0;
    $('.hrs').each(function () {     

       contador++;
       var aux = parseInt($("#tempo-trecho"+contador).val());

       tempoParcial = tempoParcial + parseInt($("#tempo-trecho"+contador).val());




   });

    var tempoInicial = moment("00:00", "HH:mm").format("HH:mm");
    tempoTotall = moment(tempoInicial, "HH:mm").add(tempoParcial , 'minutes').format('HH:mm');
    $("#tempototal").html(tempoTotall);
}

function atualizaLabelKm(){
    var kmParcial = 0;
   var contador = 0;
   $('.kms').each(function () {     

       contador++;
       var aux = parseInt($("#km-trecho"+contador).val());

       kmParcial = kmParcial + parseInt($("#km-trecho"+contador).val());




   });


   $("#kmtotal").html( kmParcial);
}

$(document).on("click",".remove", function() {



    var row = $(this).closest('.trecho');
    
    row.remove();
    cont--;
    $('.validaTrecho').attr("style", "display:none");
    $(".validaTempo").attr("style", "display:none");
    $(".validaKm").attr("style", "display:none");

    atualizaLabel();
    atualizaLabelKm();


});


$(document).on("blur",".hrs", function() {   // converte o inteiro em tempo e atualiza o label que mostra o tempo total da linha.
   atualizaLabel();
});



$(".cadastrar-linha").click(function () {

    if (cont === 0) {
        $(".validaInserirUmTrecho").removeAttr("style", "display:none");

    }
    else{

        var id_trecho;   
        var inicio = $("#descricao-trecho-inicio").val();
        var descricao = $("#descricao").val();
        
        
        var num_trechos;
        var tempo_trecho;    
        var km_trecho;
        var tempototal = 0; // somar todos os minutos dos trechos
        var kmtotal = 0; // somar todos os kms dos trechos


        var trechos = [];
        var horarios = [];
        var quilometros = [];

        var contt = 0;



        //        Coletando todos trechos selecionados
        $('.ids').each(function () {
        //alert($(this).attr("src"));
        contt++;
        trechos.push($(this).attr("src"));

        if ($(this).attr("src") === "" || $(this).attr("src") === null) {

         trechoVazio = true;
     }


 });



        var tt = 0;
        $('.hrs').each(function () {     
            tt++;
            horarios.push($("#tempo-trecho"+tt).val());
            tempototal = tempototal + parseInt($("#tempo-trecho"+tt).val());

            if ($("#tempo-trecho"+tt).val() === "" || $("#tempo-trecho"+tt).val() === null) {

                trechoVazio = true;
            }


        });

        var kk = 0;
        $('.kms').each(function () {     
            kk++;
            quilometros.push($("#km-trecho"+kk).val());
            kmtotal = kmtotal + parseInt($("#km-trecho"+kk).val());

            if ($("#km-trecho"+kk).val() === "" || $("#km-trecho"+kk).val() === null) {

                trechoVazio = true;
            }

        });

        tempo_trecho = horarios.toString();
        km_trecho = quilometros.toString();
        id_trecho = trechos.toString();

        num_trechos = contt;



    //alert("id_parada = " + id_parada+" num_paradas = " + num_paradas );

    if (descricao === "" || descricao === null) {
        $(".validaDescricao").removeAttr("style", "display:none");

    }
    else if (inicio === "" || inicio === null){
        $(".validaInicio").removeAttr("style", "display:none");

    }
    else if(trechoVazio){
        $(".validaTrechovazio").removeAttr("style", "display:none");
        trechoVazio = false;
    }
    
    
    else{

        $.ajax({
            type: 'POST',
            url: baseUrl + 'linha/index',
            data: {id_trecho: id_trecho, inicio: inicio, descricao: descricao, num_trechos: num_trechos, tempo_trecho: tempo_trecho, km_trecho: km_trecho, kmtotal: kmtotal, tempoTotall: tempoTotall
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
                             window.location = baseUrl + 'linha';
                         }
                     }
                 }
             });
                dialog.init(function () {
                    setTimeout(function () {

                        dialog.find('.bootbox-body').html('Linha cadastrada com sucesso!');
                    }, 1000);

                });

            },
            error: function () {
//                alert('error');
}
});

    }

} 
});
$("#descricao").focus(function(){

    $(".validaDescricao").attr("style", "display:none");

});

$("#validaInicio").click(function(){

    $(".validaInicio").attr("style", "display:none");

});
$(document).on("focus",".hrs", function() {

 $(".validaTempo").attr("style", "display:none");
 $(".validaTrechovazio").attr("style", "display:none");

});

$(document).on("focus",".kms", function() {

 $(".validaKm").attr("style", "display:none");
 $(".validaTrechovazio").attr("style", "display:none");


});











// });



$(document).on("blur",".kms", function() {   // soma os valores dos campos quilômetros e atualiza o label total em quilômetros da linha.
   atualizaLabelKm();
});





function editarAtivo(id, ativo)
{



    $.ajax({
        type: "POST",
        url: baseUrl + 'linha/editar-ativo',
        async: false,
        data: { id: id,
            ativo: ativo
        },
        success: function () {
           // alert("yes");
       },
       error: function () {
           // alert("no");
//                $('.dataTable').reload();
}
});
}  
function trechos(id)
{

//var idd = parseInt(id);
//alert(idd);


$.ajax({
    type: "POST",
    url: baseUrl + 'linha/index',
    async: false,
    data: { id: id,

    },
    success: function () {
          //  alert("yes");
           // alert(id);
       },
       error: function () {
          //  alert("no");
          //  alert(id);


      }
  });
} 
// teste para exibir os trechos no modal
$("#idbotao").click(function(){

    $(".testemodal").append(
        '<div class="modal fade" id="modalteste" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">'+
        '<div class="modal-dialog modal-dialog-centered" role="document">'+
        '<div class="modal-content">'+
        '<div class="modal-header">'+


        '<h5 class="modal-title" id="exampleModalLongTitle">Trechos da linha </h5>'+
        '<button type="button" class="close" data-dismiss="modal" aria-label="Close">'+
        '<span aria-hidden="true">&times;</span>'+
        '</button>'+
        '</div>'+
        '<div class="modal-body">'+

        '<select multiple class="form-control"  style="height: 270px;text-align: left">'+
        
        '<? foreach ($this->listaDasLinhast as $linhat){ ?>'+


        '<option  >'+
        '_______________________________________________________________'+
        '</option> '+
        '<option  >'+
        "<?= $linhat['descricao']; ?>"+
        '</option>   '+

        '<option  >'+
        'oii'+
        '</option>      '+
        'ioii'+







        '<? }; ?>'+
        '</select>'+
        '</div>'+
        '<div class="modal-footer">'+
        '<button type="button" class="btn btn-success" id="" data-dismiss="modal">Ok</button>'+


        '</div>'+
        '</div>'+
        '</div>'+
        '</div>'


        );
    $("#modalteste").modal('show');


});



