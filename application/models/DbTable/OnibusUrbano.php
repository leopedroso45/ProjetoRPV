<?php

class Application_Model_DbTable_OnibusUrbano extends Zend_Db_Table_Abstract
{

    protected $_name = 'onibus_urbano';
    protected $_rowClass = "Application_Model_OnibusUrbano";

    public function cadastrarOnibusUrbano($dados)
    {
        $onibusUrbano = $this->createRow();
        /* @var $onibusUrbano Application_Model_OnibusUrbano */
        $onibusUrbano->setPlaca($dados['placa']);
        $onibusUrbano->setChassi($dados['chassi']);
        $onibusUrbano->setAno($dados['ano']);
        $onibusUrbano->setMarca($dados['marca']);
        $onibusUrbano->setModelo($dados['modelo']);
        $onibusUrbano->setRenavam($dados['renavam']);
        $onibusUrbano->setCor($dados['cor']);
        $onibusUrbano->setSituacao($dados['situacao']);
        $onibusUrbano->setKm($dados['km']);
        $onibusUrbano->setNumero_assentos($dados['numero_assentos']);
        $onibusUrbano->setNumero_passageiros($dados['numero_passageiros']);

        return $onibusUrbano->save();
    }

    public function listarTodosOnibusUrbanos()
    {
        return $this->fetchAll();
    }

}
