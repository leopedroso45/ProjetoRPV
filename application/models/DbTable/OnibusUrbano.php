<?php

class Application_Model_DbTable_OnibusUrbano extends Zend_Db_Table_Abstract
{

    protected $_name = 'onibusUrbano';
    protected $_rowClass = "Application_Model_OnibusUrbano";
    
    public function cadastrarOnibusUrbano($dados)
    {
        $onibusUrbano = $this->createRow();
        /*@var $onibusUrbano Application_Model_OnibusUrbano*/
        $onibusUrbano->setPlaca($dados['placa']);
        $onibusUrbano->setChassi($dados['chassi']);
        $onibusUrbano->setNumeroAssentos($dados['numero_assentos']);
        
        return $onibusUrbano->save();
    }

}