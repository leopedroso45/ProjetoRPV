<?php

class Application_Model_Tarifa extends Zend_Db_Table_Row_Abstract
{
    //private $valor;
    //private $vigencia;
    //private $situacao;

	public function getValor() {
		return $this ->valor;
	}

	public function setValor($valor) {
        $this->valor = $valor;
	}

	public function getVigencia() {
		return $this ->vigencia;
	}

	public function setVigencia($vigencia) {
		$this->vigencia = $vigencia;
	}

	public function getSituacao() {
		return $this->situacao;
	}

	public function setSituacao($situacao) {
		$this->situacao = $situacao;
	}

}