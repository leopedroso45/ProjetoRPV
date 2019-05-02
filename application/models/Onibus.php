<?php

class Application_Model_Onibus extends Zend_Db_Table_Row_Abstract
{
    private $placa;
    private $ano;
    private $marca;
    private $modelo;
    private $chassi;
    private $renavam;
    private $cor;
    private $situacao;
    private $km;
    private $numero_assentos;
    private $tipo_onibus;

    public function __construct($placa, $ano, $marca, $modelo, $chassi,
            $renavam, $cor, $situacao, $km, $numero_assentos, $tipo_onibus)
    {
        $this->placa = $placa;
        $this->ano = $ano;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->chassi = $chassi;
        $this->renavam = $renavam;
        $this->cor = $cor;
        $this->situacao = $situacao;
        $this->km = $km;
        $this->numero_assentos = $numero_assentos;
        $this->$tipo_onibus = $tipo_onibus;
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

    function getTipo_onibus()
    {
        return $this->tipo_onibus;
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

    function setTipo_onibus($tipo_onibus)
    {
        $this->tipo_onibus = $tipo_onibus;
    }

}
