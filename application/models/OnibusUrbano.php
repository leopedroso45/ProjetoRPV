<?php

class Application_Model_OnibusUrbano extends Zend_Db_Table_Row_Abstract
{
//    private $id_onibus_urbano;
//    private $placa;
//    private $ano;
//    private $marca;
//    private $modelo;
//    private $chassi;
//    private $renavam;
//    private $cor;
//    private $situacao;
//    private $km;
//    private $numero_assentos;
//    private $numero_passageiros;
    
    function getId_onibus_urbano()
    {
        return $this->id_onibus_urbano;
    }

    function getPlaca()
    {
        return $this->placa;
    }

    function getAno()
    {
        return $this->ano;
    }

    function getMarca()
    {
        return $this->marca;
    }

    function getModelo()
    {
        return $this->modelo;
    }

    function getChassi()
    {
        return $this->chassi;
    }

    function getRenavam()
    {
        return $this->renavam;
    }

    function getCor()
    {
        return $this->cor;
    }

    function getSituacao()
    {
        return $this->situacao;
    }

    function getKm()
    {
        return $this->km;
    }

    function getNumero_assentos()
    {
        return $this->numero_assentos;
    }

    function getNumero_passageiros()
    {
        return $this->numero_passageiros;
    }

    function setId_onibus_urbano($id_onibus_urbano)
    {
        $this->id_onibus_urbano = $id_onibus_urbano;
    }

    function setPlaca($placa)
    {
        $this->placa = $placa;
    }

    function setAno($ano)
    {
        $this->ano = $ano;
    }

    function setMarca($marca)
    {
        $this->marca = $marca;
    }

    function setModelo($modelo)
    {
        $this->modelo = $modelo;
    }

    function setChassi($chassi)
    {
        $this->chassi = $chassi;
    }

    function setRenavam($renavam)
    {
        $this->renavam = $renavam;
    }

    function setCor($cor)
    {
        $this->cor = $cor;
    }

    function setSituacao($situacao)
    {
        $this->situacao = $situacao;
    }

    function setKm($km)
    {
        $this->km = $km;
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