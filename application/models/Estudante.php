<?php

class Application_Model_Estudante extends Zend_Db_Table_Row_Abstract {

    //private $id_estudante;
    // private $comprovante_matricula;
    // private $idf_pessoa;
    // private $comprovante_residencia;



    function getId_estudante() {
        return $this->id_estudante;
    }

    function getIdf_pessoa() {
        return $this->idf_pessoa;
    }

    function setId_estudante($id_estudante) {
        $this->id_estudante = $id_estudante;
    }

    function setIdf_pessoa($idf_pessoa) {
        $this->idf_pessoa = $idf_pessoa;
    }

    function getComprovante_matricula() {
        return $this->comprovante_matricula;
    }

    function getComprovante_residencia() {
        return $this->comprovante_residencia;
    }

    function setComprovante_matricula($comprovante_matricula) {
        $this->comprovante_matricula = $comprovante_matricula;
    }

    function setComprovante_residencia($comprovante_residencia) {
        $this->comprovante_residencia = $comprovante_residencia;
    }

}
