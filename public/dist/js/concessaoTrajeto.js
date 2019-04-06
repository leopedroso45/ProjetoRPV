    $(document).ready(function () {

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