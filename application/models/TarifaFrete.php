<?php

class Application_Model_TarifaFrete extends Zend_Db_Table_Row_Abstract
{
    
    function getId_Tarifa() {
        return $this->id_tarifa;
    }

    function getPeso() {
        return $this->peso;
    }
    
    function getTamanho() {
        return $this->tamanho;
    }

    function getObservacao() {
        return $this->observacao;
    }


    function setPeso($peso) {
        $this->peso = $peso;
    }
    
    function setTamanho($tamanho) {
        $this->tamanho = $tamanho;
    }

    function setObservacao($observacao) {
        $this->observacao = $observacao;
    }
    

}