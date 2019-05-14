<?php

class Application_Model_Cidade extends Zend_Db_Table_Row_Abstract
{

 //   private  $id_cidade;
 //   private  $nome;

    public function getId_cidade() {
        return $this->id_cidade;
    }
    
    public function getNome() {
        return $this->nome;
    }

    public function setId_cidade($id_cidade) {
        $this->id_cidade = (int)$id_cidade;
    }
    
    public function setNome($nome) {
        $this->nome = ($nome);
    }
}