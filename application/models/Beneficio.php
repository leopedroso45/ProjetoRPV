<?php

class Application_Model_Beneficio extends Zend_Db_Table_Row_Abstract
{
    
//        private $id_solicitacao;
//        private $data_solicitacao;
//        private $idf_situacao_solicitacao;
//        private $idf_pessoa;			
//        private $id_pessoa;
//        private $id_usuario;
//        private $nome;
//        private $cpf;
//        private $rg;
//        private $rua;
//        private $numero_casa;
//        private $data_nascimento;
//        private $celular;
//        private $bairro;
		  
        function getId_pessoa()
        {
            return $this->id_pessoa;
        }		
        function getId_usuario()
        {
            return $this->id_usuario;
        }
		function getNome()
        {
            return $this->nome;
        }
		function getCpf()
        {
            return $this->cpf;
        }
		function getRg()
        {
            return $this->rg;
        }
		function getRua()
        {
            return $this->rua;
        }
		function getNumero_casa()
        {
            return $this->numero_casa;
        }
		function getData_nascimento()
        {
            return $this->data_nascimento;
        }		
		function getCelular()
        {
            return $this->celular;
        }
		function getBairro()
        {
            return $this->bairro;
        }	



		
        function getId_solicitacao()
        {
            return $this->id_solicitacao;
        }
        

        function getData_solicitacao()
        {
            return $this->data_solicitacao;
        }

        
        function getIdf_situacao_solicitacao()
        {
            return $this->idf_situacao_solicitacao;
        }


        function getIdf_pessoa()
        {
            return $this->idf_pessoa;
        }
        



    

    


   

}