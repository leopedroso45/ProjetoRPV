<?php

class Application_Model_Usuario extends Zend_Db_Table_Row_Abstract
{
    //private $id_usuario;
    //private $id_perfil;
    //private $nome_usuario;
    //private $senha;

	public function getId_usuario() {
		return this.$id_usuario;
	}

	public function setId_usuario($id_usuario){
		this.$id_usuario = $id_usuario;
	}

	public function getId_perfil() {
		return this.$id_perfil;
	}

	public function setId_perfil($id_perfil) {
		this.$id_perfil = $id_perfil;
	}

	public function getNome_usuario() {
		return this.$nome_usuario;
	}

	public function setNome_usuario($nome_usuario) {
		this.$nome_usuario = $nome_usuario;
	}

	public function getSenha() {
		return this.$senha;
	}

	public function setSenha($senha) {
		this.$senha = $senha;
	}
}