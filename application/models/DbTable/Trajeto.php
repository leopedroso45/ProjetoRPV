<?php

class Application_Model_DbTable_Trajeto extends Zend_Db_Table_Abstract
{

    protected $_name = 'trajeto';
    protected $_rowClass = "Application_Model_Trajeto";
    
    public function cadastrarTrajeto($dados)
    {
        $trajeto = $this->createRow();
        /*@var $trajeto Application_Model_trajeto*/
        
        $trajeto->setIdCobrador("id_cobrador"); 
        $trajeto->setIdMotorista("id_motorista");
        $trajeto->setIdOnibus("2");     
        $trajeto->setDescricao($dados['descricao']);
        $trajeto->setNumparadas($dados['num_paradas']);

        
        return $trajeto->save();
    }
   
}