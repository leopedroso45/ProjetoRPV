<?php

class Application_Model_Apolice extends Zend_Db_Table_Row_Abstract {

//        private $id_apolice;
//        private $descricao;
//        private $data_inicio;
//        private $data_fim;
//        private $valor;
        
        function getId_apolice()
        {
            return $this->id_apolice;
        }

        function getDescricao()
        {
            return $this->descricao;
        }

        function getData_inicio()
        {
            return $this->data_inicio;
        }

        function getData_fim()
        {
            return $this->data_fim;
        }

        function getValor()
        {
            return $this->valor;
        }

        function setId_apolice($id_apolice)
        {
            $this->id_apolice = $id_apolice;
        }

        function setDescricao($descricao)
        {
            $this->descricao = $descricao;
        }

        function setData_inicio($data_inicio)
        {
            $this->data_inicio = $data_inicio;
        }

        function setData_fim($data_fim)
        {
            $this->data_fim = $data_fim;
        }

        function setValor($valor)
        {
            $this->valor = $valor;
        }

}