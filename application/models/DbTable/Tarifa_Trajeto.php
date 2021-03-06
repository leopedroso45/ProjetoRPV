<?php
class Application_Model_DbTable_Tarifa_Trajeto extends Zend_Db_Table_Abstract
{
    protected $_name = 'tarifa_trajeto';
    protected $_rowClass = "Application_Model_Tarifa_Trajeto";
    
    public function cadastrarTarifaTrajeto($dados, $trajeto, $tarifa)
    {
        $tarifa_trajeto = $this->createRow();
        /*@var $tarifa_trajeto Application_Model_Tarifa_Trajeto*/
        $tarifa_trajeto->setValor($dados['valor']);
        $tarifa_trajeto->setId_trajeto($trajeto);
        $tarifa_trajeto->setId_tarifa($tarifa);
        
        return $tarifa_trajeto->save();
    }
    
}