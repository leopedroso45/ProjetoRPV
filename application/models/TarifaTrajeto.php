<?php

class Application_Model_Tarifa_Trajeto extends Zend_Db_Table_Row_Abstract
{
    //private $valor;
    //private $id_tarifa;
    //private $id_trajeto;
    
    function getId_tarifa()
    {
        return $this->id_tarifa;
    }

    function getId_trajeto()
    {
        return $this->id_trajeto;
    }

    function getValor()
    {
        return $this->valor;
    }

    function setValor($valor)
    {
        $this->valor = $valor;
    }

    function setId_tarifa($tarifa)
    {
        $this->tarifa = $tarifa;
    }

    function setId_trajeto($id_trajeto)
    {
        $this->id_trajeto = $id_trajeto;
    }

}