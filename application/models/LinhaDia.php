<?php

class Application_Model_LinhaDia extends Zend_Db_Table_Row_Abstract
{

	

    
    // private $id_dia;
    // private $id_linha;
    // private $id_motorista;
    // private $id_onibus_viagem;
    // private $horario_inicio;

    

    /**
     * @return mixed
     */
    public function getIdDia()
    {
        return $this->id_dia;
    }

    /**
     * @param mixed $id_dia
     *
     * @return self
     */
    public function setIdDia($id_dia)
    {
        $this->id_dia = $id_dia;

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
    public function getIdOnibusViagem()
    {
        return $this->id_onibus_viagem;
    }

    /**
     * @param mixed $id_onibus_viagem
     *
     * @return self
     */
    public function setIdOnibusViagem($id_onibus_viagem)
    {
        $this->id_onibus_viagem = $id_onibus_viagem;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getHorarioInicio()
    {
        return $this->horario_inicio;
    }

    /**
     * @param mixed $horario_inicio
     *
     * @return self
     */
    public function setHorarioInicio($horario_inicio)
    {
        $this->horario_inicio = $horario_inicio;

        return $this;
    }
}