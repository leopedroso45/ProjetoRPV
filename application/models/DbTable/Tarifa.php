<?php
class Application_Model_DbTable_Tarifa extends Zend_Db_Table_Abstract
{
    protected $_name = 'tarifa';
    protected $_rowClass = "Application_Model_Tarifa";
    
    public function cadastrarTarifa($dados, $trajeto)
    {
        //var_dump($dados); die();
        $tarifa = $this->createRow();
        /*@var $paradaOnibus Application_Model_CategoriaOnibus*/
        $tarifa->setValor($dados['valor']);
        $tarifa->setVigencia($dados['vigencia']);
        $tarifa->setId_trajeto($trajeto);
        $tarifa->setSituacao(true);

        return $tarifa->save();
    }
    
    public function editarParadaOnibus($id,$dados)
    {
        //var_dump($id, $dados); die();
        $paradaOnibus = $this->find($id)->current();
       /*@var $paradaOnibus Application_Model_CategoriaOnibus*/
        $paradaOnibus->setNumeroParada($dados['numeroParada']);
        $paradaOnibus->setLocal($dados['local']);
        $paradaOnibus->setComplemento($dados['complemento']);
        return $paradaOnibus->save();
    }
    public function listarTarifas()
    {
        return $this->fetchAll();
    }
    
    public function getTarifaPorId($id)
    {
        $select = $this->select()->where('id_tarifa = ?', $id);
        //var_dump($select->__toString());die();
        return $this->fetchRow($select);
    }
    
}