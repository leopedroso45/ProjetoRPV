<?php

class Application_Model_DbTable_CategoriaOnibus extends Zend_Db_Table_Abstract
{

    protected $_name = 'categoria_onibus';
    protected $_rowClass = "Application_Model_CategoriaOnibus";
    
    public function cadastrarCategoriaOnibus($dados)
    {
        //var_dump($dados); die();
        $categoriaOnibus = $this->createRow();
        /*@var $categoriaOnibus Application_Model_CategoriaOnibus*/
        $categoriaOnibus->setDescricao($dados['descricao']);
        $categoriaOnibus->setTarifa($dados['tarifa']);
        
        return $categoriaOnibus->save();
    }
    
    public function editarCategoriaOnibus($id,$dados)
    {
        //var_dump($id, $dados); die();
        $categoriaOnibus = $this->find($id)->current();
       /*@var $categoriaOnibus Application_Model_CategoriaOnibus*/
        $categoriaOnibus->setDescricao($dados['descricao']);
        $categoriaOnibus->setTarifa($dados['tarifa']);
        
        return $categoriaOnibus->save();
    }

    public function listarCategoriaOnibus()
    {
        return $this->fetchAll();
    }
    
    public function getCategoriaOnibusPorId($id)
    {
        $select = $this->select()->where('id_categoria_onibus = ?', $id);
        //var_dump($select->__toString());die();

        return $this->fetchRow($select);
    }

    


}