<?php

class ConcessaoTrajetoController extends Zend_Controller_Action
{

    public function init()
    {
        $this->_helper->layout->setLayout("layout_adminlocal");
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