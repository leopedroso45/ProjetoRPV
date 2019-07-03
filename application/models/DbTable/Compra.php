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
        $compra->setId_linha($dados['id_linha']);
        $compra->setId_dia("2");
        //$compra->set_Promocao("id_promocao");
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

    public function listarPoltronasPorIdCompras($id)
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

        var_dump($select->__toString());
        die();

        return $this->fetchAll($select);
    }

    public function listarPoltronasPorIdCompra($id)
    {

        $adapter = new Zend_Db_Adapter_Pdo_Mysql(array(
            'driver' => 'pdo_mysql',
            'dbname' => 'controledefrota',
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8'
        ));
//var_dump($id);die();
        $stmt = $adapter->query(
                "SELECT C.*, CD.*
                    FROM COMPRA AS C, LINHA
                    INNER JOIN COMPRA_DEBITO AS CD 
                    WHERE C.ID_COMPRA = CD.ID_COMPRA AND
                    
                    C.ID_COMPRA = '" . $id . "' 

                    UNION

                    SELECT C.*, CC.*
                    FROM `COMPRA` AS C
                    INNER JOIN COMPRA_CREDITO AS CC 
                    WHERE C.ID_COMPRA = CC.ID_COMPRA AND
                    C.ID_COMPRA = '" . $id . "' 

                    UNION

                    SELECT C.*, CP.*
                    FROM COMPRA AS C
                    INNER JOIN COMPRA_PONTOS AS CP
                    WHERE C.ID_COMPRA = CP.ID_COMPRA AND
                    C.ID_COMPRA = '" . $id . "' 

                    UNION

                    SELECT C.*, CA.*
                    FROM COMPRA AS C 
                    INNER JOIN COMPRA_AVISTA AS CA 
                    WHERE C.ID_COMPRA = CA.ID_COMPRA AND
                    C.ID_COMPRA = '" . $id . "' 
                        ");


//        var_dump($stmt->__toString());die();

        $rows = $stmt->fetchAll();

        return $rows;
    }

    public function getComprasPorId($id)
    {
        $select = $this->select()->setIntegrityCheck(false);
        $select->from(array('C' => 'COMPRA'), array('C.*'))
                ->from(array('L' => 'LINHA'), array('L.descricao'))
                ->from(array('D' => 'DIA'), array('D.DESCRICAO'))
                ->where('L.ID_LINHA = C.ID_LINHA')
                ->where('D.ID_DIA = C.ID_DIA')
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
