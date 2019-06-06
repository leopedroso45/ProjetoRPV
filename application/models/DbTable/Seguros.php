<?php

class Application_Model_DbTable_Seguros extends Zend_Db_Table_Abstract
{

    protected $_name = 'seguros';
    protected $_rowClass = "Application_Model_Seguros";
    
    public function cadastrarSeguros($dados)
    {
        //var_dump($dados); die();
        $seguros = $this->createRow();
        /*@var $seguros Application_Model_seguros*/
        $seguros->setNumeroApolice($dados['numeroApolice']);
        $seguros->setSeguradora($dados['seguradora']);
        $seguros->setNomeSegurado($dados['nomeSegurado']);
        $seguros->setCpfSegurado($dados['cpfSegurado']);
        $seguros->setValorMensal($dados['valorMensal']);
        $seguros->setTaxaFranquia($dados['taxaFranquia']);
        $seguros->setPremioMorte($dados['premioMorte']);
        $seguros->setPremioInvalidez($dados['premioInvalidez']);
        $seguros->setDataInicial($dados['dataInicial']);
        $seguros->setDataFinal($dados['dataFinal']);
        
        return $seguros->save();
    }
    
    public function editarSeguros($id,$dados)
    {
        $seguros = $this->find($id)->current();
       /*@var $seguros Application_Model_Seguros*/
        $seguros->setNumeroApolice($dados['numeroApolice']);
        $seguros->setSeguradora($dados['seguradora']);
        $seguros->setNomeSegurado($dados['nomeSegurado']);
        $seguros->setCpfSegurado($dados['cpfSegurado']);
        $seguros->setValorMensal($dados['valorMensal']);
        $seguros->setTaxaFranquia($dados['taxaFranquia']);
        $seguros->setPremioMorte($dados['premioMorte']);
        $seguros->setPremioInvalidez($dados['premioInvalidez']);
        $seguros->setDataInicial($dados['dataInicial']);
        $seguros->setDataFinal($dados['dataFinal']);

        return $seguros->save();
    }

    public function listarSeguros()
    {
        return $this->fetchAll();
    }
    
    public function getSegurosPorId($id)
    {
        $select = $this->select()->where('id_seguro = ?', $id);
        //var_dump($select->__toString());die();

        return $this->fetchRow($select);
    }

    


}