<?php

class Application_Model_DbTable_Cidade extends Zend_Db_Table_Abstract {

    protected $_name = 'cidade';
    protected $_rowClass = 'Application_Model_Cidade';

    public function listarCidades() {
        return $this->fetchAll();
    }

    public function getCidadePorId($id_cidade) {
        $select = $this->select()->where('id_cidade = ?', $id_cidade);

        return $this->fetchRow($select);
    }

    public function editarCidade($id, $dados) {
        $alteracaoCidade = $this->find($id)->current();
        $alteracaoCidade->setNome($dados['nome']);
        return $alteracaoCidade->save();
    }

}
