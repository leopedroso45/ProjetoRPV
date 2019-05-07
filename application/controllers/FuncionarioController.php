<?php

class FuncionarioController extends Zend_Controller_Action
{

    public function init()
    {
        $this->_helper->layout->setLayout('layout_gerenterh');
        $this->view->headScript()->appendFile($this->view->baseUrl('dist/js/script.js'));
        $this->view->headScript()->appendFile($this->view->baseUrl('dist/js/funcionario.js'));
    }

    public function indexAction()
    {
        $seilar = "teste";
        $dbTableCidade = new Application_Model_DbTable_Cidade();
        $listaCidade = $dbTableCidade->listarCidades();

        //$dbTablePerfil = new Application_Model_Perfil();
        //$listaPerfil = $dbTablePerfil->listarPerfis();
        
        //$dbTableCobrador = new Application_Model_DbTable_Cobrador();
        //$lista = $dbTableCobrador->listarTodosCobradores();
        //$this->view->listaDosCobradores = $lista;
        $this->view->listaDeCidade = $seilar;
        //$listaCidade
        //$this->view->listaDePerfis = $listaPerfil;

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
