/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$('#placa').mask('AAA-9999');
$('#ano').mask('9999');
$('#km').mask('99999999');
$('#renavam').mask('99999999999'); //11
$('#chassi').mask('99999999999999999'); //17
$('#modelo').mask('SSSSSSSSSSSSSS');
$('#marca').mask('SSSSSSSSSSSSSS');
$('#cor').mask('SSSSSSSSSSSSSSSS');
$('#banheiro').mask('99');
$('#arcondicionado').mask('99');
$('#numero_passageiros').mask('999');
$('#numero_assentos').mask('999');

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
})