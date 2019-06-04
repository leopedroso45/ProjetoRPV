<?php

class Application_Model_DbTable_CompraCredito extends Zend_Db_Table_Abstract
{

    protected $_name = 'compra_credito';
    protected $_rowClass = "Application_Model_CompraCredito";

    public function cadastrarCompraCredito($compra, $poltrona)
    {
        $compraCredito = $this->createRow();
        /* @var $compraCredito Application_Model_CompraCredito */
        $compraCredito->setId_compra($compra);
        $compraCredito->setId_poltrona($poltrona);

        return $compraCredito->save();
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
