<?php

class EncomendasController extends Zend_Controller_Action {

    public function init() {
        $this->_helper->layout->setLayout('layout_admin_local');
        $this->view->headScript()->appendFile($this->view->baseUrl('dist/js/script.js'));
        $this->view->headScript()->appendFile($this->view->baseUrl('dist/js/transporteEncomendas.js'));
    }

    public function indexAction() {
        $dbTableEncomendas = new Application_Model_DbTable_Encomendas();
        $listarEncomendas = $dbTableEncomendas->listarEncomendas();
        $this->view->listaDeEncomendas = $listarEncomendas;


        if ($this->getRequest()->isPost()) {
            $dados = $this->getRequest()->getParams();
            $dbTableEncomendas = new Application_Model_DbTable_Encomendas();
            $dbTableEncomendas->cadastrarEncomendas($dados);
        }
    }

    public function editarAction() {
        
        $id = $this->getRequest()->getParam('id');

        $dbTableEncomendas = new Application_Model_DbTable_Encomendas();
        $encomendas = $dbTableEncomendas->getEncomendaPorId($id);

        if ($this->getRequest()->isPost()) {
            $dados = $this->getRequest()->getParams();
            $dbTableEncomendas->editar($id, $dados);
        }

        $this->view->encomendas = $encomendas;
    }    
}
