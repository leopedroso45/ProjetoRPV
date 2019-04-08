<?php

class Application_Model_Trajeto extends Zend_Db_Table_Row_Abstract
{

	
//	private $id_trajeto;
//    private $id_cobrador;
//    private $id_motorista;
//    private $nome;
//    private $num_paradas;
//    private $chegada;
//    private $partida;
//    private $situacao;



    


    
   

    

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
    public function getIdCobrador()
    {
        return $this->id_cobrador;
    }

    /**
     * @param mixed $id_cobrador
     *
     * @return self
     */
    public function setIdCobrador($id_cobrador)
    {
        $this->id_cobrador = $id_cobrador;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdMotorista()
    {
        return $this->id_motorista;
    }

    /**
     * @param mixed $id_motorista
     *
     * @return self
     */
    public function setIdMotorista($id_motorista)
    {
        $this->id_motorista = $id_motorista;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     *
     * @return self
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getNumParadas()
    {
        return $this->num_paradas;
    }

    /**
     * @param mixed $num_paradas
     *
     * @return self
     */
    public function setNumParadas($num_paradas)
    {
        $this->num_paradas = $num_paradas;

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