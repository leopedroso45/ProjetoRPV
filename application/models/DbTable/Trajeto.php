<?php

class Application_Model_DbTable_Trajeto extends Zend_Db_Table_Abstract
{

    protected $_name = 'trajeto';
    protected $_rowClass = "Application_Model_Trajeto";
    
    public function cadastrarTrajeto($dados)
    {
        $trajeto = $this->createRow();
        /*@var $trajeto Application_Model_trajeto*/
        
        $trajeto->setId_cobrador("1"); 
        $trajeto->setId_motorista("1");
        $trajeto->setId_onibus("1");     
        $trajeto->setDescricao($dados['descricao']);
        $trajeto->setNum_paradas($dados['num_paradas']);

        
        return $trajeto->save();
    }
   
}