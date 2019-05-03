<?php

class Application_Model_DbTable_Apolice extends Zend_Db_Table_Abstract
{

    protected $_name = 'apolice';
    protected $_rowClass = "Application_Model_Apolice";

    public function cadastrarApolice($dados)
    {
        $apolice = $this->createRow();
        /* @var $apolice Application_Model_Apolice */
        $apolice->setDescricao($dados['descricao']);
        $apolice->setData_inicio($dados['data_inicio']);
        $apolice->setData_fim($dados['data_fim']);
        $apolice->setValor($dados['valor']);

        return $apolice->save();
    }

    public function listarTodasApolices()
    {
        return $this->fetchAll();
    }

//    public function listarOnibusPorIdApolice($id)
//    {
//        
//        $adapter = new Zend_Db_Adapter_Pdo_Mysql(array(
//            'driver' => 'pdo_mysql',
//            'dbname' => 'controledefrota',
//            'username' => 'root',
//            'password' => '',
//            'charset' => 'utf8'
//        ));
//var_dump($id);die();
//        $stmt = $adapter->query(
//                "SELECT onibus_viagem.placa, onibus_urbano.PLACA
//
//                FROM apolice, onibus_viagem, apolice_viagem, onibus_urbano, apolice_urbano WHERE
//
//                onibus_viagem.id_onibus_viagem = apolice_viagem.id_onibus_viagem AND
//                apolice_viagem.id_apolice = apolice.id_apolice AND
//
//                onibus_urbano.id_onibus_urbano = apolice_urbano.id_onibus_urbano AND
//                apolice_urbano.id_apolice = apolice.id_apolice AND
//
//                apolice.id_apolice = '" . $id . "' ");
//        var_dump($stmt->__toString());die();
//
//        $rows = $stmt->fetchAll();
//
//        return $rows;
//    }
    
        public function listarOnibusPorIdApolice($id) {
        $select = $this->select()->setIntegrityCheck(false);
        $select->from(array('AP' => 'APOLICE'), array('AP.ID_APOLICE'))
                ->from(array('BUS_VG' => 'ONIBUS_VIAGEM'), array('BUS_VG.placa'))
                ->from(array('BUS_UB' => 'ONIBUS_URBANO'), array('BUS_UB.PLACA'))
                ->from(array('AP_VG' => 'APOLICE_VIAGEM'), array('AP_VG.ID_APOLICE_VIAGEM'))
                ->from(array('AP_UB' => 'APOLICE_URBANO'), array('AP_UB.ID_APOLICE_URBANO'))
                ->where('BUS_UB.ID_ONIBUS_URBANO = AP_UB.ID_ONIBUS_URBANO')
                ->where('BUS_VG.ID_ONIBUS_VIAGEM = AP_VG.ID_ONIBUS_VIAGEM')
                ->where('AP_UB.ID_APOLICE = AP.ID_APOLICE')
                ->where('AP_VG.ID_APOLICE = AP.ID_APOLICE')
                ->where('AP.ID_APOLICE = "' . $id . '" ');

//               var_dump($select->__toString());die();
//        o var_dump serve pra ti ver o resultado da instrução sql na página

        return $this->fetchAll($select);
    }

}
