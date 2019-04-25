<?php

class ApoliceController extends Zend_Controller_Action
{

    public function init()
    {
        $this->_helper->layout->setLayout('layout_admin_local');
        
        $this->view->headScript()->appendFile($this->view->baseUrl('dist/js/script.js'));
        $this->view->headScript()->appendFile($this->view->baseUrl('dist/js/datedropper.js'));
        $this->view->headScript()->appendFile($this->view->baseUrl('dist/js/jquery.dataTables.min.js'));
        $this->view->headScript()->appendFile($this->view->baseUrl('dist/js/dataTables.bootstrap.min.js'));
        $this->view->headScript()->appendFile($this->view->baseUrl('dist/js/script-dataTables.js'));
        $this->view->headScript()->appendFile($this->view->baseUrl('dist/js/apolice.js'));
        
        
        
    }

    public function indexAction()
    {
        $dbTableOnibusUrbano = new Application_Model_DbTable_OnibusUrbano();
        $lista = $dbTableOnibusUrbano->listarTodosOnibus();
        $this->view->listaDosOnibusUrbanos = $lista;

        $dbTableApolice = new Application_Model_DbTable_Apolice();
        $listaApolices = $dbTableApolice->listarTodasApolices();
        $this->view->listaDasApolices = $listaApolices;

//        if ($this->getRequest()->isPost()) {
//            $dados = $this->getRequest()->getParams();
//            $dbTableApolice = new Application_Model_DbTable_Apolice();
//            $dbTableOnibusApolice = new Application_Model_DbTable_ApoliceUrbano();
//            $id_apolice = $dbTableApolice->cadastrarApolice($dados);
//            $onibus = explode(',', $dados['id_onibus_urbano']);
//
//            for ($i = 0; $i < sizeof($onibus); $i++) {
//                $dbTableOnibusApolice->cadastrarOnibusApolice($id_apolice, $onibus[$i]);
//            }
//        }
    }

}
