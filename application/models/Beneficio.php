<?php

class Application_Model_Beneficio extends Zend_Db_Table_Row_Abstract {

//        private $id_solicitacao;
//        private $data_solicitacao;
//        private $idf_situacao_solicitacao;
//        private $idf_pessoa;			
//        private $id_pessoa;
//        private $id_usuario;
//        private $nome;
//        private $cpf;
//        private $rg;
//        private $rua;
//        private $numero_casa;
//        private $data_nascimento;
//        private $celular;
//        private $bairro;
//        private $tipo_deficiencia;
//        private $atestado_medico;
//        private $comprovante_residencia;
//        private $comprovante_matricula;
//        private $carteira_idoso;  
    
    function getCarteira_idoso() {
        return $this->carteira_idoso;
    }

    function setCarteira_idoso($carteira_idoso) {
        $this->carteira_idoso = $carteira_idoso;
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

    function getTipo_deficiencia() {
        return $this->tipo_deficiencia;
    }

    function getAtestado_medico() {
        return $this->atestado_medico;
    }

    function setTipo_deficiencia($tipo_deficiencia) {
        $this->tipo_deficiencia = $tipo_deficiencia;
    }

    function setAtestado_medico($atestado_medico) {
        $this->atestado_medico = $atestado_medico;
    }

    function getId_pessoa() {
        return $this->id_pessoa;
    }

    function getId_usuario() {
        return $this->id_usuario;
    }

    function getNome() {
        return $this->nome;
    }

    function getCpf() {
        return $this->cpf;
    }

    function getRg() {
        return $this->rg;
    }

    function getRua() {
        return $this->rua;
    }

    function getNumero_casa() {
        return $this->numero_casa;
    }

    function getData_nascimento() {
        return $this->data_nascimento;
    }

    function getCelular() {
        return $this->celular;
    }

    function getBairro() {
        return $this->bairro;
    }

    function getId_solicitacao() {
        return $this->id_solicitacao;
    }

    function getData_solicitacao() {
        return $this->data_solicitacao;
    }

    function getIdf_situacao_solicitacao() {
        return $this->idf_situacao_solicitacao;
    }

    function getIdf_pessoa() {
        return $this->idf_pessoa;
    }

}
