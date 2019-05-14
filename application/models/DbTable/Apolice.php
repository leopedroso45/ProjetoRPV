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

    public function listarOnibusPorIdApolice($id)
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
                "SELECT onibus_urbano.id_onibus_urbano AS id,
                (CASE WHEN onibus_urbano.id_onibus_urbano THEN 'urbano' ELSE 'intermunicipal' END) AS tipo,  
                onibus_urbano.placa, onibus_urbano.ano, onibus_urbano.status
                FROM onibus_urbano, apolice, apolice_urbano WHERE
                onibus_urbano.id_onibus_urbano = apolice_urbano.id_onibus_urbano AND
                apolice_urbano.id_apolice = apolice.id_apolice AND
                onibus_urbano.status = 'ATIVO' AND
                apolice.id_apolice = '" . $id . "'
                
                GROUP BY id
                UNION

                SELECT onibus_viagem.id_onibus_viagem AS id,
                (CASE WHEN onibus_viagem.id_onibus_viagem THEN 'intermunicipal' ELSE 'urbano' END) AS tipo,  
                onibus_viagem.placa, onibus_viagem.ano, onibus_viagem.status
                FROM onibus_viagem, apolice, apolice_viagem WHERE
                onibus_viagem.id_onibus_viagem = apolice_viagem.id_onibus_viagem AND
                apolice_viagem.id_apolice = apolice.id_apolice AND
                onibus_viagem.status = 'ATIVO' AND
                apolice.id_apolice = '" . $id . "' ");
//        var_dump($stmt->__toString());die();

        $rows = $stmt->fetchAll();

        return $rows;
    }
    
        public function getApolicePorId($id) {
        $select = $this->select()->setIntegrityCheck(false);
                $select->from(array('AP' => 'APOLICE'), array('AP.*'))
                ->where('AP.ID_APOLICE = "' . $id . '" ');

//               var_dump($select->__toString());die();
//        o var_dump serve pra ti ver o resultado da instrução sql na página

        return $this->fetchAll($select);
    }

}
