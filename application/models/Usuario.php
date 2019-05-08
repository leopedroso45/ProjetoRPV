<?php

class Application_Model_Usuario extends Zend_Db_Table_Row_Abstract {

//    private $id_perfil;
//    private $id_usuario;
//    private $nome_usuario;
//    private $senha;

    function getId_perfil() {
        return $this->id_perfil;
    }

    function getId_usuario() {
        return $this->id_usuario;
    }

    function getNome_usuario() {
        return $this->nome_usuario;
    }

    function getSenha() {
        return $this->senha;
    }

    function setId_perfil($id_perfil) {
        $this->id_perfil = $id_perfil;
    }

    function setId_usuario($id_usuario) {
        $this->id_usuario = $id_usuario;
    }

    function setNome_usuario($nome_usuario) {
        $this->nome_usuario = $nome_usuario;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }

}
