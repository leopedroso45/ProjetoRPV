<?php

class Application_Model_ConcessaoTrajeto extends Zend_Db_Table_Row_Abstract {

//        private $extensao;
//        private $nome;
//        private $data_inicio;
//        private $data_fim;
//        private $codConcessao;
//        private $doc_autorizacao;	
//        private $status_concessao;		


    function getNome() {
        return $this->nome;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function getData_inicio() {
        return $this->data_inicio;
    }

    function setData_inicio($data_inicio) {
        $this->data_inicio = $data_inicio;
    }

    function getData_fim() {
        return $this->data_fim;
    }

    function setData_fim($data_fim) {
        $this->data_fim = $data_fim;
    }

    function getcodConcessao() {
        return $this->codConcessao;
    }

    function setcodConcessao($codConcessao) {
        $this->codConcessao = $codConcessao;
    }

    function getDoc_autorizacao() {
        return $this->doc_autorizacao;
    }

    function setDoc_autorizacao($doc_autorizacao) {
        $this->doc_autorizacao = $doc_autorizacao;
    }

    function getStatus_concessao() {
        return $this->status_concessao;
    }

    function setStatus_concessao($status_concessao) {
        $this->status_concessao = $status_concessao;
    }

    function getExtensao() {
        return $this->extensao;
    }

    function setExtensao($extensao) {
        $this->extensao = $extensao;
    }

}
