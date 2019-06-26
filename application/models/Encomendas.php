<?php

class Application_Model_Encomendas extends Zend_Db_Table_Row_Abstract {

//    private $nomeProduto;
//    private $altura;
//    private $largura;
//    private $comprimento;
//    private $peso;
//    private $nomeRemetente;
//    private $cpfRemetente;
//    private $ruaRemetente;
//    private $numeroRemetente;
//    private $bairroRemetente;
//    private $cepRemetente;
//    private $ufRemetente; 
//    private $celularRemetente;
//    private $nomeDestinatario;
//    private $cpfDestinatario;        
//    private $ruaDestinatario;
//    private $numeroDestinatario;	
//    private $bairroDestinatario;
//    private $cepDestinatario;
//    private $ufDestinatario;
//    private $celularDestinatario;  

    function getNomeProduto() {
        return $this->nomeProduto;
    }

    function getAltura() {
        return $this->altura;
    }

    function getLargura() {
        return $this->largura;
    }

    function getComprimento() {
        return $this->comprimento;
    }

    function getPeso() {
        return $this->peso;
    }

    function getNomeRemetente() {
        return $this->nomeRemetente;
    }

    function getCpfRemetente() {
        return $this->cpfRemetente;
    }

    function getRuaRemetente() {
        return $this->ruaRemetente;
    }

    function getNumeroRemetente() {
        return $this->numeroRemetente;
    }

    function getBairroRemetente() {
        return $this->bairroRemetente;
    }

    function getCepRemetente() {
        return $this->cepRemetente;
    }

    function getUfRemetente() {
        return $this->ufRemetente;
    }

    function getCelularRemetente() {
        return $this->celularRemetente;
    }

    function getNomeDestinatario() {
        return $this->nomeDestinatario;
    }

    function getCpfDestinatario() {
        return $this->cpfDestinatario;
    }

    function getRuaDestinatario() {
        return $this->ruaDestinatario;
    }

    function getNumeroDestinatario() {
        return $this->numeroDestinatario;
    }

    function getBairroDestinatario() {
        return $this->bairroDestinatario;
    }

    function getCepDestinatario() {
        return $this->cepDestinatario;
    }

    function getUfDestinatario() {
        return $this->ufDestinatario;
    }

    function getCelularDestinatario() {
        return $this->celularDestinatario;
    }

    function setNomeProduto($nomeProduto) {
        $this->nomeProduto = $nomeProduto;
    }

    function setAltura($altura) {
        $this->altura = $altura;
    }

    function setLargura($largura) {
        $this->largura = $largura;
    }

    function setComprimento($comprimento) {
        $this->comprimento = $comprimento;
    }

    function setPeso($peso) {
        $this->peso = $peso;
    }

    function setNomeRemetente($nomeRemetente) {
        $this->nomeRemetente = $nomeRemetente;
    }

    function setCpfRemetente($cpfRemetente) {
        $this->cpfRemetente = $cpfRemetente;
    }

    function setRuaRemetente($ruaRemetente) {
        $this->ruaRemetente = $ruaRemetente;
    }

    function setNumeroRemetente($numeroRemetente) {
        $this->numeroRemetente = $numeroRemetente;
    }

    function setBairroRemetente($bairroRemetente) {
        $this->bairroRemetente = $bairroRemetente;
    }

    function setCepRemetente($cepRemetente) {
        $this->cepRemetente = $cepRemetente;
    }

    function setUfRemetente($ufRemetente) {
        $this->ufRemetente = $ufRemetente;
    }

    function setCelularRemetente($celularRemetente) {
        $this->celularRemetente = $celularRemetente;
    }

    function setNomeDestinatario($nomeDestinatario) {
        $this->nomeDestinatario = $nomeDestinatario;
    }

    function setCpfDestinatario($cpfDestinatario) {
        $this->cpfDestinatario = $cpfDestinatario;
    }

    function setRuaDestinatario($ruaDestinatario) {
        $this->ruaDestinatario = $ruaDestinatario;
    }

    function setNumeroDestinatario($numeroDestinatario) {
        $this->numeroDestinatario = $numeroDestinatario;
    }

    function setBairroDestinatario($bairroDestinatario) {
        $this->bairroDestinatario = $bairroDestinatario;
    }

    function setCepDestinatario($cepDestinatario) {
        $this->cepDestinatario = $cepDestinatario;
    }

    function setUfDestinatario($ufDestinatario) {
        $this->ufDestinatario = $ufDestinatario;
    }

    function setCelularDestinatario($celularDestinatario) {
        $this->celularDestinatario = $celularDestinatario;
    }

}
