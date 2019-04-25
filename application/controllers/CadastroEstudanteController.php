<?php

class CadastroEstudanteController extends Zend_Controller_Action {

    public function init() {
        $this->_helper->layout->setLayout("layout_admin_geral");
        $this->view->headScript()->appendFile($this->view->baseUrl('dist/js/script.js'));
        $this->view->headScript()->appendFile($this->view->baseUrl('dist/js/cadastroEstudante.js'));
    }

    public function indexAction() {

        $dbtableUsuario = new Application_Model_DbTable_Usuario();
        $dbtablePessoa = new Application_Model_DbTable_Pessoa();
        $dbtableEstudante = new Application_Model_DbTable_Estudante();

        if ($this->getRequest()->isPost()) {
            
            $dados = $this->getRequest()->getParams();
            
//            var_dump($dados);die();
            $id_usuario = $dbtableUsuario->cadastrarUsuario($dados);
            $id_pessoa = $dbtablePessoa->cadastrarPessoa($dados, $id_usuario);
            $dbtableEstudante->cadastrarEstudante($dados, $id_pessoa);
            
        }
    }

    public function cadastrarUsuarioAction() {
        
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
