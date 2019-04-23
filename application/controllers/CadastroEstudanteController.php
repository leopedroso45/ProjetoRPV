<?php

class CadastroEstudanteController extends Zend_Controller_Action {

    public function init() {
        $this->_helper->layout->setLayout("layout_admin_geral");
        $this->view->headScript()->appendFile($this->view->baseUrl('dist/js/script.js'));
        $this->view->headScript()->appendFile($this->view->baseUrl('dist/js/beneficio.js'));
    }

    public function indexAction() {
        
    }

    public function cadastrarUsuarioAction() {
        if ($this->getRequest()->isPost()) {
            $dados = $this->getRequest()->getParams();
            $dbtableUsuario = new Application_Model_DbTable_Usuario();
            $id_usuario = $dbtableUsuario->cadastrarUsuario($dados, $id);
        }
    }

    public function cadastrarPessoaAction($id) {
        if ($this->getRequest()->isPost()) {
            $dados = $this->getRequest()->getParams();
            $dbtablePessoa = new Application_Model_DbTable_Pessoa();
            $id_pessoa = $dbtablePessoa->cadastrarPessoa($dados, $id);
        }
    }

    public function cadastrarEstudanteAction() {
        if ($this->getRequest()->isPost()) {
            $dados = $this->getRequest()->getParams();
            $dbtableEstudante = new Application_Model_DbTable_Estudante();
            $id_estudante = $dbtableEstudante->cadastrarEstudante($dados, $id);
        }
    }

}
