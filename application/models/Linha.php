<?php

class Application_Model_Linha extends Zend_Db_Table_Row_Abstract
{

	
        // private $id_linha;
        // private $descricao;
        // private $origem;
        // private $destino;
        // private $tempo;
        // private $num_trechos;
        // private $situacao;
    


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


    /**
     * @return mixed
     */
    public function getIdLinha()
    {
        return $this->id_linha;
    }

    /**
     * @param mixed $id_linha
     *
     * @return self
     */
    public function setIdLinha($id_linha)
    {
        $this->id_linha = $id_linha;

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
    public function getOrigem()
    {
        return $this->origem;
    }

    /**
     * @param mixed $origem
     *
     * @return self
     */
    public function setOrigem($origem)
    {
        $this->origem = $origem;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDestino()
    {
        return $this->destino;
    }

    /**
     * @param mixed $destino
     *
     * @return self
     */
    public function setDestino($destino)
    {
        $this->destino = $destino;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTempo()
    {
        return $this->tempo;
    }

    /**
     * @param mixed $tempo
     *
     * @return self
     */
    public function setTempo($tempo)
    {
        $this->tempo = $tempo;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getNumTrechos()
    {
        return $this->num_trechos;
    }

    /**
     * @param mixed $num_trechos
     *
     * @return self
     */
    public function setNumTrechos($num_trechos)
    {
        $this->num_trechos = $num_trechos;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSituacao()
    {
        return $this->situacao;
    }

    /**
     * @param mixed $situacao
     *
     * @return self
     */
    public function setSituacao($situacao)
    {
        $this->situacao = $situacao;

        return $this;
    }
}