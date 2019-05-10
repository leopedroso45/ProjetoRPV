<?php

class Application_Model_DbTable_Usuario extends Zend_Db_Table_Abstract
{

    protected $_name = 'usuario';
    protected $_rowClass = "Application_Model_Usuario";
    
    public function cadastrarUsuario($dados)
    {
        $usuario = $this->createRow();
        /*@var $usuario Application_Model_Usuario*/
        $usuario->setCod_aluno($dados['cod_aluno']);
        $usuario->setCod_tipoUsuario($dados['cod_tipo_usuario']);
//        $usuario->setFoto('');
        $usuario->setLogin($dados['login']);
        $usuario->setSenha($dados['senha']);
        
        return $usuario->save();
    }

    public function cadastrarUsuarioF($dados)
    {
        $usuario = $this->createRow();
        //var_dump($dados);die();
        $usuario->setId_perfil($dados['id_perfil']);
        $usuario->setNome_usuario($dados['usuario']);
        $usuario->setSenha($dados['senha']);
        
        return $usuario->save();
    } 
    
    public function editarUsuario($id,$dados)
    {
        $usuario = $this->getUsuarioPorId($id);
        /*@var $usuario Application_Model_Usuario*/
        $usuario->setLogin($dados['login']);
        $usuario->setSenha($dados['senha']);
        
        return $usuario->save();
    }
    
//        public function alterarCaminhoFoto($caminho, $id)
//    {
//        $select = $this->select()->where('cod_usuario = ?', $id);
//        $usuario = $this->fetchRow($select);
//        /* @var $usuario Application_Model_Usuario */
//        $usuario->setFoto($caminho);
//        
//        return $usuario->save();
//    }
    
     public function excluirUsuario($id) 
   {
        $select = $this->select()->where('cod_usuario = ?',$id);
        $usuario =  $this->fetchRow($select);
           return $usuario->delete();
        
   }
    
     public function listarTodosUsuario(){
       return $this->fetchAll();
    }
    
    public function getUsuarioPorId($id){
        $select = $this->select()->where('cod_usuario = ?',$id);
        return $this->fetchRow($select);
    }
    
    public function getUsuarioPorLogin($login){
        $select = $this->select()->where('login = ?',$login);
        return $this->fetchRow($select);
    }

}