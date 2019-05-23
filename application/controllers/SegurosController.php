<?php

class SegurosController extends Zend_Controller_Action
{

    public function init()
    {
        $this->_helper->layout->setLayout('layout_secretario');
        $this->view->headScript()->appendFile($this->view->baseUrl('dist/js/script.js'));
        $this->view->headScript()->appendFile($this->view->baseUrl('dist/js/Seguros.js'));
    }

    public function indexAction()
    {
        $dbtableSeguros = new Application_Model_DbTable_Seguros();
        $lista = $dbtableSeguros->listarSeguros();
        $this->view->listarSeguros = $lista;

        if ($this->getRequest()->isPost()) {
            $dados = $this->getRequest()->getParams();
            $dbtableSeguros->cadastrarSeguros($dados);
        }
    }

    public function editarAction()
    {
        $id = $this->getRequest()->getParam('id');
        $dbtableSeguros = new Application_Model_DbTable_Seguros();
        $Seguros = $dbtableSeguros->getSegurosPorId($id);

        if ($this->getRequest()->isPost()) {
            $dados = $this->getRequest()->getParams();
            $dbtableSeguros->editarSeguros($id, $dados);
        }

        $this->view->Seguros = $Seguros;
    }

}
