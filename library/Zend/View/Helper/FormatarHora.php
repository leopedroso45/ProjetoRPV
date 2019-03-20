<?php

class Zend_View_Helper_FormatarHora extends Zend_View_Helper_Abstract {

    public function FormatarHora($data) {
        if (!empty($data)) {
            $date = new Zend_Date($data);
            $dataFormatada = $date->get(Zend_Date::TIME_SHORT);
        } else {
            $dataFormatada = 'Não disponível';
        }

        return $dataFormatada;
    }

}
