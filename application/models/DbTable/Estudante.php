<?php

class Application_Model_DbTable_Estudante extends Zend_Db_Table_Abstract {

    protected $_rowClass = "Application_Model_Estudante";
    protected $_name1 = 'usuario';
    protected $_rowClass1 = "Application_Model_Usuario";
    protected $_name2 = 'pessoa';
    protected $_rowClass2 = "Application_Model_Pessoa";

    public function cadastrarEstudante($dados) {
        $usuario = $this->createRow();
        $usuario->setNome_usuario($dados['nome_usuario']);
        $usuario->setSenha($dados['senha']);
        //var_dump($dados); die();
        $pessoa = $this->createRow();
        $pessoa->setNome_usuario($dados['nome_usuario']);
        $pessoa->setSenha($dados['senha']);
        //var_dump($dados); die();
        $estudante = $this->createRow();
        /* @var $categoriaOnibus Application_Model_CategoriaOnibus */
        $estudante->setDescricao($dados['descricao']);
        $estudante->setTarifa($dados['tarifa']);

        return $estudante->save();
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
