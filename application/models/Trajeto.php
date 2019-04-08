<?php

class Application_Model_Trajeto extends Zend_Db_Table_Row_Abstract
{
//    private $id_trajeto;
//    private $nome;
//    private $descricao;
//    private $num_paradas;
//    private $chegada;
//    private $partida;
//    private $situacao;
    
    function getId_trajeto()
    {
        return $this->id_trajeto;
    }

    function getNome()
    {
        return $this->nome;
    }

    function getDescricao()
    {
        return $this->descricao;
    }

    function getNum_paradas()
    {
        return $this->num_paradas;
    }

    function getChegada()
    {
        return $this->chegada;
    }

    function getPartida()
    {
        return $this->partida;
    }

    function getSituacao()
    {
        return $this->situacao;
    }

    function setId_trajeto($id_trajeto)
    {
        $this->id_trajeto = $id_trajeto;
    }

    function setNome($nome)
    {
        $this->nome = $nome;
    }

    function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }

    function setNum_paradas($num_paradas)
    {
        $this->num_paradas = $num_paradas;
    }

    function setChegada($chegada)
    {
        $this->chegada = $chegada;
    }

    function setPartida($partida)
    {
        $this->partida = $partida;
    }

    function setSituacao($situacao)
    {
        $this->situacao = $situacao;
    }


}