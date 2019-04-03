<?php

class Application_Model_DbTable_OnibusIntermunicipal extends Zend_Db_Table_Abstract
{

    protected $_name = 'onibus_viagem';
    protected $_rowClass = "Application_Model_OnibusIntermunicipal";
    
    public function cadastrarOnibusIntermunicipal($dados)
    {
        $onibusIntermunicipal = $this->createRow();
        /*@var $onibusIntermunicipal Application_Model_OnibusIntermunicipal*/
        $onibusIntermunicipal->setId_categoria_onibus($dados['id_categoria_onibus']);
        $onibusIntermunicipal->setPlaca($dados['placa']);
        $onibusIntermunicipal->setChassi($dados['chassi']);
        $onibusIntermunicipal->setNumero_andares($dados['andares']);
        $onibusIntermunicipal->setAno($dados['ano']);
        $onibusIntermunicipal->setMarca($dados['marca']);
        $onibusIntermunicipal->setModelo($dados['modelo']);
        $onibusIntermunicipal->setRenavam($dados['renavam']);
        $onibusIntermunicipal->setCor($dados['cor']);
        $onibusIntermunicipal->setSituacao($dados['situacao']);
        $onibusIntermunicipal->setKm($dados['km']);
        $onibusIntermunicipal->setBanheiro($dados['banheiro']);
        $onibusIntermunicipal->setArcondicionado($dados['arcondicionado']);
        $onibusIntermunicipal->setNumero_assentos($dados['numero_assentos']);
        $onibusIntermunicipal->setNumero_passageiros($dados['numero_passageiros']);
        
        return $onibusIntermunicipal->save();
    }
    
        public function listarTodosOnibusIntermunicipais()
    {
        return $this->fetchAll();
    }

}