<?php

class Application_Model_DbTable_Promocao extends Zend_Db_Table_Abstract {

    protected $_name = 'promocao';
    protected $_rowClass = "Application_Model_Promocao";

    public function cadastrarPromocao($dados) {
        $promocao = $this->createRow();
        $promocao->setNome_promocao($dados['nome_promocao']);
        $promocao->setDescricao_promocao($dados['descricao_promocao']);
        $promocao->setValor_promocao($dados['valor_promocao']);
        return $promocao->save();
    }

}
