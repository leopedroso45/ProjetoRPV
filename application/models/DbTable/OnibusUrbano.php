<?php

class Application_Model_DbTable_OnibusUrbano extends Zend_Db_Table_Abstract
{

    protected $_name = 'onibus_urbano';
    protected $_rowClass = "Application_Model_OnibusUrbano";

    public function cadastrarOnibusUrbano($dados)
    {
        $onibusUrbano = $this->createRow();
        /* @var $onibusUrbano Application_Model_OnibusUrbano */
        $onibusUrbano->setPlaca($dados['placa']);
        $onibusUrbano->setChassi($dados['chassi']);
        $onibusUrbano->setAno($dados['ano']);
        $onibusUrbano->setMarca($dados['marca']);
        $onibusUrbano->setModelo($dados['modelo']);
        $onibusUrbano->setRenavam($dados['renavam']);
        $onibusUrbano->setCor($dados['cor']);
        $onibusUrbano->setSituacao('ATIVO');
        $onibusUrbano->setKm($dados['km']);
        $onibusUrbano->setNumero_assentos($dados['numero_assentos']);
        $onibusUrbano->setNumero_passageiros($dados['numero_passageiros']);

        return $onibusUrbano->save();
    }

    public function editarOnibusUrbano($id, $dados)
    {
        $onibusUrbano = $this->find($id)->current();
        /* @var $onibusUrbano Application_Model_OnibusUrbano */
        $onibusUrbano->setPlaca($dados['placa']);
        $onibusUrbano->setChassi($dados['chassi']);
        $onibusUrbano->setAno($dados['ano']);
        $onibusUrbano->setMarca($dados['marca']);
        $onibusUrbano->setModelo($dados['modelo']);
        $onibusUrbano->setRenavam($dados['renavam']);
        $onibusUrbano->setCor($dados['cor']);
        $onibusUrbano->setKm($dados['km']);
        $onibusUrbano->setNumero_assentos($dados['numero_assentos']);
        $onibusUrbano->setNumero_passageiros($dados['numero_passageiros']);

        return $onibusUrbano->save();
    }

    public function editarStatus($id, $dados)
    {
        $this->find($id)->current();
        $onibus = $this->getOnibusUrbanoPorId($id);
        /* @var $onibus Application_Model_OnibusUrbano */

        if ($dados['situacao'] === 'ATIVO') {
            $onibus->setSituacao('ATIVO');
        } elseif ($dados['situacao'] === 'INATIVO') {
            $onibus->setSituacao('INATIVO');
        }

        return $onibus->save();
    }

    public function listarTodosOnibusUrbanos()
    {
        return $this->fetchAll();
    }

    public function listarTodosOnibus()
    {
        $adapter = new Zend_Db_Adapter_Pdo_Mysql(array(
            'driver' => 'pdo_mysql',
            'dbname' => 'controledefrota',
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8'
        ));

        $stmt = $adapter->query(
                "SELECT onibus_urbano.id_onibus_urbano AS id,
                (CASE WHEN onibus_urbano.id_onibus_urbano THEN 'urbano' ELSE 'intermunicipal' END) AS tipo,  
                onibus_urbano.placa, onibus_urbano.ano
                FROM onibus_urbano
                GROUP BY id
                UNION

                SELECT onibus_viagem.id_onibus_viagem AS id,
                (CASE WHEN onibus_viagem.id_onibus_viagem THEN 'intermunicipal' ELSE 'urbano' END) AS tipo,  
                onibus_viagem.placa, onibus_viagem.ano

                FROM onibus_viagem");

        $rows = $stmt->fetchAll();

        return $rows;
    }

    public function getOnibusUrbanoPorId($id)
    {
        $select = $this->select()->where('id_onibus_urbano = ?', $id);

        return $this->fetchRow($select);
    }

}
