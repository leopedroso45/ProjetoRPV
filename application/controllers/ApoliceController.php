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
        $dbTableApolice = new Application_Model_DbTable_Apolice();
        $listaApolices = $dbTableApolice->listarTodasApolices();
        $this->view->listaDasApolices = $listaApolices;

        $dbTableOnibusUrbano = new Application_Model_DbTable_OnibusUrbano();
        $lista = $dbTableOnibusUrbano->listarTodosOnibus();
        $this->view->listaDosOnibus = $lista;

        if ($this->getRequest()->isPost()) {
            $dados = $this->getRequest()->getParams();
            $onibus = explode(',', $dados['id_onibus']);
            $dbTableApolice = new Application_Model_DbTable_Apolice();
            $id_apolice = $dbTableApolice->cadastrarApolice($dados);


            for ($i = 0; $i < sizeof($onibus); $i++) {

                if ($dados['tipo'][$i] === 'urbano') {
                    $dbTableOnibusUrbano = new Application_Model_DbTable_ApoliceUrbano();
                    $dbTableOnibusUrbano->cadastrarOnibusApolice($id_apolice, $onibus[$i]);
                }

                if ($dados['tipo'][$i] === 'intermunicipal') {
                    $dbTableOnibusIntermunicipal = new Application_Model_DbTable_ApoliceIntermunicipal();
                    $dbTableOnibusIntermunicipal->cadastrarOnibusApolice($id_apolice, $onibus[$i]);
                }
            }
        }
    }

    public function visualizarAction()
    {
        $id = $this->getRequest()->getParam('id');
        $dbTableApolice = new Application_Model_DbTable_Apolice();
        $listaApolicePorIdApolice = $dbTableApolice->listarOnibusPorIdApolice($id);
        $this->view->listarOnibusPorIdApolice = $listaApolicePorIdApolice;
        
        $apolicePorIdApolice = $dbTableApolice->getApolicePorId($id);
        $this->view->apolicePorId = $apolicePorIdApolice;
    }

}
