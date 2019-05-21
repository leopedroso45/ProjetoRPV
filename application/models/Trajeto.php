<?php

class Application_Model_Trajeto extends Zend_Db_Table_Row_Abstract
{
<<<<<<< HEAD
//    private $id_trajeto;
//    private $nome;
//    private $descricao;
//    private $num_paradas;
//    private $chegada;
//    private $partida;
//    private $situacao;
    
    function getId_trajeto()
=======

	
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
    public function getIdTrajeto()
>>>>>>> 1b6c7b8954d13f6f2b603f2bd9f93127fb3395d5
    {
        return $this->id_trajeto;
    }

<<<<<<< HEAD
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


=======
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
>>>>>>> 1b6c7b8954d13f6f2b603f2bd9f93127fb3395d5
}