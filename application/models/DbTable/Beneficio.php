<?php

class Application_Model_DbTable_Beneficio extends Zend_Db_Table_Abstract
{

    protected $_name = 'solicitacaobeneficio';
    protected $_name1 = 'pessoa';
    protected $_rowClass = "Application_Model_Beneficio";
    
    
    public function listarBeneficios(){
       return $this->fetchAll();
    }
    public function listarDadosPessoa(){
       return $this->fetchAll();
    }

    /* 
    public function editarUsuario($id,$dados)
    {
        $usuario = $this->getUsuarioPorId($id);
        @var $usuario Application_Model_Usuario
        $usuario->setLogin($dados['login']);
        $usuario->setSenha($dados['senha']);
        
        return $usuario->save();
    }
    public function getUsuarioPorId($id){
        $select = $this->select()->where('cod_usuario = ?',$id);
        return $this->fetchRow($select);
    }
    
    public function getUsuarioPorLogin($login){
        $select = $this->select()->where('login = ?',$login);
        return $this->fetchRow($select);
    }
    */
}