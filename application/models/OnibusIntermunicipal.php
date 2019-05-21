<?php

class Application_Model_OnibusIntermunicipal extends Zend_Db_Table_Row_Abstract
{
//    private $id_onibus_viagem;
//    private $id_categoria_onibus;
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
//    private $arcondicionado;
//    private $banheiro;
//    private $numero_andares;
    
    function getId_onibus_viagem()
    {
        return $this->id_onibus_viagem;
    }

    function getId_categoria_onibus()
    {
        return $this->id_categoria_onibus;
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

    function getArcondicionado()
    {
        return $this->arcondicionado;
    }

    function getBanheiro()
    {
        return $this->banheiro;
    }

    function getNumero_andares()
    {
        return $this->numero_andares;
    }

    function setId_onibus_viagem($id_onibus_viagem)
    {
        $this->id_onibus_viagem = $id_onibus_viagem;
    }

    function setId_categoria_onibus($id_categoria_onibus)
    {
        $this->id_categoria_onibus = $id_categoria_onibus;
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

    function setArcondicionado($arcondicionado)
    {
        $this->arcondicionado = $arcondicionado;
    }

    function setBanheiro($banheiro)
    {
        $this->banheiro = $banheiro;
    }

    function setNumero_andares($numero_andares)
    {
        $this->numero_andares = $numero_andares;
    }



}