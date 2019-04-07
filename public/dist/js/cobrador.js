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
	
   $(".cadastrar-cobrador").click(function ()
    {

    	//alert();
        var nome = $("#nome").val();
        //var email = $("#email").val();
        var cpf = $("#cpf").val();
        //var senha = $("#senha").val();
        //var telefone = $("#telefone").val();
        var cnh = $("#cnh").val();
        var pis = $("#pis").val();
        var carteiraTrabalho = $("#carteiraTrabalho").val();
        var rg = $("#rg").val();
        var dataAdmissao = $("#dataAdmissao").val();
        var telefone = $("#telefone").val();
        var email = $("#email").val();
        
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
                     pis: pis, dataAdmissao: dataAdmissao, cnh: cnh, email: email, telefone: telefone
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

     

     $(".edita").click(function ()
    {
        
        var id = $("#id-cobrador").val();        
        var nome = $("#nome").val();
        var cpf = $("#cpf").val();
        var rg  = $("#rg").val();
        var carteiraTrabalho = $("#carteiraTrabalho").val();
        var pis = $("#pis").val();
        var dataAdmissao = $("#dataAdmissao").val();
        var cnh = $("#cnh").val();
        var telefone = $("#telefone").val();
        var email = $("#email").val();
        


        if (nome.length === 0) {
        	
                
        }
        else if (cpf.length === 0) {
        	
        } else {
        

//        alert("id = " + id + ", status = " + status);

        $.ajax({
            type: "POST",
            url: baseUrl + 'cobrador/editar-cobradorajax',
            async: false,
            data: {id: id,
                 nome: nome, cpf: cpf, rg:rg, carteiraTrabalho: carteiraTrabalho,
                pis: pis, dataAdmissao: dataAdmissao, cnh: cnh, telefone: telefone, email: email
            },

            success: function () {
            	
            	bootbox.alert("Alteração realizada com sucesso!", function(){ 

    					location.reload(); 
					});

            },
            error: function () {
            	bootbox.alert("Alteração realizada com sucesso!", function(){ 

    					location.href = baseUrl + 'cobrador'; 
					});
            } 
        });
    }
    
	});

});

function editarAtivo(id, ativo)
    {


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
                 
//                $('.dataTable').reload();
            }
        });
    }




   



