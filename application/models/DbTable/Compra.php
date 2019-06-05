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
        $compra->setPassagem($dados['beneficio']);
        $compra->setSeguro($dados['seguro']);
        $compra->setData($dados['data']);

        return $compra->save();
    }

    public function listarTodasCompras()
    {
        return $this->fetchAll();
    }

    public function listarCompras()
    {
        $select = $this->select()->setIntegrityCheck(false);
        $select->from(array('C' => 'COMPRA'), array('C.*'))
                ->from(array('U' => 'USUARIO'), array('U.*'))
                ->where('C.ID_USUARIO = U.ID_USUARIO');

//               var_dump($select->__toString());die();
        return $this->fetchAll($select);
    }

    public function listarPoltronasPorIdCompra($id)
    {
        $select = $this->select()->setIntegrityCheck(false);
        $select->from(array('C' => 'COMPRA'), array('C.*'))
                ->from(array('CD' => 'COMPRA_DEBITO'), array('CD.*'))
//                ->from(array('CC' => 'COMPRA_CREDITO'), array('CC.*'))
//                ->from(array('CA' => 'COMPRA_AVISTA'), array('CA.*'))
//                ->from(array('CP' => 'COMPRA_PONTOS'), array('CP.*'))
                ->where('C.ID_COMPRA = CD.ID_COMPRA')
//                ->where('C.ID_COMPRA = CC.ID_COMPRA')
//                ->where('C.ID_COMPRA = CA.ID_COMPRA')
//                ->where('C.ID_COMPRA = CP.ID_COMPRA')
                ->where('C.ID_COMPRA = "' . $id . '" ');

//               var_dump($select->__toString());die();

        return $this->fetchAll($select);
    }
    
            public function getComprasPorId($id) {
        $select = $this->select()->setIntegrityCheck(false);
                $select->from(array('C' => 'COMPRA'), array('C.*'))
                ->where('C.ID_COMPRA = "' . $id . '" ');

//               var_dump($select->__toString());die();
//        o var_dump serve pra ti ver o resultado da instrução sql na página

        return $this->fetchAll($select);
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
