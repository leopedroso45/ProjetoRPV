<?php

class Application_Model_DbTable_ManutencaoViagem extends Zend_Db_Table_Abstract
{

    protected $_name = 'manutencao_viagem';
    protected $_rowClass = "Application_Model_ManutencaoViagem";

    public function cadastrarOnibusManutencao($manutencao, $onibus)
    {
        $manutencaoViagem = $this->createRow();
        /* @var $manutencaoViagem Application_Model_ManutencaoIntermunicipal */
        $manutencaoViagem->setId_manutencao($manutencao);
        $manutencaoViagem->setId_onibus_viagem($onibus);

        return $manutencaoViagem->save();
    }

}
