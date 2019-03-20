<?php

class Zend_View_Helper_FormatarDataExtenso extends Zend_View_Helper_Abstract {

    public function FormatarDataExtenso($data) {
        $date = new Zend_Date($data, Sistema_Data::DATABASE_DATE);
        return $date->get(Zend_Date::DATE_FULL);
    }

}
