<?php

class Application_Model_ParadaOnibus extends Zend_Db_Table_Row_Abstract
{
    
    function getId_parada_onibus() {
        return $this->id_parada;
    }

    function getNumeroParada() {
        return $this->numeroParada;
    }
    
    function getLocal() {
        return $this->local;
    }

    function getComplemento() {
        return $this->complemento;
    }


    function setNumeroParada($numeroParada) {
        $this->numeroParada = $numeroParada;
    }
    
    function setLocal($local) {
        $this->local = $local;
    }

    function setComplemento($complemento) {
        $this->complemento = $complemento;
    }
    

}