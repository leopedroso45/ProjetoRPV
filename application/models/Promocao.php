<?php

class Application_Model_Promocao extends Zend_Db_Table_Row_Abstract {

    // private $nome_promocao;
    // private $id_promocao;
    // private $descricao_promocao;
    // private $valor_promocao;

    function getNome_promocao() {
        return $this->nome_promocao;
    }

    function getId_promocao() {
        return $this->id_promocao;
    }

    function getDescricao_promocao() {
        return $this->descricao_promocao;
    }

    function getValor_promocao() {
        return $this->valor_promocao;
    }

    function setNome_promocao($nome_promocao) {
        $this->nome_promocao = $nome_promocao;
    }

    function setId_promocao($id_promocao) {
        $this->id_promocao = $id_promocao;
    }

    function setDescricao_promocao($descricao_promocao) {
        $this->descricao_promocao = $descricao_promocao;
    }

    function setValor_promocao($valor_promocao) {
        $this->valor_promocao = $valor_promocao;
    }

}
