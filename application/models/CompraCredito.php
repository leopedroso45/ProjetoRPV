<?php

class Application_Model_CompraCredito extends Zend_Db_Table_Row_Abstract
{

//        private $id_compra;
//        private $poltrona;
        
        function getId_compra()
        {
            return $this->id_compra;
        }

        function getPoltrona()
        {
            return $this->poltrona;
        }

        function setId_compra($id_compra)
        {
            $this->id_compra = $id_compra;
        }

        function setPoltrona($poltrona)
        {
            $this->poltrona = $poltrona;
        }




}
