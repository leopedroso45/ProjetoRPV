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

    $('.validaLinha').attr("style", "display:none");

    var id_linha = $("#sel option:selected").val();
    var descricao = $("#sel option:selected").text();
    


    
    document.getElementById("linha").value = descricao;
    document.getElementById("linha").src = id_linha;
});

// aloca segunda

$("#alocar-motorista-segunda").click(function () {


    var id_linha = $("#sel2 option:selected").val();
    var descricao = $("#sel2 option:selected").text();
    


    
    document.getElementById("motoristaSegunda").value = descricao;
    document.getElementById("motoristaSegunda").src = id_linha;
});

$("#alocar-onibus-segunda").click(function () {


    var id_linha = $("#sel3 option:selected").val();
    var descricao = $("#sel3 option:selected").text();
    


    
    document.getElementById("onibusSegunda").value = descricao;
    document.getElementById("onibusSegunda").src = id_linha;
});


// aloca terça


$("#alocar-motorista-terca").click(function () {


    var id_linha = $("#sel5 option:selected").val();
    var descricao = $("#sel5 option:selected").text();
    


    
    document.getElementById("motoristaTerca").value = descricao;
    document.getElementById("motoristaTerca").src = id_linha;
});

$("#alocar-onibus-terca").click(function () {


    var id_linha = $("#sel4 option:selected").val();
    var descricao = $("#sel4 option:selected").text();
    


    
    document.getElementById("onibusTerca").value = descricao;
    document.getElementById("onibusTerca").src = id_linha;
});

// aloca quarta


$("#alocar-motorista-quarta").click(function () {


    var id_linha = $("#sel6 option:selected").val();
    var descricao = $("#sel6 option:selected").text();
    


    
    document.getElementById("motoristaQuarta").value = descricao;
    document.getElementById("motoristaQuarta").src = id_linha;
});

$("#alocar-onibus-quarta").click(function () {


    var id_linha = $("#sel7 option:selected").val();
    var descricao = $("#sel7 option:selected").text();
    


    
    document.getElementById("onibusQuarta").value = descricao;
    document.getElementById("onibusQuarta").src = id_linha;
});
// aloca quinta


$("#alocar-motorista-quinta").click(function () {


    var id_linha = $("#sel8 option:selected").val();
    var descricao = $("#sel8 option:selected").text();
    


    
    document.getElementById("motoristaQuinta").value = descricao;
    document.getElementById("motoristaQuinta").src = id_linha;
});

$("#alocar-onibus-quinta").click(function () {


    var id_linha = $("#sel9 option:selected").val();
    var descricao = $("#sel9 option:selected").text();
    


    
    document.getElementById("onibusQuinta").value = descricao;
    document.getElementById("onibusQuinta").src = id_linha;
});

// aloca sexta


$("#alocar-motorista-sexta").click(function () {


    var id_linha = $("#sel10 option:selected").val();
    var descricao = $("#sel10 option:selected").text();
    


    
    document.getElementById("motoristaSexta").value = descricao;
    document.getElementById("motoristaSexta").src = id_linha;
});

$("#alocar-onibus-sexta").click(function () {


    var id_linha = $("#sel11 option:selected").val();
    var descricao = $("#sel11 option:selected").text();
    


    
    document.getElementById("onibusSexta").value = descricao;
    document.getElementById("onibusSexta").src = id_linha;
});

// aloca sabado


$("#alocar-motorista-sabado").click(function () {


    var id_linha = $("#sel12 option:selected").val();
    var descricao = $("#sel12 option:selected").text();
    


    
    document.getElementById("motoristaSabado").value = descricao;
    document.getElementById("motoristaSabado").src = id_linha;
});

$("#alocar-onibus-sabado").click(function () {


    var id_linha = $("#sel13 option:selected").val();
    var descricao = $("#sel13 option:selected").text();
    


    
    document.getElementById("onibusSabado").value = descricao;
    document.getElementById("onibusSabado").src = id_linha;
});

// aloca domingo


$("#alocar-motorista-domingo").click(function () {


    var id_linha = $("#sel14 option:selected").val();
    var descricao = $("#sel14 option:selected").text();
    


    
    document.getElementById("motoristaDomingo").value = descricao;
    document.getElementById("motoristaDomingo").src = id_linha;
});

$("#alocar-onibus-domingo").click(function () {


    var id_linha = $("#sel15 option:selected").val();
    var descricao = $("#sel15 option:selected").text();
    


    
    document.getElementById("onibusDomingo").value = descricao;
    document.getElementById("onibusDomingo").src = id_linha;
});

$(".cadastrar-linha-dia").click(function(){

    var id_linha = $("#linha").attr("src");
  
    var inicios = [];
    var dias = [];
    var motoristas = [];
    var onibus = [];

    if (id_linha === "" || id_linha === null) {
        $('.validaLinha').removeAttr("style");
    }
    else{



   if ($("#checkSegunda").is(':checked')) {
        
        dias.push(1);
        inicios.push($("#saidaSegunda").val());     
        motoristas.push($("#motoristaSegunda").attr("src"));   
        onibus.push($("#onibusSegunda").attr("src"));

    }

    if ($("#checkTerca").is(':checked')) {
        
        dias.push(2);
        inicios.push($("#saidaTerca").val());
        motoristas.push($("#motoristaTerca").attr("src"));
        onibus.push($("#onibusTerca").attr("src"));


    }

    if ($("#checkQuarta").is(':checked')) {

        dias.push(3);
        inicios.push($("#saidaQuarta").val());
        motoristas.push($("#motoristaQuarta").attr("src"));
        onibus.push($("#onibusQuarta").attr("src"));


    }

    if ($("#checkQuinta").is(':checked')) {

        dias.push(4);
        inicios.push($("#saidaQuinta").val());
        motoristas.push($("#motoristaQuinta").attr("src"));
        onibus.push($("#onibusQuinta").attr("src"));


    }

    if ($("#checkSexta").is(':checked')) {

        dias.push(5);
        inicios.push($("#saidaSexta").val());
        motoristas.push($("#motoristaSexta").attr("src"));
        onibus.push($("#onibusSexta").attr("src"));


    }

    if ($("#checkSabado").is(':checked')) {

        dias.push(6);
        inicios.push($("#saidaSabado").val());
        motoristas.push($("#motoristaSabado").attr("src"));
        onibus.push($("#onibusSabado").attr("src"));


    }

    if ($("#checkDomingo").is(':checked')) {

        dias.push(7);
        inicios.push($("#saidaDomingo").val());
        motoristas.push($("#motoristaDomingo").attr("src"));
        onibus.push($("#onibusDomingo").attr("src"));


    }

    var dia = dias.toString();
    var inicio = inicios.toString();
    var motorista = motoristas.toString();
    var bus = onibus.toString();

    




// implementar  cadastro linha dia
    $.ajax({
            type: 'POST',
            url: baseUrl + 'linha-dia/index',
            data: {id_linha: id_linha, dia: dia, inicio: inicio, motorista: motorista, bus: bus

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
                             window.location = baseUrl + 'linha-dia';
                         }
                     }
                 }
             });
                dialog.init(function () {
                    setTimeout(function () {

                        dialog.find('.bootbox-body').html('Cadastro relizado com sucesso!');
                    }, 1000);

                });

            },
            error: function () {
//                alert('error');
}
});

}
});