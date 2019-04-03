<?php

class Application_Model_DbTable_Motorista extends Zend_Db_Table_Abstract{


    protected $_name = 'motorista';
    protected $_rowClass = "Application_Model_Motorista";
    
    public function cadastrarMotorista($dados){
    
   

    
        $motorista = $this->createRow();
        /*@var $usuario Application_Model_Usuario*/
        $motorista->setNome($dados['nome-motorista']);
        $motorista->setCpf($dados['cpf-motorista']);
//       
        
        return $motorista->save();
    
    }
        public function listarTodosMotoristas(){

        return $this->fetchAll();

        }   
    

    
    
    
}