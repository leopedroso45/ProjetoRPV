<?php

class Application_Model_Funcionario extends Zend_Db_Table_Row_Abstract
{
 
	//private $id;
    //private $nome;
    //private $dataN;
    //private $cpf;
    //private $rg;
    //private $ctps;
    //private $pis;
    //private $cnh;
    //private $telefone;
    //private $salario;
    //private $email;
    //private $dataAdmissao;
    //private $id_cidade;
    //private $endereco;
    //private $numCasa;
    //private $bairro;

	public function getId_Usuario(){
		return $this->$id_usuario;
	}

	public function setId_Usuario($id_usuario){
		$this->$id_usuario = $id_usuario;
	}

	public function getnome() {
		return $this->nome;
	}

	public function setNome($nome) {
		$this->$nome = $nome;
	}

	public function getDataN() {
		return $this->$dataN;
	}

	public function setDataN($dataN) {
		$this->$dataN = $dataN;
	}

	public function getCpf() {
		return $this->$cpf;
	}

	public function setCpf($cpf) {
		$this->$cpf = $cpf;
	}

	public function getRg() {
		return $this->$rg;
	}

	public function setRg($rg) {
		$this->$rg = $rg;
	}

	public function getCtps() {
		return $this->$ctps;
	}

	public function setCtps($ctps) {
		$this->$ctps = $ctps;
	}

	public function getPis() {
		return $this->$pis;
	}

	public function setPis($pis) {
		$this->$pis = $pis;
	}

	public function getCnh() {
		return $this->$cnh;
	}

	public function setCnh($cnh) {
		$this->$cnh = $cnh;
	}

	public function getTelefone() {
		return $this->$telefone;
	}

	public function setTelefone($telefone) {
		$this->$telefone = $telefone;
	}

	public function getSalario() {
		return $this->$salario;
	}

	public function setSalario($salario) {
		$this->$salario = $salario;
	}

	public function getEmail() {
		return $this->$email;
	}

	public function setEmail($email) {
		$this->$email = $email;
	}

	public function getDataAdmissao() {
		return $this->$dataAdmissao;
	}

	public function setDataAdmissao($dataAdmissao) {
		$this->$dataAdmissao = $dataAdmissao;
	}

	public function getCidade() {
		return $this->$id_cidade;
	}

	public function setCidade($id_cidade) {
		$this->$id_cidade = $id_cidade;
	}

	public function getEndereco() {
		return $this->$endereco;
	}

	public function setEndereco($endereco) {
		$this->$endereco = $endereco;
	}

	public function getNumCasa() {
		return $this->$numCasa;
	}

	public function setNumCasa($numCasa) {
		$this->$numCasa = $numCasa;
	}

	public function getBairro() {
		return $this->$bairro;
	}

	public function setBairro($bairro) {
		$this->$bairro = $bairro;
	}

    
    
}