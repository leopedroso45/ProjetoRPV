$("#segunda").hide();
$("#terca").hide();
$("#quarta").hide();
$("#quinta").hide();
$("#sexta").hide();
$("#sabado").hide();
$("#domingo").hide();



$("#checkSegunda").click(function(){
    if ($("#checkSegunda").is(':checked')) {
        $("#segunda").show('fast');
    }else{
        $("#segunda").hide('fast');
        
    }
});

$("#checkTerca").click(function(){
    if ($("#checkTerca").is(':checked')) {
        $("#terca").show('fast');
    }else{
        $("#terca").hide('fast');
        
    }
});

$("#checkQuarta").click(function(){
    if ($("#checkQuarta").is(':checked')) {
        $("#quarta").show('fast');
    }else{
        $("#quarta").hide('fast');
        
    }
});

$("#checkQuinta").click(function(){
    if ($("#checkQuinta").is(':checked')) {
        $("#quinta").show('fast');
    }else{
        $("#quinta").hide('fast');
        
    }
});

$("#checkSexta").click(function(){
    if ($("#checkSexta").is(':checked')) {
        $("#sexta").show('fast');
    }else{
        $("#sexta").hide('fast');
        
    }
});

$("#checkSabado").click(function(){
    if ($("#checkSabado").is(':checked')) {
        $("#sabado").show('fast');
    }else{
        $("#sabado").hide('fast');
        
    }
});

$("#checkDomingo").click(function(){
    if ($("#checkDomingo").is(':checked')) {
        $("#domingo").show('fast');
    }else{
        $("#domingo").hide('fast');
        
    }
});

$("#alocar-linha").click(function () {


    var id_linha = $("#sel option:selected").val();
    var descricao = $("#sel option:selected").text();
    


    
    document.getElementById("linha").value = descricao;
    document.getElementById("linha").src = id_linha;
});

$("#alocar-motorista").click(function () {


    var id_linha = $("#sel2 option:selected").val();
    var descricao = $("#sel2 option:selected").text();
    


    
    document.getElementById("motorista").value = descricao;
    document.getElementById("motorista").src = id_linha;
});

$("#alocar-onibus").click(function () {


    var id_linha = $("#sel3 option:selected").val();
    var descricao = $("#sel3 option:selected").text();
    


    
    document.getElementById("onibus").value = descricao;
    document.getElementById("onibus").src = id_linha;
});