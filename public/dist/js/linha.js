


//$('#trecho1').blur(function () {
// var tempo_inicial = $("input#total").val();
// var aux = $("input#trecho1").val();
// alert(moment.duration(200, 'hours'));
    
//      var trecho1 = moment(tempo_inicial, 'HH:mm').add(aux , 'minutes').format('hh:mm');
   
     
//     document.getElementById('total').value = trecho1;
// });
// $('#trecho2').blur(function () {

//       var trecho2 = $("input#trecho2").val();

//      var total = $("input#total").val();
//     var soma = total + trecho1;
     
//     document.getElementById('total').value = soma;
// });
//  $('#tempo_fim').blur(function () {
//       var tempo_fim = document.getElementById('tempo_fim').value;
//       var s = document.getElementById('total').value;
//     //  //alert(tempo_fim);
//     //  alert(s);
//     // //   var tempo_fim2 = moment(tempo_fim).format('hh:mm');
//     // // alert(tempo_fim2);
//     // var s2 = moment(s, 'hh:mm').add(10, 'minutes').format('hh:mm');
//     // alert(s2);
//      var total = moment(tempo_fim,'minutes').add(s, 'hh:mm').format('hh:mm'); 
    
     
//     document.getElementById('total').value = total;
// });



var cont = 0;
var cont2 = 100;


$("#add-trecho").click(function ()
{

    if (cont===0) {

         cont++;
    

        $("fieldset").append(   '<div class="row trecho" id="a" style="padding-left: 15px; padding-right: 15px">'+
                                '<div class="col-2" style="padding-top: 30px"><button type="button"class="btn btn-light move up" style="margin-right:5px" ><i class="fas fa-angle-up"></i></button><button type="button" class="btn btn-light move down"><i class="fas fa-angle-down"></i></button></div>'+
                                 
                                '<div class="col-6" >'+
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
                                '<div class="col-3">'+
                                    '<label for="descricao" id="label">Tempo (minutos)</label><label  style="color:red" id="label">*</label>'+
                                    '<input type="text" class="form-control hrs" value="" id="tempo-trecho'+cont+'" name="horarios[]"  placeholder="Duração do trecho"   >'+
                                '</div>'+
                                '<div class="col-1" style="padding-top: 30px">'+
                                    '<button type="button" id="xxx"  class="btn btn-block btn-danger remove" >X</button>'+
                                '</div>'+
                           '</div>');



    }
    else{
        if (document.getElementById("descricao-trecho"+cont).value === "") {


             
            $('.validaTrecho').removeAttr("style");


        

        }
        else if (document.getElementById("tempo-trecho"+cont).value === "") {

            $('.validaTempo').removeAttr("style");

        }
        else{



            cont++;
    

        $("fieldset").append(    '<div class="row trecho" id="a" style="padding-left: 15px; padding-right: 15px">'+
                                '<div class="col-2" style="padding-top: 30px"><button type="button"class="btn btn-light move up" style="margin-right:5px" ><i class="fas fa-angle-up"></i></button><button type="button" class="btn btn-light move down"><i class="fas fa-angle-down"></i></button></div>'+
                                 
                                '<div class="col-6" >'+
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
                                '<div class="col-3">'+
                                    '<label for="descricao" id="label">Tempo (minutos)</label><label  style="color:red" id="label">*</label>'+
                                    '<input type="text" class="form-control hrs" value="" id="tempo-trecho'+cont+'" name="horarios[]"  placeholder="Duração do trecho"   >'+
                                '</div>'+
                                '<div class="col-1" style="padding-top: 30px">'+
                                    '<button type="button" id="xxx"  class="btn btn-block btn-danger remove" >X</button>'+
                                '</div>'+
                           '</div>');


        }
    }

// id="tempo-trecho'+cont+'"
   
        
    
});


$("#tempo-trecho1").blur(function(){
    alert("hdsauisa");
   // $("#tempototal").html("Tempo total estimado da linha: " + $("#tempo-trecho").val() + " minutos." ); 
});

$("#tempo_fim").blur(function(){

        
         var tempo_trechox = $("#tempo-trecho1").val();
       
        
         var tempo_fim = $("#tempo_fim").val();
          //  alert("trecho "+tempo_trechox);
    //      // alert("final "+tempo_fim);
         var total = parseInt(tempo_fim) + parseInt(tempo_trechox);
    // $("#tempototal").html("Tempo total estimado da linha: " + total + " minutos." ); 
   // var um = $("#tempo-trecho1").val();
    //var dois = $("#tempo_fim").val();
    
   
    
    

    //var horas = moment(tres, "hh:mm").add(dois , 'hh:mm').format('hh:mm');
    

      $("#tempototal").html("Tempo total estimado da linha: " + quatro ); 
});

$("#alocar-trecho").click(function () {

    $('.validaTrecho').attr("style", "display:none");
    var id_trecho = $("#sel4 option:selected").val();
    var descricao = $("#sel4 option:selected").text();
    


    //document.getElementById("id-trecho"+cont).value = id_trecho;
    document.getElementById("descricao-trecho"+cont).value = descricao;
    document.getElementById("descricao-trecho"+cont).src = id_trecho;
});

$("#alocar-trecho-inicio").click(function () {

    
    var id_trecho = $("#sel5 option:selected").val();
    var descricao = $("#sel5 option:selected").text();
    


    //document.getElementById("id-trecho"+cont).value = id_trecho;
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

$(document).on("click",".remove", function() {

                var row = $(this).closest('.trecho');
               
                row.remove();
                cont--;
                $('.validaTrecho').attr("style", "display:none");
                $(".validaTempo").attr("style", "display:none");
 });

$(".cadastrar-linha").click(function () {

    var id_trecho;   
    var inicio = $("#descricao-trecho-inicio").val();
    var descricao = $("#descricao").val();
   
    
    var num_trechos;
    var tempo_trecho;    
    var tempototal; // somar todos os minutos dos trechos


    var trechos = [];
    var horarios = [];
    var contt = 0;

   

        //        Coletando todos trechos selecionados
    $('.ids').each(function () {
        //alert($(this).attr("src"));
        trechos.push($(this).attr("src"));


        contt++;

    });
    var tt = 0;
    $('.hrs').each(function () {     
        tt++;
        horarios.push($("#tempo-trecho"+tt).val());


        

    });

    tempo_trecho = horarios.toString();
    
    num_trechos = contt;
    id_trecho = trechos.toString();
    
    //alert("id_parada = " + id_parada+" num_paradas = " + num_paradas );

     if (descricao === "" || descricao === null) {
        $(".validaDescricao").removeAttr("style", "display:none");

    }
    if(inicio === "" || inicio === null){
        $(".validaInicio").removeAttr("style", "display:none");

    }
    
    else{

    $.ajax({
        type: 'POST',
        url: baseUrl + 'linha/index',
        data: {id_trecho: id_trecho, inicio: inicio, descricao: descricao, num_trechos: num_trechos, tempo_trecho: tempo_trecho
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
                }, 2000);

            });

        },
        error: function () {
//                alert('error');
        }
    });

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

});

    




// });

$(document).on("blur",".hrs", function() {   // converte o inteiro em tempo e atualiza o label que mostra o tempo total da linha
   var tempoParcial = 0;
    var contador = 0;
    $('.hrs').each(function () {     
        
       contador++;
       var aux = parseInt($("#tempo-trecho"+contador).val());
       //alert(typeof aux);
       //alert(aux);

      

        // if (typeof aux === "number") {
        //     alert("é numero");
        // }
        // else{
        //     alert("nãoo é numero");

        // }
        tempoParcial = tempoParcial + parseInt($("#tempo-trecho"+contador).val());


        

    });

    var tempoInicial = moment("00:00", "HH:mm").format("HH:mm");
    var tempoTotall = moment(tempoInicial, "HH:mm").add(tempoParcial , 'minutes').format('HH:mm');
    $("#tempototal").html("Tempo total da linha: " + tempoTotall);
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

var idd = parseInt(id);
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



