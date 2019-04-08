<?php

class Application_Model_CategoriaOnibus extends Zend_Db_Table_Row_Abstract
{
    
    function getId_categoria_onibus() {
        return $this->id_categoria_onibus;
    }

    function getDescricao() {
        return $this->descricao;
    }
    
    function getTarifa() {
        return $this->tarifa;
    }


    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }
    
    function setTarifa($tarifa) {
        $this->tarifa = $tarifa;
    }
    

}