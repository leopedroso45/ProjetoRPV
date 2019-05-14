<?php

class Application_Model_Rodoviaria extends Zend_Db_Table_Row_Abstract {

//    private $codRodoviaria;
//    private $nome;
//    private $cidade;
//    private $estado;
//    private $responsavel;
//    private $data_inicio;
//    private $status_rodoviaria;


    function getResponsavel() {
        return $this->responsavel;
    }

    function setResponsavel($responsavel) {
        $this->responsavel = $responsavel;
    }

    function getData_inicio() {
        return $this->data_inicio;
    }

    function setData_inicio($data_inicio) {
        $this->data_inicio = $data_inicio;
    }

    function getCodRodoviaria() {
        return $this->codRodoviaria;
    }

    function getNome() {
        return $this->nome;
    }

    function getCidade() {
        return $this->cidade;
    }

    function getEstado() {
        return $this->estado;
    }

    function getStatus_rodoviaria() {
        return $this->status_rodoviaria;
    }

    function setCodRodoviaria($codRodoviaria) {
        $this->codRodoviaria = $codRodoviaria;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setCidade($cidade) {
        $this->cidade = $cidade;
    }

    function setEstado($estado) {
        $this->estado = $estado;
    }

    function setStatus_rodoviaria($status_rodoviaria) {
        $this->status_rodoviaria = $status_rodoviaria;
    }

}
