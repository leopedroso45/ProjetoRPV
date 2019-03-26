<?php

class OnibusUrbanoController extends Zend_Controller_Action
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
            $dbtableOnibusUrbano = new Application_Model_DbTable_OnibusUrbano();
            $dbtableOnibusUrbano->cadastrarOnibusUrbano($dados);
        }
    }

}
