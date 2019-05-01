<?php

class FuncionarioController extends Zend_Controller_Action
{

    public function init()
    {
        $this->_helper->layout->setLayout('layout_secretario');
        $this->view->headScript()->appendFile($this->view->baseUrl('dist/js/script.js'));
        $this->view->headScript()->appendFile($this->view->baseUrl('dist/js/cobrador.js'));
    }

    public function indexAction()
    {

        $dbTableCobrador = new Application_Model_DbTable_Cobrador();
        $lista = $dbTableCobrador->listarTodosCobradores();
        $this->view->listaDosCobradores = $lista;

        if ($this->getRequest()->isPost()) {
            $dados = $this->getRequest()->getParams();
            $dbTableCobrador->cadastrarCobrador($dados);
        }
    }

    public function editarAction()
    {
        $id = $this->getRequest()->getParam('id');
        $dbTableCobrador = new Application_Model_DbTable_Cobrador();
        $cobrador = $dbTableCobrador->getCobradorPorId($id);

        if ($this->getRequest()->isPost()) {
            $dados = $this->getRequest()->getParams();
            $dbTableCobrador->editarCobrador($id, $dados);
        }

        $this->view->cobrador = $cobrador;
    }

    public function editarAtivoAction()
    {
        $id = $this->getRequest()->getParam('id');
        $dbTableCobrador = new Application_Model_DbTable_Cobrador();
        $cobrador = $dbTableCobrador->getCobradorPorId($id);

        if ($this->getRequest()->isPost()) {
            $dados = $this->getRequest()->getParams();
            $dbTableCobrador->editarAtivo($id, $dados);
        }
        
        $this->view->cobrador = $cobrador;
    }

    public function editarCobradorajaxAction()
    {
        $id = $this->getRequest()->getParam('id');
        $dbTableCobrador = new Application_Model_DbTable_Cobrador();
        $cobrador = $dbTableCobrador->getCobradorPorId($id);

        if ($this->getRequest()->isPost()) {
            $dados = $this->getRequest()->getParams();
            $dbTableCobrador->editarCobradorajax($id, $dados);
        }
        
        $this->view->cobrador = $cobrador;
    }

}
