<?php

class OnibusIntermunicipalController extends Zend_Controller_Action
{

    public function init()
    {
        $this->_helper->layout->setLayout('layout_secretario');
        $this->view->headScript()->appendFile($this->view->baseUrl('dist/js/onibus_intermunicipal.js'));
    }

    public function indexAction()
    {
        $dbTableOnibusIntermunicipal = new Application_Model_DbTable_OnibusIntermunicipal();
        $lista = $dbTableOnibusIntermunicipal->listarTodosOnibusIntermunicipais();
        $this->view->listarTodosOnibusIntermunicipais = $lista;

        if ($this->getRequest()->isPost()) {
            $dados = $this->getRequest()->getParams();
            $dbtableOnibusIntermunicipal = new Application_Model_DbTable_OnibusIntermunicipal();
            $dbtableOnibusIntermunicipal->cadastrarOnibusIntermunicipal($dados);
        }
    }

    public function editarAction()
    {
        $id = $this->getRequest()->getParam('id');
        $dbTableOnibusIntermunicipal = new Application_Model_DbTable_OnibusIntermunicipal();
        $onibusIntermunicipal = $dbTableOnibusIntermunicipal->getOnibusIntermunicipalPorId($id);

        if ($this->getRequest()->isPost()) {
            $dados = $this->getRequest()->getParams();
            $dbTableOnibusIntermunicipal->editarOnibusIntermunicipal($id, $dados);
        }

        $this->view->onibusIntermunicipal = $onibusIntermunicipal;
    }

        public function editarSituacaoAction()
    {
        $id = $this->getRequest()->getParam('id');

        $dbTableOnibus = new Application_Model_DbTable_OnibusIntermunicipal();
        $onibus = $dbTableOnibus->getOnibusIntermunicipalPorId($id);

        if ($this->getRequest()->isPost()) {
            $dados = $this->getRequest()->getParams();
            $dbTableOnibus->editarStatus($id, $dados);
        }
        $this->view->onibus = $onibus;
    }

}
