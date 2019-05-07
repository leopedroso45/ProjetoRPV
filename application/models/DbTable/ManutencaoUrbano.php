<?php

class Application_Model_DbTable_ManutencaoUrbano extends Zend_Db_Table_Abstract
{

    protected $_name = 'manutencao_urbano';
    protected $_rowClass = "Application_Model_ManutencaoUrbano";

    public function cadastrarOnibusManutencao($manutencao, $onibus)
    {
        $manutencaoUrbano = $this->createRow();
        /* @var $manutencaoUrbano Application_Model_ManutencaoUrbano */
        $manutencaoUrbano->setId_manutencao($manutencao);
        $manutencaoUrbano->setId_onibus_urbano($onibus);

        return $manutencaoUrbano->save();
    }

}
