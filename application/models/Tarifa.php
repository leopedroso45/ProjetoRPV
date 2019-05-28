<?php

class Application_Model_Tarifa extends Zend_Db_Table_Row_Abstract
{
    //private $valor;
    //private $vigencia;
    //private $situacao;
    //private $id_trajeto;
    
    function getValor()
    {
        return $this->valor;
    }

    function getVigencia()
    {
        return $this->vigencia;
    }

    function getSituacao()
    {
        return $this->situacao;
    }

    function getId_trajeto()
    {
        return $this->id_trajeto;
    }

    function setValor($valor)
    {
        $this->valor = $valor;
    }

    function setVigencia($vigencia)
    {
        $this->vigencia = $vigencia;
    }

    function setSituacao($situacao)
    {
        $this->situacao = $situacao;
    }

    function setId_trajeto($id_trajeto)
    {
        $this->id_trajeto = $id_trajeto;
    }

    function getDescricao()
    {
        return $this->descricao;
    }

    function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }

}