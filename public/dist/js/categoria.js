/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

 $('#descricao').mask('SSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSS');
 $('#tarifa').mask('9.998');
 $('#numeroParada').mask('9999');
$('#local').mask('SSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSS'); //11
$('#complemento').mask('SSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSS'); //17
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
        			$(".alert-success").removeAttr("style");
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
        		data: {numeroParada: numeroParada, local: local, local: local
        		},
        		success: function () {
        			$(".alert-success").removeAttr("style");
        		},
        		error: function () {
        			alert("error");
        		}
        	});
        //}
    });

