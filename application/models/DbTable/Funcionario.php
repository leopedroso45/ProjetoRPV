<?php

class Application_Model_DbTable_Funcionario extends Zend_Db_Table_Abstract
{

    protected $_name = 'funcionario';
    protected $_rowClass = "Application_Model_Funcionario";


    
    
    public function cadastrarFuncionario($dados)
    {
        $funcionario = $this->createRow();
        
        $funcionario->setNome($dados['nome']); 
        $funcionario->setDataN($dados['dataN']); 
        $funcionario->setCpf($dados['cpf']); 
        $funcionario->setRg($dados['rg']); 
        $funcionario->setCtps($dados['ctps']);
        $funcionario->setPis($dados['pis']);
        $funcionario->setCnh($dados['cnh']); 
        $funcionario->setTelefone($dados['telefone']); 
        $funcionario->setSalario($dados['salario']); 
        $funcionario->setEmail($dados['email']); 
        $funcionario->setDataAdmissao($dados['dataAdmissao']);
        $funcionario->setCidade($dados['cidade']); 
        $funcionario->setEndereco($dados['endereco']); 
        $funcionario->setNumCasa($dados['numCasa']);
        $funcionario->setBairro($dados['bairro']); 


        return $funcionario->save();
    }

    public function listarTodosFuncionarios(){

    return $this->fetchAll();

    }

    public function getFuncionarioPorId($id)
    {
        $select = $this->select()->where('id_funcionario = ?', $id);
        
        return $this->fetchRow($select);
    }
   
}