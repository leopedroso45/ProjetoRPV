$(document).ready(function () {
    $('.datedropper').dateDropper({
        lang: 'pt'
    });

    $('.onibus').DataTable();

//    $("#seta1").click(function ()
//    {
//        var id = $("#sel3 option:selected").val();
//        var placa = $("#sel3 option:selected").text();
//
//
//        if (id == null) {
//            $("div#aviso").show("slow");
//
//        } else {
//            $("#teste1").append('<div class="col-lg-12" id="onibusx" style="padding: 10px; padding-bottom: 0px;">' +
//                    '<a class="form-control ids" at=' + id + ' type="text" name="onibus[]"  disabled style="color: black; padding-left: 10px;">' + placa + ' </a>' +
//                    '</div>'
//                    );
//            // document.getElementById(id_parada).value = local;
//        }
//
//    });

    $("#form-apolices").submit(function (event) {
        event.preventDefault();

        var id_onibus;
        var onibus = [];

        $('.ids').each(function () {
            onibus.push($(this).attr("at"));
        });
        
        id_onibus = onibus.toString();
        
        alert("id_onibus = "+id_onibus);

    });


});

$(function () {
    
    $('body').on('click', 'tbody tr', function () {
        id = $(this).attr('id');
        $(this).toggleClass('active');
    });

    $('.list-arrows button').click(function () {
        var $button = $(this), actives = '';

        if ($button.hasClass('move-left')) {
            actives = $('.list-right table tr.active');
            actives.clone().appendTo('.list-left table');
//            document.getElementById(id).src = id;
            $(".list-left table").append('<a type="text" at='+ id +' class="ids" name="onibus[]" style="display: none;"></a>');
            actives.remove();

        } else if ($button.hasClass('move-right')) {
            actives = $('.list-left table tr.active');
            actives.clone().appendTo('.list-right table');
            
            document.getElementsByClassName("ids")[0].remove();
            actives.remove();
        }
    });

    $('.dual-list .selector').click(function () {
        var $checkBox = $(this);
        if (!$checkBox.hasClass('selected')) {
            $checkBox.addClass('selected').closest('.well').find('table tbody tr:not(.active)').addClass('active');
            $checkBox.children('i').removeClass('fa-circle-notch').addClass('fa-check-circle');
        } else {
            $checkBox.removeClass('selected').closest('.well').find('table tbody tr.active').removeClass('active');
            $checkBox.children('i').removeClass('fa-check-circle').addClass('fa-circle-notch');
        }
    });

    $('[name="SearchDualList"]').keyup(function (e) {
        var code = e.keyCode || e.which;
        if (code == '9')
            return;
        if (code == '27')
            $(this).val(null);
        var $rows = $(this).closest('.dual-list').find('table tr');
        var val = $.trim($(this).val()).replace(/ +/g, ' ').toLowerCase();
        $rows.show().filter(function () {
            var text = $(this).text().replace(/\s+/g, ' ').toLowerCase();
            return !~text.indexOf(val);
        }).hide();
    });
});