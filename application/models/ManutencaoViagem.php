<?php

class Application_Model_ManutencaoViagem extends Zend_Db_Table_Row_Abstract {

//        private $id_manutencao;
//        private $id_onibus_viagem;
        
        function getId_manutencao()
        {
            return $this->id_manutencao;
        }

        function getId_onibus_viagem()
        {
            return $this->id_onibus_viagem;
        }

        function setId_manutencao($id_manutencao)
        {
            $this->id_manutencao = $id_manutencao;
        }

        function setId_onibus_viagem($id_onibus_viagem)
        {
            $this->id_onibus_viagem = $id_onibus_viagem;
        }
        
}