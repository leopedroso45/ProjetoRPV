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
        $tarifaIntermunicipal->setDataInicio($dados['data_inicio']);
        $tarifaIntermunicipal->setDataFim($dados['data_fim']);
        //$tarifaIntermunicipal->setStatus($dados['status']); 
         



      

      // implementar
        
        return $tarifaIntermunicipal->save();
    }


    public function listarTodastarifas(){

    return $this->fetchAll();

    }

    

   





    public function getlinhaPorId($id) // implementar
    {
        $select = $this->select()->where('id_linha = ?', $id);
        
        return $this->fetchRow($select);
    }

        public function editarAtivo($id, $dados)
    {
        $this->find($id)->current();
        $linha = $this->getlinhaPorId($id);
        /* @var $viabilidade Application_Model_Viabilidade */

        if ($dados['ativo'] === 'ATIVO') {
            $linha->setSituacao('ATIVO');
        } elseif ($dados['ativo'] === 'INATIVO') {
            $linha->setSituacao('INATIVO');
        }

        return $linha->save();
    }

    
   
}