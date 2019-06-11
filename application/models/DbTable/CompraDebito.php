<?php

class Application_Model_DbTable_CompraDebito extends Zend_Db_Table_Abstract
{

    protected $_name = 'compra_debito';
    protected $_rowClass = "Application_Model_CompraDebito";

    public function cadastrarCompraDebito($compra, $poltrona)
    {
        $compraDebito = $this->createRow();
        /* @var $compraDebito Application_Model_CompraDebito */
        $compraDebito->setId_compra($compra);
        $compraDebito->setPoltrona($poltrona);

        return $compraDebito->save();
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
