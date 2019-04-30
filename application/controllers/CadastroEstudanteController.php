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
        $dbtableBeneficio = new Application_Model_DbTable_Beneficio();

        if ($this->getRequest()->isPost()) {

            $dados = $this->getRequest()->getParams();

//            var_dump($dados);die();
            $id_usuario = $dbtableUsuario->cadastrarUsuario($dados);
            $id_pessoa = $dbtablePessoa->cadastrarPessoa($dados, $id_usuario);
            $dbtableEstudante->cadastrarEstudante($dados, $id_pessoa);
            $dbtableBeneficio->cadastrarSolicitacaoBeneficioAction($dados, $id_pessoa, '0');
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
            $dbtableEstudante->cadastrarEstudante($dados, $id);
        }
    }

    public function cadastrarSolicitacaoBeneficioAction($id) {
        if ($this->getRequest()->isPost()) {
            $dados = $this->getRequest()->getParams();
            $dbTableBeneficio = new Application_Model_DbTable_Beneficio();
            $dbTableBeneficio->cadastrarSolicitacaoBeneficio($dados, $id);
        }
    }

}
