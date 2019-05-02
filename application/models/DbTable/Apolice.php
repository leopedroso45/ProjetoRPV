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

                FROM apolice, onibus_viagem, apolice_viagem, onibus_urbano, apolice_urbano WHERE

                onibus_viagem.id_onibus_viagem = apolice_viagem.id_onibus_viagem AND
                apolice_viagem.id_apolice = apolice.id_apolice AND

                onibus_urbano.id_onibus_urbano = apolice_urbano.id_onibus_urbano AND
                apolice_urbano.id_apolice = apolice.id_apolice AND

                apolice.id_apolice = '" . $id . "' ");

        $rows = $stmt->fetchAll();

        return $rows;
    }

}
