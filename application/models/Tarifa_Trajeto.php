<?php

class Application_Model_Tarifa_Trajeto extends Zend_Db_Table_Row_Abstract
{
//    private $valor;
//    private $id_trajeto;
//    private $id_tarifa;
    
    function getValor()
    {
        return $this->valor;
    }

    function getId_trajeto()
    {
        return $this->id_trajeto;
    }

    function getId_tarifa()
    {
        return $this->id_tarifa;
    }

    function setValor($valor)
    {
        $this->valor = $valor;
    }

    function setId_trajeto($id_trajeto)
    {
        $this->id_trajeto = $id_trajeto;
    }

    function setId_tarifa($id_tarifa)
    {
        $this->id_tarifa = $id_tarifa;
    }
    

}