<?php

class OnibusIntermunicipalController extends Zend_Controller_Action
{

    public function init()
    {
        $this->_helper->layout->setLayout('layout_secretario');
    }

    public function indexAction()
    {
        
    }

    public function cadastrarAction()
    {
        if ($this->getRequest()->isPost()) {
            $dados = $this->getRequest()->getParams();
            $dbtableOnibusIntermunicipal = new Application_Model_DbTable_OnibusIntermunicipal();
            $dbtableOnibusIntermunicipal->cadastrarOnibusIntermunicipal($dados);
        }
    }

}
