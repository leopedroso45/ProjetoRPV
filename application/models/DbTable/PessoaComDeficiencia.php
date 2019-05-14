<?php

class Application_Model_DbTable_PessoaComDeficiencia extends Zend_Db_Table_Abstract {

    protected $_name = 'pessoa_com_deficiencia';
    protected $_rowClass = "Application_Model_PessoaComDeficiencia";

    public function cadastrarDeficiente($dados, $id_pessoa) {

        $deficiente = $this->createRow();
        /* @var $estudante Application_Model_PessoaComDeficiencia */
        $deficiente->setTipo_deficiencia($dados['tipo_deficiencia']);
        $deficiente->setAtestado_medico($dados['atestado_medico']);
        $deficiente->setIdf_pessoa($id_pessoa);

        return $deficiente->save();
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
