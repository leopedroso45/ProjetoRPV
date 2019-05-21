<?php

class Application_Model_ApoliceIntermunicipal extends Zend_Db_Table_Row_Abstract {

//        private $id_apolice;
//        private $id_onibus_viagem;
        
        function getId_apolice()
        {
            return $this->id_apolice;
        }

        function getId_onibus_viagem()
        {
            return $this->id_onibus_viagem;
        }

        function setId_apolice($id_apolice)
        {
            $this->id_apolice = $id_apolice;
        }

        function setId_onibus_viagem($id_onibus_viagem)
        {
            $this->id_onibus_viagem = $id_onibus_viagem;
        }
        
}