<?php

class Application_Model_DbTable_ApoliceIntermunicipal extends Zend_Db_Table_Abstract
{

    protected $_name = 'apolice_viagem';
    protected $_rowClass = "Application_Model_ApoliceIntermunicipal";

    public function cadastrarOnibusApolice($apolice, $onibus)
    {
        $apoliceIntermunicipal = $this->createRow();
        /* @var $apoliceIntermunicipal Application_Model_ApoliceIntermunicipal */
        $apoliceIntermunicipal->setId_apolice($apolice);
        $apoliceIntermunicipal->setId_onibus_viagem($onibus);

        return $apoliceIntermunicipal->save();
    }

}
