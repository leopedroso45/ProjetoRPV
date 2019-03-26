<?php

class Application_Model_OnibusUrbano extends Zend_Db_Table_Row_Abstract
{
//    private $placa;
//    private $chassi;
//    private $numero_assentos;
//    private $numero_passageiros;
    
    function getPlaca()
    {
        return $this->placa;
    }

    function getChassi()
    {
        return $this->chassi;
    }

    function getNumero_assentos()
    {
        return $this->numero_assentos;
    }

    function getNumero_passageiros()
    {
        return $this->numero_passageiros;
    }

    function setPlaca($placa)
    {
        $this->placa = $placa;
    }

    function setChassi($chassi)
    {
        $this->chassi = $chassi;
    }

    function setNumero_assentos($numero_assentos)
    {
        $this->numero_assentos = $numero_assentos;
    }

    function setNumero_passageiros($numero_passageiros)
    {
        $this->numero_passageiros = $numero_passageiros;
    }

}