<?php

class Application_Model_DbTable_Cobrador extends Zend_Db_Table_Abstract{


    protected $_name = 'cobrador';
    protected $_rowClass = "Application_Model_Cobrador";
    
    public function cadastrarCobrador($dados){
    
   

    
        $cobrador = $this->createRow();
        /*@var $usuario Application_Model_Cobrador*/
        $cobrador->setNome($dados['nome-cobrador']);
        $cobrador->setCpf($dados['cpf-cobrador']);
//       
        
        return $cobrador->save();
    
    }
        
    public function listarTodosCobradores(){

    return $this->fetchAll();

    }

     public function getCobradorPorId($id)
    {
        $select = $this->select()->where('id_cobrador = ?', $id);

        return $this->fetchRow($select);
    }


    public function editarCobrador($id, $dados)
    {

            define('ID', array(
            $id
        ));


        $cobrador = $this->find(ID)->current();
       
        $cobrador->setNome($dados['nome-cobrador']);
        $cobrador->setCpf($dados['cpf-cobrador']);


        return $cobrador->save();
    }


   
}