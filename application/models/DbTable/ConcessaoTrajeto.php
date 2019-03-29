<?php

class Application_Model_DbTable_ConcessaoTrajeto extends Zend_Db_Table_Abstract
{

    protected $_name = 'concessaotrajeto';
    protected $_rowClass = "Application_Model_ConcessaoTrajeto";
    
    public function cadastrarConcessaoTrajeto($dados)
    {
        
//        var_dump($dados);die();
        $concessaoTrajeto = $this->createRow();
        /*@var $concessaoTrajeto Application_Model_ConcessaoTrajeto*/
        $concessaoTrajeto->setData_inicio($dados['dataInicio']);
        $concessaoTrajeto->setData_fim($dados['dataFim']);
        $concessaoTrajeto->setcodConcessao($dados['codConcessao']);
        $concessaoTrajeto->setDoc_autorizacao($dados['docAutorizacao']);
        $concessaoTrajeto->setStatus_concessao($dados['statusConcessao']);        
        
        return $concessaoTrajeto->save();
    }
   

}