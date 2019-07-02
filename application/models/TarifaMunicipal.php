<?php

class Application_Model_TarifaMunicipal extends Zend_Db_Table_Row_Abstract
{

	
        // private $id_tarifa_intermunicipal;
        // private $id_categoria_onibus;
        // private $valor;
        // private $data_inicio;
        // private $data_fim;
        // private $status;

 

    /**
     * @return mixed
     */
    public function getIdTarifaMunicipal()
    {
        return $this->id_tarifa_Municipal;
    }

    /**
     * @param mixed $id_tarifa_intermunicipal
     *
     * @return self
     */
    public function setIdTarifaMunicipal($id_tarifa_municipal)
    {
        $this->id_tarifa_municipal = $id_tarifa_municipal;

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
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * @param mixed $valor
     *
     * @return self
     */
    public function setValor($valor)
    {
        $this->valor = $valor;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDataInicio()
    {
        return $this->data_inicio;
    }

    /**
     * @param mixed $data_inicio
     *
     * @return self
     */
    public function setDataInicio($data_inicio)
    {
        $this->data_inicio = $data_inicio;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDataFim()
    {
        return $this->data_fim;
    }

    /**
     * @param mixed $data_fim
     *
     * @return self
     */
    public function setDataFim($data_fim)
    {
        $this->data_fim = $data_fim;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }
}