<?php

class Application_Model_DbTable_CompraAVista extends Zend_Db_Table_Abstract
{

    protected $_name = 'compra_avista';
    protected $_rowClass = "Application_Model_CompraAVista";

    public function cadastrarCompraAVista($compra, $poltrona)
    {
        $compraAVista = $this->createRow();
        /* @var $compraAVista Application_Model_CompraAVista */
        $compraAVista->setId_compra($compra);
        $compraAVista->setId_poltrona($poltrona);

        return $compraAVista->save();
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
