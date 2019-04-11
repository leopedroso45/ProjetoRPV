<?php

class Application_Model_DbTable_ParadaOnibus extends Zend_Db_Table_Abstract
{

    protected $_name = 'parada';
    protected $_rowClass = "Application_Model_ParadaOnibus";
    
    public function cadastrarParadaOnibus($dados)
    {
        //var_dump($dados); die();
        $paradaOnibus = $this->createRow();
        /*@var $paradaOnibus Application_Model_CategoriaOnibus*/
        $paradaOnibus->setNumeroParada($dados['numeroParada']);
        $paradaOnibus->setLocal($dados['local']);
        $paradaOnibus->setComplemento($dados['complemento']);
        
        return $paradaOnibus->save();
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

    public function listarParadaOnibus()
    {
        return $this->fetchAll();
    }
    
    public function getParadaOnibusPorId($id)
    {
        $select = $this->select()->where('id_parada = ?', $id);
        //var_dump($select->__toString());die();

        return $this->fetchRow($select);
    }

    


}