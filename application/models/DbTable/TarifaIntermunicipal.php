<?php

class Application_Model_DbTable_TarifaIntermunicipal extends Zend_Db_Table_Abstract
{

    protected $_name = 'tarifa_intermunicipal';
    protected $_rowClass = "Application_Model_TarifaIntermunicipal";


    
    
    public function cadastrarTarifaIntermunicipal($dados) // verificar parametros que serão recebidos neste método
    {
        $tarifaIntermunicipal = $this->createRow();

        $tarifaIntermunicipal->setIdCategoriaOnibus($dados['id_categoria']);
        $tarifaIntermunicipal->setValor($dados['valor']);
        $tarifaIntermunicipal->setDataInicio($dados['iniciox']);
        $tarifaIntermunicipal->setDataFim($dados['fimx']);
        //$tarifaIntermunicipal->setStatus($dados['status']); 






      // implementar
        
        return $tarifaIntermunicipal->save();
    }


    public function listarTodastarifas(){

       $adapter = new Zend_Db_Adapter_Pdo_Mysql(array(
        'driver' => 'pdo_mysql',
        'dbname' => 'controledefrota',
        'username' => 'root',
        'password' => '',
        'charset' => 'utf8'


    ));

       $stmt = $adapter->query(
         "SELECT co.descricao as categoria, co.id_categoria_onibus, ti.valor, ti.data_inicio, ti.data_fim

         FROM categoria_onibus as co, tarifa_intermunicipal as ti

         WHERE co.id_categoria_onibus = ti.id_categoria_onibus order by ti.data_inicio"      


     );

       $rows = $stmt->fetchAll();

       return $rows;
   }



   





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