<?php

class Application_Model_DbTable_Idoso extends Zend_Db_Table_Abstract {

    protected $_name = 'idoso';
    protected $_rowClass = "Application_Model_Idoso";

    public function cadastrarIdoso($dados, $id_pessoa) {

        $idoso = $this->createRow();
        /* @var $estudante Application_Model_Idoso */
        $idoso->setCarteira_idoso($dados['carteira_idoso']);
        $idoso->setIdf_pessoa($id_pessoa);
        $idoso->setComprovante_residencia($dados['comprovante_residencia']);

        return $idoso->save();
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
