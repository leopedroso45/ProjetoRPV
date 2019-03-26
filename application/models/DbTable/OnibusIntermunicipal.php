<?php

class Application_Model_DbTable_OnibusIntermunicipal extends Zend_Db_Table_Abstract
{

    protected $_name = 'onibus_intermunicipal';
    protected $_rowClass = "Application_Model_OnibusIntermunicipal";
    
    public function cadastrarOnibusIntermunicipal($dados)
    {
        $onibusIntermunicipal = $this->createRow();
        /*@var $onibusIntermunicipal Application_Model_OnibusIntermunicipal*/
        $onibusIntermunicipal->setPlaca($dados['placa']);
        $onibusIntermunicipal->setChassi($dados['chassi']);
        $onibusIntermunicipal->setNumeroAssentos($dados['numero_assentos']);
        
        return $onibusIntermunicipal->save();
    }

}