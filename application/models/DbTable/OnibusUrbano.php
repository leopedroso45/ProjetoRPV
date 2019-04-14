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
        $onibusUrbano->setSituacao('ATIVO');
        $onibusUrbano->setKm($dados['km']);
        $onibusUrbano->setNumero_assentos($dados['numero_assentos']);
        $onibusUrbano->setNumero_passageiros($dados['numero_passageiros']);

        return $onibusUrbano->save();
    }

    public function editarOnibusUrbano($id, $dados)
    {
        $onibusUrbano = $this->find($id)->current();
        /* @var $onibusUrbano Application_Model_OnibusUrbano */
        $onibusUrbano->setPlaca($dados['placa']);
        $onibusUrbano->setChassi($dados['chassi']);
        $onibusUrbano->setAno($dados['ano']);
        $onibusUrbano->setMarca($dados['marca']);
        $onibusUrbano->setModelo($dados['modelo']);
        $onibusUrbano->setRenavam($dados['renavam']);
        $onibusUrbano->setCor($dados['cor']);
        $onibusUrbano->setKm($dados['km']);
        $onibusUrbano->setNumero_assentos($dados['numero_assentos']);
        $onibusUrbano->setNumero_passageiros($dados['numero_passageiros']);

        return $onibusUrbano->save();
    }
    
    public function editarStatus($id, $dados)
    {
        $this->find($id)->current();
        $onibus = $this->getOnibusUrbanoPorId($id);
        /* @var $onibus Application_Model_OnibusUrbano */

        if ($dados['situacao'] === 'ATIVO') {
            $onibus->setSituacao('ATIVO');
        } elseif ($dados['situacao'] === 'INATIVO') {
            $onibus->setSituacao('INATIVO');
        }

        return $onibus->save();
    }

    public function listarTodosOnibusUrbanos()
    {
        return $this->fetchAll();
    }

    public function getOnibusUrbanoPorId($id)
    {
        $select = $this->select()->where('id_onibus_urbano = ?', $id);

        return $this->fetchRow($select);
    }

}
