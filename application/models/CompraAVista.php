<?php

class Application_Model_CompraAVista extends Zend_Db_Table_Row_Abstract
{

//        private $id_compra;
//        private $id_poltrona;

    function getId_compra()
    {
        return $this->id_compra;
    }

    function getId_poltrona()
    {
        return $this->id_poltrona;
    }

    function setId_compra($id_compra)
    {
        $this->id_compra = $id_compra;
    }

    function setId_poltrona($id_poltrona)
    {
        $this->id_poltrona = $id_poltrona;
    }

}
