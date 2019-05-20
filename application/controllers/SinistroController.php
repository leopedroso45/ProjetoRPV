<?php

class SinistroController extends Zend_Controller_Action {

    public function init() {
        $this->_helper->layout->setLayout('layout_admin_local');
        $this->view->headScript()->appendFile($this->view->baseUrl('dist/js/script.js'));
        $this->view->headScript()->appendFile($this->view->baseUrl('dist/js/sinistro.js'));
    }

    public function indexAction() {
        $dbTableSinistro = new Application_Model_DbTable_Sinistro();
        $listarSinistros = $dbTableSinistro->listarSinistros();
        $this->view->listaDeSinistros = $listarSinistros;
                if ($this->getRequest()->isPost()) {
            $dados = $this->getRequest()->getParams();
            $dbTableSinistro = new Application_Model_DbTable_Sinistro();
            $dbTableSinistro->cadastrarSinistro($dados);
        }
    }

//    public function editarAtivoAction() {
//
//        $id = $this->getRequest()->getParam('id');
//
//        $dbTableLinha = new Application_Model_DbTable_Linha();
//        $linha = $dbTableLinha->getlinhaPorId($id);
//
//
//        if ($this->getRequest()->isPost()) {
//            $dados = $this->getRequest()->getParams();
//            $dbTableLinha->editarAtivo($id, $dados);
//        }
//
//        $this->view->linha = $linha;
//    }
}
