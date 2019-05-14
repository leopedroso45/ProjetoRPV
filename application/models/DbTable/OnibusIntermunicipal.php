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
        $onibusIntermunicipal->setSituacao('ATIVO');
        $onibusIntermunicipal->setKm($dados['km']);
        $onibusIntermunicipal->setBanheiro($dados['banheiro']);
        $onibusIntermunicipal->setArcondicionado($dados['arcondicionado']);
        $onibusIntermunicipal->setNumero_assentos($dados['numero_assentos']);
        $onibusIntermunicipal->setNumero_passageiros($dados['numero_passageiros']);
        
        return $onibusIntermunicipal->save();
    }
    
        public function editarOnibusIntermunicipal($id, $dados)
    {
        $onibusIntermunicipal = $this->find($id)->current();
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
        $onibusIntermunicipal->setKm($dados['km']);
        $onibusIntermunicipal->setBanheiro($dados['banheiro']);
        $onibusIntermunicipal->setArcondicionado($dados['arcondicionado']);
        $onibusIntermunicipal->setNumero_assentos($dados['numero_assentos']);
        $onibusIntermunicipal->setNumero_passageiros($dados['numero_passageiros']);

        return $onibusIntermunicipal->save();
    }
    
        public function editarStatus($id, $dados)
    {
        $this->find($id)->current();
        $onibus = $this->getOnibusIntermunicipalPorId($id);
        /* @var $onibus Application_Model_OnibusIntermunicipal */

        if ($dados['situacao'] === 'ATIVO') {
            $onibus->setSituacao('ATIVO');
        } elseif ($dados['situacao'] === 'INATIVO') {
            $onibus->setSituacao('INATIVO');
        }

        return $onibus->save();
    }
    
        public function listarTodosOnibusIntermunicipais()
    {
        return $this->fetchAll();
    }
    
        public function getOnibusIntermunicipalPorId($id)
    {
        $select = $this->select()->where('id_onibus_viagem = ?', $id);

        return $this->fetchRow($select);
    }

}