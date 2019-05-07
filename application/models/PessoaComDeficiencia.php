<?php

class Application_Model_PessoaComDeficiencia extends Zend_Db_Table_Row_Abstract {

    // private $id_pessoa_com_deficiencia;
    // private $tipo_deficiencia;
    // private $atestado_medico;
    // private $idf_pessoa;

    function getId_pessoa_com_deficiencia() {
        return $this->id_pessoa_com_deficiencia;
    }

    function getTipo_deficiencia() {
        return $this->tipo_deficiencia;
    }

    function getAtestado_medico() {
        return $this->atestado_medico;
    }

    function getIdf_pessoa() {
        return $this->idf_pessoa;
    }

    function setId_pessoa_com_deficiencia($id_pessoa_com_deficiencia) {
        $this->id_pessoa_com_deficiencia = $id_pessoa_com_deficiencia;
    }

    function setTipo_deficiencia($tipo_deficiencia) {
        $this->tipo_deficiencia = $tipo_deficiencia;
    }

    function setAtestado_medico($atestado_medico) {
        $this->atestado_medico = $atestado_medico;
    }

    function setIdf_pessoa($idf_pessoa) {
        $this->idf_pessoa = $idf_pessoa;
    }

}
