<?php

class Application_Model_FormaPagamento extends Zend_Db_Table_Row_Abstract
{
    
    function getId_pagamento() {
        return $this->id_pagamento;
    }

    function getDescricao() {
        return $this->descricao;
    }
    
    function getStatus() {
        return $this->status;
    }


    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }
    
    function setStatus($status) {
        $this->status = $status;
    }
    

}