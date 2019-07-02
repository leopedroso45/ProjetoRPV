<?php

class AdminClienteController extends Zend_Controller_Action
{

    public function init()
    {
        $this->_helper->layout->setLayout('layout_admin_cliente');
                $this->view->headScript()->appendFile($this->view->baseUrl('dist/js/script.js'));
        $this->view->headScript()->appendFile($this->view->baseUrl('dist/js/datedropper.js'));
        $this->view->headScript()->appendFile($this->view->baseUrl('dist/js/compra.js'));
    }

    public function indexAction()
    {
        $dbTableLinha = new Application_Model_DbTable_Linha();
        $listaLinha = $dbTableLinha->listarTodasCidades();
        $this->view->listaDasOrigens = $listaLinha;
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
