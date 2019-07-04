<?php

class Application_Model_DbTable_TarifaFrete extends Zend_Db_Table_Abstract
{

    protected $_name = 'tarifa_frete';
    protected $_rowClass = "Application_Model_TarifaFrete";
    

    public function editarTarifaFrete($id,$dados)
    {
        //var_dump($id, $dados); die();
        $tarifa = $this->find($id)->current();
        $tarifa->setPeso($dados['peso']);
        $tarifa->setTamanho($dados['tamanho']);
        $tarifa->setObservacao($dados['obeservacao']);

        return $tarifa->save();
    }

    public function listarTarifaFrete()
    {
        return $this->fetchAll();
    }
    
    public function getTarifaFretePorId($id)
    {
        $select = $this->select()->where('id_tarifa = ?', $id);
        //var_dump($select->__toString());die();

        return $this->fetchRow($select);
    }

    


}