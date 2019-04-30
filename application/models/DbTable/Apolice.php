<?php

class Application_Model_DbTable_Apolice extends Zend_Db_Table_Abstract
{

    protected $_name = 'apolice';
    protected $_rowClass = "Application_Model_Apolice";

    public function cadastrarApolice($dados)
    {
        $apolice = $this->createRow();
        /* @var $apolice Application_Model_Apolice */
        $apolice->setDescricao($dados['descricao']);
        $apolice->setData_inicio($dados['data_inicio']);
        $apolice->setData_fim($dados['data_fim']);
        $apolice->setValor($dados['valor']);

        return $apolice->save();
    }

    public function listarTodasApolices()
    {
        return $this->fetchAll();
    }

}
