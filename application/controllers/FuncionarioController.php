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
        $dbTableCidade = new Application_Model_DbTable_Cidade();
        $listaCidade = $dbTableCidade->listarCidades();

        $dbTablePerfil = new Application_Model_DbTable_Perfil();
        $listaPerfil = $dbTablePerfil->listarPerfis();

        $dbTableUsuario = new Application_Model_DbTable_Usuario();
        $dbTableFuncionario = new Application_Model_DbTable_Funcionario();


        $this->view->listaDeCidade = $listaCidade;
        $this->view->listaDePerfis = $listaPerfil;

        if ($this->getRequest()->isPost()) {
            $dados = $this->getRequest()->getParams();
            var_dump($dados);die();
            
            $id_usuario = $dbTableUsuario->cadastrarUsuarioF($dados);

            $dbTableFuncionario->cadastrarFuncionario($id_usuario, $dados);
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
