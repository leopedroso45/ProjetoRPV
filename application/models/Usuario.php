<?php

class Application_Model_Usuario extends Zend_Db_Table_Row_Abstract
{
//    private $id_perfil;
//    private $nome_usuario;
//    private $senha;

    function getId_perfil()
    {
        return $this->id_perfil;
    }

    function getNome_usuario()
    {
        return $this->nome_usuario;
    }

    function getSenha()
    {
        return $this->senha;
    }

    function setId_perfil($id_perfil)
    {
        $this->id_perfil = $id_perfil;
    }

    function setNome_usuario($nome_usuario)
    {
        $this->nome_usuario = $nome_usuario;
    }

    function setSenha($senha)
    {
        $this->senha = $senha;
    }

}