<?php

class Application_Model_DbTable_ConcessaoTrajeto extends Zend_Db_Table_Abstract
{

    protected $_name = 'pessoa';
    protected $_rowClass = "Application_Model_CategoriaPassageiro";
    

    public function listarSolicitacoes(){
       return $this->fetchAll();
        
    }
   

}