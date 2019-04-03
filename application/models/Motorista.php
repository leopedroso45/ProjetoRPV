<?php

class Application_Model_Motorista extends Zend_Db_Table_Row_Abstract
{



    
    public function getId_motorista() {
        return $this->id_motorista;
    }
    
    public function getNome() {
        return $this->nome;
    }

    public function getCpf() {
        return $this->cpf;
    }

   

    
    public function setId_motorista($id_motorista) {
        $this->id_motorista = $id_motorista;
    }
    
    public function setNome($nome) {
        $this->nome = ($nome);
    }
    
    public function setCpf($cpf) {
        $this->cpf = $cpf;
    }
    

}