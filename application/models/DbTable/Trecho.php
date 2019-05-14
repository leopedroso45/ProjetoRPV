<?php

class Application_Model_DbTable_Trecho extends Zend_Db_Table_Abstract
{

    protected $_name = 'trecho';
    protected $_rowClass = "Application_Model_Trecho";


    
    
    public function cadastrarTrecho($dados)
    {
        $trecho = $this->createRow();
      

      // implementar
        
        return $trecho->save();
    }


    

    public function listarTodosTrechos()
    {
        // implementar
                
                
        
        return $this->fetchAll();

       
    }

   





    public function getTrechoPorId($id)
    {
        $select = $this->select()->where('id_trecho = ?', $id);
        
        return $this->fetchRow($select);
    }

        public function editarAtivo($id, $dados)
    {
        $this->find($id)->current();
        $trecho = $this->getTrechoPorId($id);
        /* @var $viabilidade Application_Model_Viabilidade */

        if ($dados['ativo'] === 'ATIVO') {
            $trecho->setSituacao('ATIVO');
        } elseif ($dados['ativo'] === 'INATIVO') {
            $trecho->setSituacao('INATIVO');
        }

        return $trecho->save();
    }
   
}