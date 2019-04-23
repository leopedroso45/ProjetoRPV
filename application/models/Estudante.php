<?php

class Application_Model_Estudante extends Zend_Db_Table_Row_Abstract {

    // private $comprovante_matricula;
    // private $comprovante_residencia;
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
