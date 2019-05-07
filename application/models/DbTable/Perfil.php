<?php

class Application_Model_DbTable_Perfil extends Zend_Db_Table_Abstract {

    protected $_name = 'perfil';
    protected $_rowClass = 'Application_Model_Perfil';

    public function listarPerfis() {
        return $this->fetchAll();
    }

    public function getPerfilPorId($id_perfil) {
        $select = $this->select()->where('id_perfil = ?', $id_perfil);

        return $this->fetchRow($select);
    }

    public function editarPerfil($id, $dados) {
        $alteracaoPerfil = $this->find($id)->current();
        $alteracaoPerfil->setNome($dados['descricao']);
        return $alteracaoPerfil->save();
    }

}