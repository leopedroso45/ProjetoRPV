<?php

class ConcessaoTrajetoController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        $dbTableConcessaoTrajeto = new Application_Model_DbTable_ConcessaoTrajeto();
        $lista = $dbTableConcessaoTrajeto->listarTodasConcessoes();
        $this->view->listarTodasConcessoes = $lista;
        
        if ($this->getRequest()->isPost()) {
                $dados = $this->getRequest()->getParams();
                $dbTableConcessaoTrajeto = new Application_Model_DbTable_ConcessaoTrajeto();
                $dbTableConcessaoTrajeto->cadastrarConcessaoTrajeto($dados);
        }}


}