<?php

class Application_Model_Cobrador extends Zend_Db_Table_Row_Abstract
{



    
    public function getId_cobrador() {
        return $this->id_cobrador;
    }
    
    public function getNome() {
        return $this->nome;
    }

    public function getCpf() {
        return $this->cpf;
    }

   

    
    public function setId_cobrador($id_cobrador) {
        $this->id_cobrador = $id_cobrador;
    }
    
    public function setNome($nome) {
        $this->nome = ($nome);
    }
    
    public function setCpf($cpf) {
        $this->cpf = ($cpf);
    }
    

}