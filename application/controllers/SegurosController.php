<?php

class ParadaOnibusController extends Zend_Controller_Action
{

    public function init()
    {
        $this->_helper->layout->setLayout('layout_secretario');
        $this->view->headScript()->appendFile($this->view->baseUrl('dist/js/script.js'));
        $this->view->headScript()->appendFile($this->view->baseUrl('dist/js/parada.js'));
    }

    public function indexAction()
    {
        $dbtableParada = new Application_Model_DbTable_ParadaOnibus();
        $lista = $dbtableParada->listarParadaOnibus();
        $this->view->listarParadaOnibus = $lista;

        if ($this->getRequest()->isPost()) {
            $dados = $this->getRequest()->getParams();
            $dbtableParada->cadastrarParadaOnibus($dados);
        }
    }

    public function editarAction()
    {
        $id = $this->getRequest()->getParam('id');
        $dbtableParada = new Application_Model_DbTable_ParadaOnibus();
        $parada = $dbtableParada->getParadaOnibusPorId($id);

        if ($this->getRequest()->isPost()) {
            $dados = $this->getRequest()->getParams();
            $dbtableParada->editarParadaOnibus($id, $dados);
        }

        $this->view->parada = $parada;
    }

}
