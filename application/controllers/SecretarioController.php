<?php

class SecretarioController extends Zend_Controller_Action
{

    public function init()
    {
        $this->_helper->layout->setLayout('layout_secretario');
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
//        $modelUsuario = new Application_Model_DbTable_Usuario();
//        $date = new Zend_Date();
//        $data = $date->get('dd/MM/yyyy HH:mm:ss');
//        $modelUsuario->ultimoAcesso($id_usuario,$data);
        $this->_redirect('/index');
    }

}
