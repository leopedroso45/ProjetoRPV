<?php

class Application_Model_Pessoa extends Zend_Db_Table_Row_Abstract {

//    private $id_pessoa;
//    private $id_usuario;
//    private $nome;
//    private $cpf;
//    private $rg;
//    private $numero_casa;
//    private $data_nascimento;
//    private $celular;
//    private $rua;
//    private $bairro;
//    private $beneficio;

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

    function getNumero_casa() {
        return $this->numero_casa;
    }

    function getData_nascimento() {
        return $this->data_nascimento;
    }

    function getCelular() {
        return $this->celular;
    }

    function getRua() {
        return $this->rua;
    }

    function getBairro() {
        return $this->bairro;
    }

    function getBeneficio() {
        return $this->beneficio;
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

    function setNumero_casa($numero_casa) {
        $this->numero_casa = $numero_casa;
    }

    function setData_nascimento($data_nascimento) {
        $this->data_nascimento = $data_nascimento;
    }

    function setCelular($celular) {
        $this->celular = $celular;
    }

    function setRua($rua) {
        $this->rua = $rua;
    }

    function setBairro($bairro) {
        $this->bairro = $bairro;
    }

    function setBeneficio($beneficio) {
        $this->beneficio = $beneficio;
    }

}
