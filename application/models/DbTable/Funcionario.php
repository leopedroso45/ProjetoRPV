<?php

class Application_Model_DbTable_Funcionario extends Zend_Db_Table_Abstract
{

    protected $_name = 'funcionario';
    protected $_rowClass = "Application_Model_Funcionario";


    
    
    public function cadastrarFuncionario($dados)
    {
        $funcionario = $this->createRow();
        
        $funcionario->setNome($dados['id_cobrador']); 
        $funcionario->setDataN($dados['id_cobrador']); 
        $funcionario->setCpf($dados['id_cobrador']); 
        $funcionario->setRg($dados['id_cobrador']); 
        $funcionario->setCtps($dados['id_cobrador']);
        $funcionario->setPis($dados['id_cobrador']);
        $funcionario->setCnh($dados['id_cobrador']); 
        $funcionario->setTelefone($dados['id_cobrador']); 
        $funcionario->setSalario($dados['id_cobrador']); 
        $funcionario->setEmail($dados['id_cobrador']); 
        $funcionario->setDataAdmissao($dados['id_cobrador']);
        $funcionario->setCidade($dados['id_cobrador']); 
        $funcionario->setEndereco($dados['id_cobrador']); 
        $funcionario->setNumCasa($dados['id_cobrador']);
        $funcionario->setBairro($dados['id_cobrador']); 









 




        
        return $trajeto->save();
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