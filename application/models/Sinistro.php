<?php

class Application_Model_Sinistro extends Zend_Db_Table_Row_Abstract {

    private $id_sinistro;
    private $descricao;
    private $causa;
    private $culpado;
    private $custo;

    function getId_sinistro() {
        return $this->id_sinistro;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function getCausa() {
        return $this->causa;
    }

    function getCulpado() {
        return $this->culpado;
    }

    function getCusto() {
        return $this->custo;
    }

    function setId_sinistro($id_sinistro) {
        $this->id_sinistro = $id_sinistro;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    function setCausa($causa) {
        $this->causa = $causa;
    }

    function setCulpado($culpado) {
        $this->culpado = $culpado;
    }

    function setCusto($custo) {
        $this->custo = $custo;
    }

}
