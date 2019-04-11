<?php

class OnibusUrbanoController extends Zend_Controller_Action
{

    public function init()
    {
        $this->_helper->layout->setLayout('layout_secretario');
        $this->view->headScript()->appendFile($this->view->baseUrl('dist/js/onibus_urbano.js'));
    }

    public function indexAction()
    {
        $dbTableOnibusUrbano = new Application_Model_DbTable_OnibusUrbano();
        $lista = $dbTableOnibusUrbano->listarTodosOnibusUrbanos();
        $this->view->listaDosOnibusUrbanos = $lista;

        if ($this->getRequest()->isPost()) {
            $dados = $this->getRequest()->getParams();
//            var_dump($dados);die();
            $dbtableOnibusUrbano = new Application_Model_DbTable_OnibusUrbano();
            $dbtableOnibusUrbano->cadastrarOnibusUrbano($dados);
        }
    }

    public function editarAction()
    {
        $id = $this->getRequest()->getParam('id');
        $dbTableOnibusUrbano = new Application_Model_DbTable_OnibusUrbano();
        $onibusUrbano = $dbTableOnibusUrbano->getOnibusUrbanoPorId($id);

        if ($this->getRequest()->isPost()) {
            $dados = $this->getRequest()->getParams();
            $dbTableOnibusUrbano->editarOnibusUrbano($id, $dados);
        }

        $this->view->onibusUrbano = $onibusUrbano;
    }

}
