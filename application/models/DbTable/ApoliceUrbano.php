<?php

class Application_Model_DbTable_ApoliceUrbano extends Zend_Db_Table_Abstract
{

    protected $_name = 'apolice_urbano';
    protected $_rowClass = "Application_Model_ApoliceUrbano";

    public function cadastrarOnibusApolice($apolice, $onibus)
    {
        $apoliceUrbano = $this->createRow();
        /* @var $apoliceUrbano Application_Model_ApoliceUrbano */
        $apoliceUrbano->setId_apolice($apolice);
        $apoliceUrbano->setId_onibus_urbano($onibus);

        return $apoliceUrbano->save();
    }

}
