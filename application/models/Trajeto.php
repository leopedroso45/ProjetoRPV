<?php

class Application_Model_Trajeto extends Zend_Db_Table_Row_Abstract
{

	
//	private $id_trajeto;
   // private $id_cobrador;
   // private $id_motorista;
   // private $nome;
  //  private $num_paradas;
 //   private $chegada;
  //  private $partida;
  //  private $situacao;

   // private $descricao;

  //  private $id_onibus;

    


    
   

    /**
     * @return mixed
     */
    public function getId_trajeto()
    {
        return $this->id_trajeto;
    }

    /**
     * @param mixed $id_trajeto
     *
     * @return self
     */
   

    /**
     * @return mixed
     */
    public function getIdtrajetocobrador()
    {
        return $this->id_trajetocobrador;
    }

    /**
     * @param mixed $id_cobrador
     *
     * @return self
     */
    public function setIdtrajetocobrador($id_cobrador)
    {
        $this->id_trajetocobrador = $id_cobrador;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdtrajetomotorista()
    {
        return $this->id_trajetomotorista;
    }

    /**
     * @param mixed $id_motorista
     *
     * @return self
     */
    public function setIdtrajetomotorista($id_motorista)
    {
        $this->id_trajetomotorista = $id_motorista;

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
    public function getIdtrajetoonibus()
    {
        return $this->id_trajetoonibus;
    }

    /**
     * @param mixed $id_onibus
     *
     * @return self
     */
    public function setIdtrajetoonibus($id_onibus)
    {
        $this->id_trajetoonibus = $id_onibus;

        return $this;
    }
}