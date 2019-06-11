<?php

class Application_Model_Tarifa_Trajeto extends Zend_Db_Table_Row_Abstract
{
//    private $valor;
//    private $idtrajeto;
//    private $id_tarifa;
    
    function getValor()
    {
        return $this->valor;
    }

    function getIdtrajeto()
    {
        return $this->idtrajeto;
    }

    function getId_tarifa()
    {
        return $this->id_tarifa;
    }

    function setValor($valor)
    {
        $this->valor = $valor;
    }

    function setIdtrajeto($idtrajeto)
    {
        $this->idtrajeto = $idtrajeto;
    }

    function setId_tarifa($id_tarifa)
    {
        $this->id_tarifa = $id_tarifa;
    }


    

    

}