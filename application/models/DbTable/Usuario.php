<?php

class Application_Model_DbTable_Usuario extends Zend_Db_Table_Abstract
{

    protected $_name = 'usuario';
    protected $_rowClass = "Application_Model_Usuario";

    public function cadastrarUsuario($dados)
    {

        $usuario = $this->createRow();
        /* @var $usuario Application_Model_Usuario */
        $usuario->setId_perfil(8);
        $usuario->setNome_usuario($dados['nome_usuario']);
        $usuario->setSenha($dados['senha']);

        return $usuario->save();
    }

    public function cadastrarUsuarioF($dados)
    {
        $usuario = $this->createRow();
        $usuario->setId_perfil($dados['id_perfil']);
        $usuario->setNome_usuario($dados['nome_usuario']);
        $usuario->setSenha($dados['senha']);

        return $usuario->save();
    }

    public function getUsuarioPorLogin($login)
    {
        $select = $this->select()->where('nome_usuario = ?', $login);
        
        return $this->fetchRow($select);
    }

}
