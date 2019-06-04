<?php

class Application_Model_DbTable_Sinistro extends Zend_Db_Table_Abstract {

    protected $_name = 'sinistro';
    protected $_rowClass = "Application_Model_Sinistro";

    public function cadastrarSinistro($dados) {
       
        $sinistro = $this->createRow();
        /* @var $sinistro Application_Model_Sinistro */
        $sinistro->setDescricao($dados['descricao']);
        $sinistro->setCausa($dados['causa']);
        $sinistro->setCulpado($dados['culpado']);
        $sinistro->setCusto($dados['custo']);
        $sinistro->setData($dados['data']);
        $sinistro->setHora($dados['hora']);
        $sinistro->setPagante($dados['pagante']);
        $sinistro->setOnibus($dados['onibus']);

        return $sinistro->save();
    }

    public function listarSinistros() {
        return $this->fetchAll();
    }

    public function getSinistroPorId($id) {
        $select = $this->select()->where('id_sinistro = ?', $id);

        return $this->fetchRow($select);
    }

    public function editar($id, $dados)
    {
        $sinistro = $this->find($id)->current();
        /* @var $onibusUrbano Application_Model_OnibusUrbano */
        $sinistro->setDescricao($dados['descricao']);
        $sinistro->setCausa($dados['causa']);
        $sinistro->setCulpado($dados['culpado']);
        $sinistro->setCusto($dados['custo']);
        $sinistro->setData($dados['data']);
        $sinistro->setHora($dados['hora']);
        $sinistro->setPagante($dados['pagante']);
        $sinistro->setOnibus($dados['onibus']);

        return $sinistro->save();
    }
}
