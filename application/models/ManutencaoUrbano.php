<?php

class Application_Model_ManutencaoUrbano extends Zend_Db_Table_Row_Abstract {

//        private $id_manutencao;
//        private $id_onibus_urbano;
        
        function getId_manutencao()
        {
            return $this->id_manutencao;
        }

        function getId_onibus_urbano()
        {
            return $this->id_onibus_urbano;
        }

        function setId_manutencao($id_manutencao)
        {
            $this->id_manutencao = $id_manutencao;
        }

        function setId_onibus_urbano($id_onibus_urbano)
        {
            $this->id_onibus_urbano = $id_onibus_urbano;
        }
        
}