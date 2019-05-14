<?php

class Application_Model_LinhaTrecho extends Zend_Db_Table_Row_Abstract
{

	

    // private $id_trecho;
    // private $id_linha;
    // private $local; // acho que nao vai usar
    // private $tempo;
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
    public function getIdParada()
    {
        return $this->id_parada;
    }

    /**
     * @param mixed $id_parada
     *
     * @return self
     */
    public function setIdParada($id_parada)
    {
        $this->id_parada = $id_parada;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdTrajeto()
    {
        return $this->id_trajeto;
    }

    /**
     * @param mixed $id_trajeto
     *
     * @return self
     */
    public function setIdTrajeto($id_trajeto)
    {
        $this->id_trajeto = $id_trajeto;

        return $this;
    }

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
    public function getLocal()
    {
        return $this->local;
    }

    /**
     * @param mixed $local
     *
     * @return self
     */
    public function setLocal($local)
    {
        $this->local = $local;

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