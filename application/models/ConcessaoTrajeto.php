<?php

class Application_Model_ConcessaoTrajeto extends Zend_Db_Table_Row_Abstract
{
//    private $codConcessao;
//    private $dataInicio;
//    private $dataFim;
//    private $docAutorizacao;
//    private $statusConcessao;
    
    public function getcodConcessao() {
        return $this->codConcessao;
    }
    
    public function getdataInicio() {
        return $this->dataInicio;
    }

    public function getdataFim() {
        return $this->dataFim;
    }

    public function getdocAutorizacao() {
        return $this->docAutorizacao;
    }

    public function getstatusConcessao() {
        return $this->statusConcessao;
    }

    public function setcodConcessao($codConcessao) {
        $this->codConcessao = $codConcessao;
    }
    
    public function setdataInicio($dataInicio) {
        $this->dataInicio = $dataInicio;
    }
    
    public function setdataFim($dataFim) {
        $this->dataFim = $dataFim;
    }
    
    public function setdocAutorizacao($docAutorizacao) {
        $this->docAutorizacao = $docAutorizacao;
    }
    
    public function setstatusConcessao($statusConcessao) {
        $this->statusConcessao = $statusConcessao;
    }
    
}