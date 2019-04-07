<?php

class Application_Model_DbTable_Motorista extends Zend_Db_Table_Abstract{


    protected $_name = 'motorista';
    protected $_rowClass = "Application_Model_Motorista";
    
    public function cadastrarMotorista($dados){
    
   

    
        $motorista = $this->createRow();
        /*@var $usuario Application_Model_motorista*/
        $motorista->setNome($dados['nome']);
        $motorista->setCpf($dados['cpf']);

        $motorista->setAtivo("ATIVO");
        $motorista->setRg($dados['rg']);
        $motorista->setCarteiraTrabalho($dados['carteiraTrabalho']);
        $motorista->setPis($dados['pis']);
        $motorista->setDataAdmissao($dados['dataAdmissao']);
        $motorista->setCnh($dados['cnh']);
        $motorista->setTelefone($dados['telefone']);
        $motorista->setEmail($dados['email']);
//       
        
        return $motorista->save();
    
    }
        
    public function listarTodosMotoristas(){

    return $this->fetchAll();

    }

     public function getMotoristaPorId($id)
    {
        $select = $this->select()->where('id_motorista = ?', $id);
        
        return $this->fetchRow($select);
    }


    /*public function editarmotorista($id, $dados)
    {

            define('ID', array(
            $id
        ));


        $motorista = $this->find(ID)->current();
       
        $motorista->setNome($dados['nome']);
        $motorista->setCpf($dados['cpf']);

        //$motorista->setAtivo($dados['ativo']);
        $motorista->setRg($dados['rg']);
        $motorista->setCarteiraTrabalho($dados['carteiraTrabalho']);
        $motorista->setPis($dados['pis']);
        $motorista->setDataAdmissao($dados['dataAdmissao']);
        $motorista->setCnh($dados['cnh']);


        return $motorista->save();
    } */

        public function editarAtivo($id, $dados)
    {
        $this->find($id)->current();
        $motorista = $this->getMotoristaPorId($id);
        

        if ($dados['ativo'] === 'ATIVO') {
            $motorista->setAtivo('ATIVO');
        } elseif ($dados['ativo'] === 'INATIVO') {
            $motorista->setAtivo('INATIVO');
        }

        return $motorista->save();
    }
    public function editarMotoristaajax($id, $dados)
    {
        $this->find($id)->current();
        $motorista = $this->getMotoristaPorId($id);
        

        $motorista->setNome($dados['nome']);
        $motorista->setCpf($dados['cpf']);
        $motorista->setRg($dados['rg']);
        $motorista->setCarteiraTrabalho($dados['carteiraTrabalho']);
        $motorista->setPis($dados['pis']);
        $motorista->setDataAdmissao($dados['dataAdmissao']);
        $motorista->setCnh($dados['cnh']);
        $motorista->setTelefone($dados['telefone']);
        $motorista->setEmail($dados['email']);

        return $motorista->save();
    }



   
}