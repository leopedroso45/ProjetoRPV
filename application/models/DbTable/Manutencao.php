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
//        var_dump($id);die();
        $adapter = new Zend_Db_Adapter_Pdo_Mysql(array(
            'driver' => 'pdo_mysql',
            'dbname' => 'controledefrota',
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8'
        ));

        $stmt = $adapter->query(
                "SELECT onibus_viagem.placa, onibus_urbano.PLACA

                FROM manutencao, onibus_viagem, manutencao_viagem, onibus_urbano, manutencao_urbano WHERE

                onibus_viagem.id_onibus_viagem = manutencao_viagem.id_onibus_viagem AND
                manutencao_viagem.id_manutencao = manutencao.id_manutencao AND

                onibus_urbano.id_onibus_urbano = manutencao_urbano.id_onibus_urbano AND
                manutencao_urbano.id_manutencao = manutencao.id_manutencao AND

                manutencao.id_manutencao = '" . $id . "' ");

        $rows = $stmt->fetchAll();

        return $rows;
    }

}
