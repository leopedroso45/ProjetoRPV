<?php

class Application_Model_DbTable_Cobrador extends Zend_Db_Table_Abstract{


    protected $_name = 'cobrador';
    protected $_rowClass = "Application_Model_Cobrador";
    
    public function cadastrarCobrador($dados){
    
   

    
        $cobrador = $this->createRow();
        /*@var $usuario Application_Model_Usuario*/
        $cobrador->setNome($dados['nome-cobrador']);
        $cobrador->setCpf($dados['cpf-cobrador']);
//       
        
        return $cobrador->save();
    
    }
        public function listarTodosCobradores(){

        return $this->fetchAll();

        }   
    

    
    
    
}