<?php

class SinistroController extends Zend_Controller_Action {

    public function init() {
        $this->_helper->layout->setLayout('layout_admin_geral');
        $this->view->headScript()->appendFile($this->view->baseUrl('dist/js/script.js'));
        $this->view->headScript()->appendFile($this->view->baseUrl('dist/js/sinistro.js'));
    }

    public function indexAction() {
        $dbTableSinistro = new Application_Model_DbTable_Sinistro();
        $listarSinistros = $dbTableSinistro->listarSinistros();
        $this->view->listaDeSinistros = $listarSinistros;

        $dbTableOnibusIntermunicipal = new Application_Model_DbTable_OnibusIntermunicipal();
        $lista = $dbTableOnibusIntermunicipal->listarTodosOnibusIntermunicipais();
        $this->view->listarTodosOnibusIntermunicipais = $lista;

        $dbTableOnibusUrbano = new Application_Model_DbTable_OnibusUrbano();
        $lista1 = $dbTableOnibusUrbano->listarTodosOnibusUrbanos();
        $this->view->listaDosOnibusUrbanos = $lista1;



        if ($this->getRequest()->isPost()) {
            $dados = $this->getRequest()->getParams();
            $dbTableSinistro = new Application_Model_DbTable_Sinistro();
            $dbTableSinistro->cadastrarSinistro($dados);
        }
    }

    public function editarAction() {
        
        $id = $this->getRequest()->getParam('id');

        $dbTableSinistro = new Application_Model_DbTable_Sinistro();
        $sinistro = $dbTableSinistro->getSinistroPorId($id);

        if ($this->getRequest()->isPost()) {
            $dados = $this->getRequest()->getParams();
            $dbTableSinistro->editar($id, $dados);
        }

        $this->view->sinistro = $sinistro;
    }    
}
