<?php

class Application_Model_Idoso extends Zend_Db_Table_Row_Abstract {

    //private $id_idoso;
    // private $carteira_idoso;
    // private $idf_pessoa;
    // private $comprovante_residencia;


    function getCarteira_idoso() {
        return $this->carteira_idoso;
    }

    function setCarteira_idoso($carteira_idoso) {
        $this->carteira_idoso = $carteira_idoso;
    }

    function getId_idoso() {
        return $this->id_idoso;
    }

    function getIdf_pessoa() {
        return $this->idf_pessoa;
    }

    function setId_idoso($id_idoso) {
        $this->id_idoso = $id_idoso;
    }

    function setIdf_pessoa($idf_pessoa) {
        $this->idf_pessoa = $idf_pessoa;
    }

    function getComprovante_residencia() {
        return $this->comprovante_residencia;
    }

    function setComprovante_residencia($comprovante_residencia) {
        $this->comprovante_residencia = $comprovante_residencia;
    }

}
