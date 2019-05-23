    <?php

class Application_Model_Seguros extends Zend_Db_Table_Row_Abstract
{
    
    function getId_Seguro() {
        return $this->id_Seguro;
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



    function setNumeroApolice() {
        $this->numeroApolice;
    }
    
    function setSeguradora() {
        $this->seguradora;
    }

    function setNomeSegurado() {
        $this->nomeSegurado;
    }

    function setCpfSegurado() {
        $this->cpfSegurado;
    }

    function setValorMensal() {
        $this->valorMensal;
    }

    function setTaxaFranquia() {
        $this->taxaFranquia;
    }

    function setPremioMorte() {
        $this->premioMorte;
    }

    function setPremioInvalidez() {
        $this->premioInvalidez;
    }

    function setDataInicial() {
        $this->dataInicial;
    }

    function setDataFinal() {
        $this->dataFinal;
    }

}