<?php

class AdminRhController extends Zend_Controller_Action
{

    public function init()
    {
        $this->_helper->layout->setLayout('layout_gerente_rh');
    }

    public function indexAction()
    {
        
    }

    public function sairAction()
    {
        $sessionUsuario = new Application_Model_SessaoUser();
        $usuario = $sessionUsuario->getSession();

        $authAdapter = Zend_Auth::getInstance();
        $authAdapter->clearIdentity();

        $this->_redirect('/index');
    }

}
