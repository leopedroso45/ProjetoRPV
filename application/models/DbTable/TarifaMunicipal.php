<?php

class Application_Model_DbTable_TarifaMunicipal extends Zend_Db_Table_Abstract
{

    protected $_name = 'tarifa_municipal';
    protected $_rowClass = "Application_Model_TarifaMunicipal";


    
    
    public function cadastrarTarifaMunicipal($dados) // verificar parametros que serão recebidos neste método
    {
        $tarifaIntermunicipal = $this->createRow();

        $tarifaIntermunicipal->setIdTrajeto($dados['id_trajeto']);
        $tarifaIntermunicipal->setValor($dados['valor']);
        $tarifaIntermunicipal->setDataInicio($dados['iniciox']);
        $tarifaIntermunicipal->setDataFim($dados['fimx']);
        //$tarifaIntermunicipal->setStatus($dados['status']); 






      // implementar
        
        return $tarifaIntermunicipal->save();
    }


    public function listarTodastarifasm(){

        $adapter = new Zend_Db_Adapter_Pdo_Mysql(array(
            'driver' => 'pdo_mysql',
            'dbname' => 'controledefrota',
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8'

            


        ));

        $stmt = $adapter->query(
           "SELECT tar.valor, tar.data_inicio, tar.data_fim, traj.descricao 

                FROM tarifa_municipal as tar, trajeto as traj 
    
                    where tar.id_trajeto = traj.id_trajeto"      



        );

        $rows = $stmt->fetchAll();

        return $rows;


        
    }

   // SELECT tar.valor, tar. data_inicio, tar.data_fim, traj.descricao FROM tarifa_municipal as tar, trajeto as traj 



   





    // public function getlinhaPorId($id) // implementar
    // {
    //     $select = $this->select()->where('id_linha = ?', $id);

    //     return $this->fetchRow($select);
    // }

    //     public function editarAtivo($id, $dados)
    // {
    //     $this->find($id)->current();
    //     $linha = $this->getlinhaPorId($id);
    //     /* @var $viabilidade Application_Model_Viabilidade */

    //     if ($dados['ativo'] === 'ATIVO') {
    //         $linha->setSituacao('ATIVO');
    //     } elseif ($dados['ativo'] === 'INATIVO') {
    //         $linha->setSituacao('INATIVO');
    //     }

    //     return $linha->save();
    // }


   
}