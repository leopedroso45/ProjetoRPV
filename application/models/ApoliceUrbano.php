<?php

class Application_Model_ApoliceUrbano extends Zend_Db_Table_Row_Abstract {

//        private $id_apolice;
//        private $id_onibus_urbano;
        
        function getId_apolice()
        {
            return $this->id_apolice;
        }

        function getId_onibus_urbano()
        {
            return $this->id_onibus_urbano;
        }

        function setId_apolice($id_apolice)
        {
            $this->id_apolice = $id_apolice;
        }

        function setId_onibus_urbano($id_onibus_urbano)
        {
            $this->id_onibus_urbano = $id_onibus_urbano;
        }
        
}