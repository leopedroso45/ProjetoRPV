<?php

class Application_Model_Cobrador extends Zend_Db_Table_Row_Abstract
{

 //   private  $id_cobrador;
 //   private  $nome;
 //   private  $cpf;
 //   private  $rg;
  //  private  $carteiraTrabalho;
  //  private  $pis;
  //  private  $dataAdmissao;
  //  private  $cnh;
    
    





    
    public function getId_cobrador() {
        return $this->id_cobrador;
    }
    
    public function getNome() {
        return $this->nome;
    }

    public function getCpf() {
        return $this->cpf;
    }

   

    
    public function setId_cobrador($id_cobrador) {
        $this->id_cobrador = $id_cobrador;
    }
    
    public function setNome($nome) {
        $this->nome = ($nome);
    }
    
    public function setCpf($cpf) {
        $this->cpf = ($cpf);
    }
    


    /**
     * @return mixed
     */
    public function getAtivo()
    {
        return $this->ativo;
    }

    /**
     * @param mixed $ativo
     *
     * @return self
     */
    public function setAtivo($ativo)
    {
        $this->ativo = $ativo;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getRg()
    {
        return $this->rg;
    }

    /**
     * @param mixed $rg
     *
     * @return self
     */
    public function setRg($rg)
    {
        $this->rg = $rg;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCarteiraTrabalho()
    {
        return $this->carteiraTrabalho;
    }

    /**
     * @param mixed $carteiraTrabalho
     *
     * @return self
     */
    public function setCarteiraTrabalho($carteiraTrabalho)
    {
        $this->carteiraTrabalho = $carteiraTrabalho;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPis()
    {
        return $this->pis;
    }

    /**
     * @param mixed $pis
     *
     * @return self
     */
    public function setPis($pis)
    {
        $this->pis = $pis;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDataAdmissao()
    {
        return $this->dataAdmissao;
    }

    /**
     * @param mixed $dataAdmissao
     *
     * @return self
     */
    public function setDataAdmissao($dataAdmissao)
    {
        $this->dataAdmissao = $dataAdmissao;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCnh()
    {
        return $this->cnh;
    }

    /**
     * @param mixed $cnh
     *
     * @return self
     */
    public function setCnh($cnh)
    {
        $this->cnh = $cnh;

        return $this;
    }
}