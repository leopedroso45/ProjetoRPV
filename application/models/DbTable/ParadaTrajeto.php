<?php

class Application_Model_DbTable_ParadaTrajeto extends Zend_Db_Table_Abstract
{

    protected $_name = 'parada_trajeto';
    protected $_rowClass = "Application_Model_ParadaTrajeto";
    
    public function cadastrarParadaTrajeto($trajeto, $parada)
    {
        $paradatrajeto = $this->createRow();
        
        $paradatrajeto->setIdParada($parada);
        $paradatrajeto->setIdTrajeto($trajeto);

        
        return $paradatrajeto->save();
    }
    
    
    
    
  
  
    

}