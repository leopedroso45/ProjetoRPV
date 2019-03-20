<?php
/**
 * Classe para formatação de data
 */

class Zend_View_Helper_FormatarData extends Zend_View_Helper_Abstract {

    public function FormatarData($data) {
        //Verifica se o data não é nula
        if (!empty($data)) {
            $date = new Zend_Date($data, Sistema_Data::DATABASE_DATE);
            //Verifica se data não é o valor padrão do banco de dados
            if($date->equals('0000-00-00',Sistema_Data::DATABASE_DATE)){
                $dataFormatada = '';
            }else{
                //Formata a data
                $dataFormatada = $date->get(Zend_Date::DATE_SHORT);
                
            }
        } else {
            $dataFormatada = '';
        }
        return $dataFormatada;
    }

}
