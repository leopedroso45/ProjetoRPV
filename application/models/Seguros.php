    <?php

class Application_Model_Seguros extends Zend_Db_Table_Row_Abstract
{
    
    function getId_Seguro() {
        return $this->id_seguro;
    }

    function getNumeroApolice() {
        return $this->numeroApolice;
    }
    
    function getSeguradora() {
        return $this->seguradora;
    }

    function getNomeSegurado() {
        return $this->nomeSegurado;
    }

    function getCpfSegurado() {
        return $this->cpfSegurado;
    }

    function getValorMensal() {
        return $this->valorMensal;
    }

    function getTaxaFranquia() {
        return $this->taxaFranquia;
    }

    function getPremioMorte() {
        return $this->premioMorte;
    }

    function getPremioInvalidez() {
        return $this->premioInvalidez;
    }

    function getDataInicial() {
        return $this->dataInicial;
    }

    function getDataFinal() {
        return $this->dataFinal;
    }



    function setNumeroApolice($numeroApolice) {
        $this->numeroApolice = $numeroApolice;
    }
    
    function setSeguradora($seguradora) {
        $this->seguradora = $seguradora;
    }

    function setNomeSegurado($nomeSegurado) {
        $this->nomeSegurado = $nomeSegurado;
    }

    function setCpfSegurado($cpfSegurado) {
        $this->cpfSegurado = $cpfSegurado;
    }

    function setValorMensal($valorMensal) {
        $this->valorMensal = $valorMensal;
    }

    function setTaxaFranquia($taxaFranquia) {
        $this->taxaFranquia = $taxaFranquia;
    }

    function setPremioMorte($premioMorte) {
        $this->premioMorte = $premioMorte;
    }

    function setPremioInvalidez($premioInvalidez) {
        $this->premioInvalidez = $premioInvalidez;
    }

    function setDataInicial($dataInicial) {
        $this->dataInicial = $dataInicial;
    }

    function setDataFinal($dataFinal) {
        $this->dataFinal = $dataFinal;
    }

}