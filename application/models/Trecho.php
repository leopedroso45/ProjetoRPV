<?php

class Application_Model_Trecho extends Zend_Db_Table_Row_Abstract
{

	
        // private $id_trecho;
        // private $descricao;
        // private $chegada;
        // private $partida;
        // private $km;

    

    /**
     * @return mixed
     */
    public function getIdTrecho()
    {
        return $this->id_trecho;
    }

    /**
     * @param mixed $id_trecho
     *
     * @return self
     */
    public function setIdTrecho($id_trecho)
    {
        $this->id_trecho = $id_trecho;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * @param mixed $descricao
     *
     * @return self
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getChegada()
    {
        return $this->chegada;
    }

    /**
     * @param mixed $chegada
     *
     * @return self
     */
    public function setChegada($chegada)
    {
        $this->chegada = $chegada;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPartida()
    {
        return $this->partida;
    }

    /**
     * @param mixed $partida
     *
     * @return self
     */
    public function setPartida($partida)
    {
        $this->partida = $partida;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getKm()
    {
        return $this->km;
    }

    /**
     * @param mixed $km
     *
     * @return self
     */
    public function setKm($km)
    {
        $this->km = $km;

        return $this;
    }
}