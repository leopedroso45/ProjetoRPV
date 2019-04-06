/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */




$(document).ready(function(){
$('#pis-cobrador').mask('9999999999');
$('#cnh-cobrador').mask('999999999999');
$('#rg-cobrador').mask('AAAAAAAAAAAA');
$('#cpf-cobrador').mask('999999999-99');


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
	
   $(".btn-outline-success").click(function ()
    {

    	//alert();
        var nome = $("#nome-cobrador").val();
        //var email = $("#email").val();
        var cpf = $("#cpf-cobrador").val();
        //var senha = $("#senha").val();
        //var telefone = $("#telefone").val();
        var cnh = $("#cnh-cobrador").val();
        var pis = $("#pis-cobrador").val();
        var carteiraTrabalho = $("#carteiraTrabalho-cobrador").val();
        var rg = $("#rg-cobrador").val();
        var dataAdmissao = $("#dataAdmissao-cobrador").val();
        
        if (nome.length === 0) {
        	$('.nome').removeAttr("style");
                
        }
        else if (cpf.length === 0) {
        	$('.cpf').removeAttr("style");	
        	$('.nome').attr("style", "display:none");	
        } else {
            $.ajax({
                type: "POST",
                url: baseUrl + 'cobrador/index',
                async: false,
                data: {nome: nome, cpf: cpf,
                      rg: rg, carteiraTrabalho: carteiraTrabalho,
                     pis: pis, dataAdmissao: dataAdmissao, cnh: cnh
                },
                success: function () {
                	//$('.alert-success').removeAttr("style");
                	bootbox.alert("Cadastro realizado com sucesso!", function(){ 

    					location.reload(); 
					});










                	     },
                error: function () {
                    

                }
            });
        }
    

    });

     $(".plug").click(function ()
    {
        var $this = $(this);
        var ativo;
        var id = $("#id-cobrador").val();

        if ($this.hasClass('aberto')) {
            ativo = 'ATIVO';

        } else if ($this.hasClass('fechado')) {
            ativo = 'INATIVO';

        } else if ($this.hasClass(null)) {
//            alert('contate a manutenção');
        }

//        alert("id = " + id + ", status = " + status);

        $.ajax({
            type: "POST",
            url: baseUrl + 'cobrador/editar-ativo',
            async: false,
            data: {id: id,
                ativo: ativo
            },
            success: function () {

            },
            error: function () {
//                 alert();
//                $('.dataTable').reload();
            }
        });
    });

   });


