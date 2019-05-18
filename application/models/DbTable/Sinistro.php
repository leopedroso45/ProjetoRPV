<?php

class Application_Model_DbTable_Sinistro extends Zend_Db_Table_Abstract
{

    protected $_name = 'sinistro';
    protected $_rowClass = "Application_Model_Sinistro";


    
    
    public function cadastrarSinistro($dados)
    {
        $sinistro = $this->createRow();

        // atributos do sinistro
        $sinistro->setDescricao($dados['descricao']);
        $sinistro->setDescricao($dados['causa']);
        $sinistro->setDescricao($dados['culpado']);
        $sinistro->setDescricao($dados['custo']);     


        return $sinistro->save();
    }



    public function listarSinistros()
    {         
        return $this->fetchAll();       
    }

   





    public function getSinistroPorId($id)
    {
        $select = $this->select()->where('id_sinistro = ?', $id);
        
        return $this->fetchRow($select);
    }

//        public function editarAtivo($id, $dados)
//    {
//        $this->find($id)->current();
//        $linha = $this->getlinhaPorId($id);
//        /* @var $viabilidade Application_Model_Viabilidade */
//
//        if ($dados['ativo'] === 'ATIVO') {
//            $linha->setSituacao('ATIVO');
//        } elseif ($dados['ativo'] === 'INATIVO') {
//            $linha->setSituacao('INATIVO');
//        }
//
//        return $linha->save();
//    }

    
   
}