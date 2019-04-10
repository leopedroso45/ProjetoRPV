<?php

class ConcessaoTrajetoController extends Zend_Controller_Action
{

    public function init()
    {
        $this->_helper->layout->setLayout('layout_admin_local');
    }

    public function indexAction()
    {
        $dbTableConcessaoTrajeto = new Application_Model_DbTable_ConcessaoTrajeto();
        $lista = $dbTableConcessaoTrajeto->listarTodasConcessoes();
        $this->view->listaDasConcessoes = $lista;
        
        
        if ($this->getRequest()->isPost()) {
                $dados = $this->getRequest()->getParams();
                $dbTableConcessaoTrajeto = new Application_Model_DbTable_ConcessaoTrajeto();
                $dbTableConcessaoTrajeto->cadastrarConcessaoTrajeto($dados);
        }}


}