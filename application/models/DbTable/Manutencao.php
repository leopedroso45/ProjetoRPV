<?php

class Application_Model_DbTable_Manutencao extends Zend_Db_Table_Abstract
{

    protected $_name = 'manutencao';
    protected $_rowClass = "Application_Model_Manutencao";

    public function cadastrarManutencao($dados)
    {
        $manutencao = $this->createRow();
        /* @var $manutencao Application_Model_Manutencao */
        $manutencao->setDescricao($dados['descricao']);
        $manutencao->setData_inicio($dados['data_inicio']);
        $manutencao->setData_fim($dados['data_fim']);
        $manutencao->setValor($dados['valor']);
        $manutencao->setMotivo($dados['motivo']);
        $manutencao->setOficina($dados['oficina']);

        return $manutencao->save();
    }

    public function listarTodasManutencoes()
    {
        return $this->fetchAll();
    }

        public function listarOnibusPorIdManutencao($id)
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
                onibus_urbano.placa, onibus_urbano.ano
                FROM onibus_urbano, manutencao, manutencao_urbano WHERE
                onibus_urbano.id_onibus_urbano = manutencao_urbano.id_onibus_urbano AND
                manutencao_urbano.id_manutencao = manutencao.id_manutencao AND
                manutencao.id_manutencao = '" . $id . "'
                
                GROUP BY id
                UNION
                SELECT onibus_viagem.id_onibus_viagem AS id,
                (CASE WHEN onibus_viagem.id_onibus_viagem THEN 'intermunicipal' ELSE 'urbano' END) AS tipo,  
                onibus_viagem.placa, onibus_viagem.ano
                FROM onibus_viagem, manutencao, manutencao_viagem WHERE
                onibus_viagem.id_onibus_viagem = manutencao_viagem.id_onibus_viagem AND
                manutencao_viagem.id_manutencao = manutencao.id_manutencao AND
                
                manutencao.id_manutencao = '" . $id . "' ");
//        var_dump($stmt->__toString());die();
        $rows = $stmt->fetchAll();
        return $rows;
    }




    public function getManutencaoPorId($id) {
        $select = $this->select()->setIntegrityCheck(false);
        $select->from(array('MAN' => 'MANUTENCAO'), array('MAN.*'))
        ->where('MAN.ID_MANUTENCAO = "' . $id . '" ');
//               var_dump($select->__toString());die();
//        o var_dump serve pra ti ver o resultado da instrução sql na página
        return $this->fetchAll($select);
    }


}
