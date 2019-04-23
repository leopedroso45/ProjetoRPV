<?php

class Application_Model_DbTable_Estudante extends Zend_Db_Table_Abstract {

    protected $name = 'estudante';
    protected $_rowClass = "Application_Model_Estudante";

    public function cadastrarEstudante($dados) {

        $estudante = $this->createRow();
        /* @var $categoriaOnibus Application_Model_Estudante */
        $estudante->setId_estudante($dados['id_estudante']);
        $estudante->setComprovante_matricula($dados['comprovante_matricula']);
        $estudante->setIdf_pessoa($dados['idf_pessoa']);
        $estudante->setComprovante_residencia($dados['comprovante_residencia']);

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
