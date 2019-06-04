<?php

class Application_Model_DbTable_CompraPontos extends Zend_Db_Table_Abstract
{

    protected $_name = 'compra_pontos';
    protected $_rowClass = "Application_Model_CompraPontos";

    public function cadastrarCompraPontos($compra, $poltrona)
    {
        $compraPontos = $this->createRow();
        /* @var $compraPontos Application_Model_CompraPontos */
        $compraPontos->setId_compra($compra);
        $compraPontos->setId_poltrona($poltrona);
        $compraPontos->setId_pontos($id_pontos);

        return $compraPontos->save();
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
