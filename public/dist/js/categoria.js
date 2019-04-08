

 $('#descricao').mask('SSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSS');
 $('#tarifa').mask('9.998');
 $('#numeroParada').mask('9999');
$('#modelo').mask('SSSSSSSSSSSSSS');
$('#marca').mask('SSSSSSSSSSSSSS');
$('#cor').mask('SSSSSSSSSSSSSSSS');
$('#banheiro').mask('99');
$('#arcondicionado').mask('99');
$('#numero_passageiros').mask('999');
$('#cpf-cobrador').mask('999999999-99');


var estado = document.getElementById('estado');
$('#onoff1').on('change', function() {
	var el = this;
	estado.innerHTML = el.checked ? 'ligado' : 'desligado';

// aqui podes juntar a lógica do ajax
             $.ajax({
            	url: "some.php",
            	data: {
        		estado: this.checked
            	}
            }).done(function(msg) {
if (msg == 'failed') return el.checked = !el.checked; // caso o servidor retorne "failed" mudar o estado do botão
            else alert("Info gravada: " + msg);
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

$(".cadastrarTarifa").click(function ()
{

	var descricao = $("#descricao").val();
	var tarifa = $("#tarifa").val();


     /*   if (descricao.length < 3) {
            $('.descricao').removeClass('hidden');
            $('.alert-success').addClass('hidden');

        } else if (tarifa.length < 10) {
            $('.descricao').addClass('hidden');
            $('.tarifa').removeClass('hidden');
            $('.alert-success').addClass('hidden');*/

        //} else {
        	$.ajax({
        		type: "POST",
        		url: baseUrl + 'categoria-onibus/index',
        		async: false,
        		data: {descricao: descricao, tarifa: tarifa
        		},
        		success: function () {
        			bootbox.alert("Cadastro realizado com sucesso!", function(){
                        size: "small"
                        location.reload();
                    }); 
        		},
        		error: function () {
        			alert("error");
        		}
        	});
        //}
    });


$(".cadastrarParada").click(function ()
{

	var numeroParada = $("#numeroParada").val();
	var local = $("#local").val();
	var complemento = $("#complemento").val();

     /*   if (descricao.length < 3) {
            $('.descricao').removeClass('hidden');
            $('.alert-success').addClass('hidden');

        } else if (tarifa.length < 10) {
            $('.descricao').addClass('hidden');
            $('.tarifa').removeClass('hidden');
            $('.alert-success').addClass('hidden');*/

        //} else {
        	$.ajax({
        		type: "POST",
        		url: baseUrl + 'parada-onibus/index',
        		async: false,
        		data: {numeroParada: numeroParada, local: local, complemento: complemento
        		},
        		success: function () {
                    bootbox.alert("Cadastro realizado com sucesso!", function(){
                        location.reload();
                    });
                    
        			//$(".alert-success").removeAttr("style");
        		},
        		error: function () {
        			alert("error");
        		}
        	});
        //}
    });



$(".cadastrarFormaPagamento").click(function ()
{

    var descricao = $("#descricao").val();
  

     /*   if (descricao.length < 3) {
            $('.descricao').removeClass('hidden');
            $('.alert-success').addClass('hidden');

        } else if (tarifa.length < 10) {
            $('.descricao').addClass('hidden');
            $('.tarifa').removeClass('hidden');
            $('.alert-success').addClass('hidden');*/

        //} else {
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
        //}
    });


$(".editarFormaPagamento").click(function ()
{
    var id = $("#id_pagamento").val();
    var descricao = $("#descricao").val();

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
        //}
    });

//alert();

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



