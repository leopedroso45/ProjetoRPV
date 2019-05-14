<?php

class Application_Model_DbTable_FormaPagamento extends Zend_Db_Table_Abstract
{

    protected $_name = 'forma_pagamento';
    protected $_rowClass = "Application_Model_FormaPagamento";
    
    public function cadastrarFormaPagamento($dados)
    {
        //var_dump($dados); die();
        $formaPagamento = $this->createRow();
        $formaPagamento->setDescricao($dados['descricao']);
        $formaPagamento->setStatus("ATIVO");
        
        return $formaPagamento->save();
    }
    
    public function editarFormaPagamento($id,$dados)
    {
        //var_dump($id, $dados); die();
        $formaPagamento = $this->find($id)->current();
        $formaPagamento->setDescricao($dados['descricao']);
        
        return $formaPagamento->save();
    }

    public function listarFormaPagamento()
    {
        return $this->fetchAll();
    }
    
    public function getFormaPagamentoPorId($id)
    {
        $select = $this->select()->where('id_pagamento = ?', $id);
        //var_dump($select->__toString());die();

        return $this->fetchRow($select);
    }

      public function editarStatus($id, $dados)
    {
        $this->find($id)->current();
        $pagamento = $this->getFormaPagamentoPorId($id);
        /* @var $viabilidade Application_Model_Viabilidade */

        if ($dados['status'] === 'ATIVO') {
            $pagamento->setStatus('ATIVO');
        } elseif ($dados['status'] === 'INATIVO') {
            $pagamento->setStatus('INATIVO');
        }
        return $pagamento->save();
    }


    


}