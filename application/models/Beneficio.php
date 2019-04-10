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

        function getTipo_deficiencia() {
            return $this->tipo_deficiencia;
        }

        function getAtestado_medico() {
            return $this->atestado_medico;
        }

        function getComprovante_residencia() {
            return $this->comprovante_residencia;
        }

        function getComprovante_matricula() {
            return $this->comprovante_matricula;
        }

        function getCarteira_idoso() {
            return $this->carteira_idoso;
        }

        function setId_solicitacao($id_solicitacao) {
            $this->id_solicitacao = $id_solicitacao;
        }

        function setData_solicitacao($data_solicitacao) {
            $this->data_solicitacao = $data_solicitacao;
        }

        function setIdf_situacao_solicitacao($idf_situacao_solicitacao) {
            $this->idf_situacao_solicitacao = $idf_situacao_solicitacao;
        }

        function setIdf_pessoa($idf_pessoa) {
            $this->idf_pessoa = $idf_pessoa;
        }

        function setId_pessoa($id_pessoa) {
            $this->id_pessoa = $id_pessoa;
        }

        function setId_usuario($id_usuario) {
            $this->id_usuario = $id_usuario;
        }

        function setNome($nome) {
            $this->nome = $nome;
        }

        function setCpf($cpf) {
            $this->cpf = $cpf;
        }

        function setRg($rg) {
            $this->rg = $rg;
        }

        function setRua($rua) {
            $this->rua = $rua;
        }

        function setNumero_casa($numero_casa) {
            $this->numero_casa = $numero_casa;
        }

        function setData_nascimento($data_nascimento) {
            $this->data_nascimento = $data_nascimento;
        }

        function setCelular($celular) {
            $this->celular = $celular;
        }

        function setBairro($bairro) {
            $this->bairro = $bairro;
        }

        function setTipo_deficiencia($tipo_deficiencia) {
            $this->tipo_deficiencia = $tipo_deficiencia;
        }

        function setAtestado_medico($atestado_medico) {
            $this->atestado_medico = $atestado_medico;
        }

        function setComprovante_residencia($comprovante_residencia) {
            $this->comprovante_residencia = $comprovante_residencia;
        }

        function setComprovante_matricula($comprovante_matricula) {
            $this->comprovante_matricula = $comprovante_matricula;
        }

        function setCarteira_idoso($carteira_idoso) {
            $this->carteira_idoso = $carteira_idoso;
        }


    
   

}
