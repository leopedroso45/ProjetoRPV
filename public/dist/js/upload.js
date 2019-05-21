function fazerUpload (){

    var form;
    $('#comprovanteMatricula').change(function (event) {
        form = new FormData();
        form.append('comprovanteMatricula', event.target.files[0]); // para apenas 1 arquivo
        //var name = event.target.files[0].content.name; // para capturar o nome do arquivo com sua extenção
    });
     

//    $('#cadastro').click(function () {

        $.ajax({
            url: 'http://localhost/ProjetoRPV/public/upload.php', // Url do lado server que vai receber o arquivo
            data: form,
            processData: false,
            contentType: false,
            type: 'POST',
            success: function (data) {
                alert("bombou");
                // utilizar o retorno
            },
            error: function () {
                alert("nao bombou");
            }
        });
//    });
}