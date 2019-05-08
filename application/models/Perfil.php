<?php

class Application_Model_Perfil extends Zend_Db_Table_Row_Abstract
{
    
//    private $id_perfil;
//    private $descricao;

    
    public function getid_perfil() {
        return $this->id_perfil;
    }
    
    public function getdescricao() {
        return $this->descricao;
    }

    public function setid_perfil($id_perfil) {
        $this->id_perfil = $id_perfil;
    }
    
    public function setdescricao($descricao) {
        $this->descricao = $descricao;
    }
}