<?php

class Application_Model_DbTable_LinhaDia extends Zend_Db_Table_Abstract
{

    protected $_name = 'linha_dia';
    protected $_rowClass = "Application_Model_LinhaDia";
    
    public function cadastrarLinhaDia($dados)
    {
        $linhatrecho = $this->createRow();
        
        $linhatrecho->setIdLinha($dados);
        $linhatrecho->setIdDia($dados);
        $linhatrecho->setIdMotorista($dados);
        $linhatrecho->setIdOnibusViagem($dados);
        $linhatrecho->setHorarioInicio($dados);
       



        
        return $linhatrecho->save();
    }
    
    
    
    // public function listarLinhaTrechos($id_linha){

    //     $adapter = new Zend_Db_Adapter_Pdo_Mysql(array(
    //         'driver' => 'pdo_mysql',
    //         'dbname' => 'controledefrota',
    //         'username' => 'root',
    //         'password' => '',
    //         'charset' => 'utf8'

            


    //     ));

    //     $stmt = $adapter->query(
    //         "select t.descricao, lt.tempo, l.descricao as desc_linha from trecho as t, linha_trecho as lt, linha as l where t.id_trecho = lt.id_trecho AND l.id_linha = lt.id_linha and l.id_linha = 2"

    //     );

    //     $rows = $stmt->fetchAll();

    //     return $rows;


        
    // }



    public function listarTrechosPorId($id){

        $adapter = new Zend_Db_Adapter_Pdo_Mysql(array(
            'driver' => 'pdo_mysql',
            'dbname' => 'controledefrota',
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8'

            


        ));

        $stmt = $adapter->query(
           "SELECT t.descricao, lt.tempo, lt.km, l.descricao as descLinha from trecho as t, linha_trecho as lt, linha as l where t.id_trecho = lt.id_trecho AND l.id_linha = lt.id_linha and l.id_linha = ".$id.""



        );

        $rows = $stmt->fetchAll();

        return $rows;


        
    }


  // "select t.descricao, lt.tempo, l.descricao as desc_linha from trecho as t, linha_trecho as lt, linha as l where t.id_trecho = lt.id_trecho AND l.id_linha = lt.id_linha and l.id_linha = ".$id_linha.""
  
    public function listarTodasLinhasDia(){

        return $this->fetchAll();

    }

}