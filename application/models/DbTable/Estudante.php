<?php

class Application_Model_DbTable_Estudante extends Zend_Db_Table_Abstract {

    protected $_name = 'estudante';
    protected $_rowClass = "Application_Model_Estudante";

    public function cadastrarEstudante($dados, $id_pessoa) {

        $estudante = $this->createRow();
        /* @var $estudante Application_Model_Estudante */
        $estudante->setComprovante_matricula($dados['comprovanteMatricula']);
        $estudante->setIdf_pessoa($id_pessoa);
        $estudante->setComprovante_residencia($dados['comprovanteResidencia']);

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
