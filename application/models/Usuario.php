<?php

class Application_Model_Usuario extends Zend_Db_Table_Row_Abstract
{
//    private $cod_aluno;
//    private $cod_usuario;
//    private $cod_tipoUsuario;
//    private $foto;
//    private $login;
//    private $senha;
    
    public function getCod_usuario() {
        return $this->cod_usuario;
    }
    
    public function getCod_aluno() {
        return $this->cod_aluno;
    }

    public function getCod_tipoUsuario() {
        return $this->cod_tipo_usuario;
    }

    public function getLogin() {
        return $this->login;
    }

    public function getSenha() {
        return $this->senha;
    }
    
    public function getFoto() {
        return $this->foto;
    }

    public function setCod_usuario($cod_usuario) {
        $this->cod_usuario = $cod_usuario;
    }
    
    public function setCod_aluno($cod_aluno) {
        $this->cod_aluno = $cod_aluno;
    }
    
    public function setCod_tipoUsuario($cod_tipo_usuario) {
        $this->cod_tipo_usuario = $cod_tipo_usuario;
    }
    
    public function setLogin($login) {
        $this->login = $login;
    }
    
    public function setSenha($senha) {
        $this->senha = sha1($senha);
    }
    
    public function setFoto($foto) {
        $this->foto = $foto;
    }
    
    public function getDescricaoTipoUsuario(){
        $dbTableTipoUsuario = new Application_Model_DbTable_Tipousuario();
        $tipousuario = $dbTableTipoUsuario->getTipoUsuarioPorId($this->getCod_tipoUsuario());
        return $tipousuario->getDescricao();
    }

    public function getNomeAluno(){
        $dbTableAluno = new Application_Model_DbTable_Aluno();
        $aluno = $dbTableAluno->getAlunoPorId($this->getCod_aluno());
        return $aluno->getNome();
    }

}