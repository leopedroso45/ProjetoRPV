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

//        if ($this->getRequest()->isPost()) {
//            $id = $this->getRequest()->getParam('id');
//            var_dump($id);die();
//            $listaApolicePorIdApolice = $dbTableApolice->listarOnibusPorIdApolice($id);
//            $this->view->listarOnibusPorIdApolice = $listaApolicePorIdApolice;
//        }

        $listaApolices = $dbTableApolice->listarTodasApolices();
        $this->view->listaDasApolices = $listaApolices;

        $dbTableOnibusUrbano = new Application_Model_DbTable_OnibusUrbano();
        $lista = $dbTableOnibusUrbano->listarTodosOnibus();
        $this->view->listaDosOnibusUrbanos = $lista;

        if ($this->getRequest()->isPost()) {
            $dados = $this->getRequest()->getParams();
            
//            if ($dados['descricao'] === NULL) {
//                
//            } else {

                $onibus = explode(',', $dados['id_onibus']);

                $dbTableApolice = new Application_Model_DbTable_Apolice();
                $id_apolice = $dbTableApolice->cadastrarApolice($dados);

//            var_dump(sizeof($onibus));die();

                for ($i = 0; $i < sizeof($onibus); $i++) {
//                var_dump("<b><br><hr>data:<pre> ". print_r($onibus[0])."</pre><hr><br><b>");

                    if ($dados['tipo'][$i] === 'urbano') {
                        $dbTableOnibusUrbano = new Application_Model_DbTable_ApoliceUrbano();
                        $dbTableOnibusUrbano->cadastrarOnibusApolice($id_apolice, $onibus[$i]);
                    }

                    if ($dados['tipo'][$i] === 'intermunicipal') {
                        $dbTableOnibusIntermunicipal = new Application_Model_DbTable_ApoliceIntermunicipal();
                        $dbTableOnibusIntermunicipal->cadastrarOnibusApolice($id_apolice, $onibus[$i]);
                    }
                }
//            }
        }
    }

}
