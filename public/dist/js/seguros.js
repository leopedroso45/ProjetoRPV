$(".cadastrarSeguros").click(function (){
    
    var numeroApolice = $("#numeroApolice").val();
    var seguradora = $("#seguradora").val();
    var nomeSegurado = $("#nomeSegurado").val();
    var cpfSegurado = $("#cpfSegurado").val();
    var valorMensal = $("#valorMensal").val();
    var taxaFranquia = $("#taxaFranquia").val();
    var premioMorte = $("#premioMorte").val();
    var premioInvalidez = $("#premioInvalidez").val();
    var dataInicial = $("#dataInicial").val();
    var dataFinal = $("#dataFinal").val();

    if (numeroApolice.length === 0) {
        $(".numeroApolice").removeAttr("style");
        $(".seguradora").attr("style", "display:none");

    /*} else if (local.length === 0) {
        $(".numeroParada").attr("style", "display:none");
        $(".local").removeAttr("style");*/

    } else {
        $.ajax({
            type: "POST",
            url: baseUrl + 'seguros/index',
            async: false,
            data: {
                numeroApolice: numeroApolice, seguradora: seguradora, nomeSegurado: nomeSegurado, cpfSegurado: cpfSegurado, valorMensal: valorMensal,
                taxaFranquia: taxaFranquia, premioMorte: premioMorte, premioInvalidez: premioInvalidez, dataInicial: dataInicial, dataFinal: dataFinal
            },
            success: function () {
                bootbox.alert("Cadastro realizado com sucesso!", function () {
                    location.reload();
                });

                //$(".alert-success").removeAttr("style");
            },
            error: function () {
                alert("error");
            }
        });
    }
});

$(".editarSeguros").click(function (){
    
    var numeroApolice = $("#numeroApolice").val();
    var seguradora = $("#seguradora").val();
    var nomeSegurado = $("#nomeSegurado").val();
    var cpfSegurado = $("#cpfSegurado").val();
    var valorMensal = $("#valorMensal").val();
    var taxaFranquia = $("#taxaFranquia").val();
    var premioMorte = $("#premioMorte").val();
    var premioInvalidez = $("#premioInvalidez").val();
    var dataInicial = $("#dataInicial").val();
    var dataFinal = $("#dataFinal").val();

    if (numeroApolice.length === 0) {
        $(".numeroApolice").removeAttr("style");
        $(".seguradora").attr("style", "display:none");

    /*} else if (local.length === 0) {
        $(".numeroParada").attr("style", "display:none");
        $(".local").removeAttr("style");*/

    } else {
        $.ajax({
            type: "POST",
            url: baseUrl + 'seguros/editar',
            async: false,
            data: {
                numeroApolice: numeroApolice, seguradora: seguradora, nomeSegurado: nomeSegurado, cpfSegurado: cpfSegurado, valorMensal: valorMensal,
                taxaFranquia: taxaFranquia, premioMorte: premioMorte, premioInvalidez: premioInvalidez, dataInicial: dataInicial, dataFinal: dataFinal
            },
            success: function () {
                bootbox.alert("Cadastro salvo com sucesso!", function () {
                    location.reload();
                });

                //$(".alert-success").removeAttr("style");
            },
            error: function () {
                alert("errorrouuu!");
            }
        });
    }
});