<?php

class Application_Model_DbTable_Compra extends Zend_Db_Table_Abstract
{

    protected $_name = 'compra';
    protected $_rowClass = "Application_Model_Compra";

    public function cadastrarCompra($dados)
    {
        $compra = $this->createRow();
        /* @var $compra Application_Model_Compra */
        $compra->setHorario_inicio("10:00");
        $compra->setId_linha("6");
        $compra->setId_dia("2");
        $compra->setId_forma_pagamento($dados['id_forma_pagamento']);
        $compra->setId_usuario($dados['id_usuario']);
        $compra->setValor($dados['valor']);
        $compra->setPassageiro($dados['passageiro']);
        
        if ($dados['seguro'] === 'SIM') {
            $compra->setSeguro('SIM');
        } elseif ($dados['seguro'] === 'NAO') {
            $compra->setSeguro('NAO');
        }

        if ($dados['desconto'] === 'SIM') {
            $compra->setSeguro('SIM');
        } elseif ($dados['desconto'] === 'NAO') {
            $compra->setSeguro('NAO');
        }

        return $compra->save();
    }

    public function listarTodasCompras()
    {
        return $this->fetchAll();
    }

    public function getCompraPorId($id)
    {
        $select = $this->select()->where('id_compra = ?', $id);

        return $this->fetchRow($select);
    }

    public function editarSeguro($id, $dados)
    {
        $this->find($id)->current();
        $compra = $this->getCobradorPorId($id);
        /* @var $compra Application_Model_Compra */

        if ($dados['seguro'] === 'SIM') {
            $compra->setSeguro('SIM');
        } elseif ($dados['seguro'] === 'NAO') {
            $compra->setSeguro('NAO');
        }

        return $compra->save();
    }

}
