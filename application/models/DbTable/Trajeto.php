<?php

class Application_Model_DbTable_Trajeto extends Zend_Db_Table_Abstract
{

    protected $_name = 'trajeto';
    protected $_rowClass = "Application_Model_Trajeto";

    public function cadastrarTarifa($dados)
    {
        //var_dump($dados); die();
        $tarifa = $this->createRow();
        /* @var $paradaOnibus Application_Model_CategoriaOnibus */
        $tarifa->setValor($dados['valor']);
        $tarifa->setVigencia($dados['vigencia']);
        $tarifa->setSituacao(true);

        return $tarifa->save();
    }

    public function editarParadaOnibus($id, $dados)
    {
        //var_dump($id, $dados); die();
        $paradaOnibus = $this->find($id)->current();
        /* @var $paradaOnibus Application_Model_CategoriaOnibus */
        $paradaOnibus->setNumeroParada($dados['numeroParada']);
        $paradaOnibus->setLocal($dados['local']);
        $paradaOnibus->setComplemento($dados['complemento']);
        return $paradaOnibus->save();
    }

    public function listarTrajetos()
    {
        return $this->fetchAll();
    }

    public function getTrajetoPorId($id)
    {
        $select = $this->select()->where('id_trajeto = ?', $id);
        //var_dump($select->__toString());die();
        return $this->fetchRow($select);
    }

}
