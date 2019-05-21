<?php

class Application_Model_ParadaTrajeto extends Zend_Db_Table_Row_Abstract
{

	//private $id_parada;
	//private $id_trajeto;


    


    
   

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
}