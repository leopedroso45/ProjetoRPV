<?php

class Application_Model_DbTable_Cobrador extends Zend_Db_Table_Abstract{


    protected $_name = 'cobrador';
    protected $_rowClass = "Application_Model_Cobrador";
    
    public function cadastrarCobrador($dados){
    
   

    
        $cobrador = $this->createRow();
        /*@var $usuario Application_Model_Cobrador*/
        $cobrador->setNome($dados['nome']);
        $cobrador->setCpf($dados['cpf']);

        $cobrador->setAtivo("ATIVO");
        $cobrador->setRg($dados['rg']);
        $cobrador->setCarteiraTrabalho($dados['carteiraTrabalho']);
        $cobrador->setPis($dados['pis']);
        $cobrador->setDataAdmissao($dados['dataAdmissao']);
        $cobrador->setCnh($dados['cnh']);
        $cobrador->setTelefone($dados['telefone']);
        $cobrador->setEmail($dados['email']);
//       
        
        return $cobrador->save();
    
    }
        
    public function listarTodosCobradores(){

    return $this->fetchAll();

    }

     public function getCobradorPorId($id)
    {
        $select = $this->select()->where('id_cobrador = ?', $id);
        
        return $this->fetchRow($select);
    }


    /*public function editarCobrador($id, $dados)
    {

            define('ID', array(
            $id
        ));


        $cobrador = $this->find(ID)->current();
       
        $cobrador->setNome($dados['nome']);
        $cobrador->setCpf($dados['cpf']);

        //$cobrador->setAtivo($dados['ativo']);
        $cobrador->setRg($dados['rg']);
        $cobrador->setCarteiraTrabalho($dados['carteiraTrabalho']);
        $cobrador->setPis($dados['pis']);
        $cobrador->setDataAdmissao($dados['dataAdmissao']);
        $cobrador->setCnh($dados['cnh']);


        return $cobrador->save();
    } */

        public function editarAtivo($id, $dados)
    {
        $this->find($id)->current();
        $cobrador = $this->getCobradorPorId($id);
        /* @var $viabilidade Application_Model_Viabilidade */

        if ($dados['ativo'] === 'ATIVO') {
            $cobrador->setAtivo('ATIVO');
        } elseif ($dados['ativo'] === 'INATIVO') {
            $cobrador->setAtivo('INATIVO');
        }

        return $cobrador->save();
    }
    public function editarCobradorajax($id, $dados)
    {
        $this->find($id)->current();
        $cobrador = $this->getCobradorPorId($id);
        

        $cobrador->setNome($dados['nome']);
        $cobrador->setCpf($dados['cpf']);
        $cobrador->setRg($dados['rg']);
        $cobrador->setCarteiraTrabalho($dados['carteiraTrabalho']);
        $cobrador->setPis($dados['pis']);
        $cobrador->setDataAdmissao($dados['dataAdmissao']);
        $cobrador->setCnh($dados['cnh']);
        $cobrador->setTelefone($dados['telefone']);
        $cobrador->setEmail($dados['email']);

        return $cobrador->save();
    }



   
}