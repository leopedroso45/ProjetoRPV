<?php

class Application_Model_DbTable_Concessao_Trajeto extends Zend_Db_Table_Abstract
{

    protected $_name = 'concessao_trajeto';
    protected $_rowClass = "Application_Model_ConcessaoTrajeto";
    
    public function cadastrarConcessao($dados)
    {
        $Concessao_Trajeto = $this->createRow();
        /*@var Concessao_Trajeto Application_Model_Concessao_Trajeto*/
        $Concessao_Trajeto->setcodConcessao($dados['codConcessao']);
        $Concessao_Trajeto->setdataInicio($dados['dataInicio']);
        $Concessao_Trajeto->setdataFim($dados['dataFim']);
        $Concessao_Trajeto->setdocAutorizacao($dados['docAutorizacao']);
        $Concessao_Trajeto->setstatusConcessao($dados['statusConcessao']);		
        
        return $Concessao_Trajeto->save();
    }
    
    public function editarUsuario($id,$dados)
    {
        $usuario = $this->getUsuarioPorId($id);
        /*@var $usuario Application_Model_Usuario*/
        $usuario->setLogin($dados['login']);
        $usuario->setSenha($dados['senha']);
        
        return $usuario->save();
    }
    
     public function listarTodasConcessoes(){
       return $this->fetchAll();
    }
    

}