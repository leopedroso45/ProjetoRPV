<?php

class TrajetoController extends Zend_Controller_Action
{

    public function init()
    {
        $this->_helper->layout->setLayout('layout_admin_local');
        $this->view->headScript()->appendFile($this->view->baseUrl('dist/js/script.js'));
        $this->view->headScript()->appendFile($this->view->baseUrl('dist/js/trajeto.js'));
    }

    public function indexAction()
    {
        $dbTableParada = new Application_Model_DbTable_ParadaOnibus();
        $listaParadas = $dbTableParada->listarParadaOnibus();
        $this->view->listaDasParadas = $listaParadas;

        $dbTableCobrador = new Application_Model_DbTable_Cobrador();
        $listaCobradores = $dbTableCobrador->listarTodosCobradores();
        $this->view->listaDosCobradores = $listaCobradores;


        $dbTableMotorista = new Application_Model_DbTable_Motorista();
        $listaMotoristas = $dbTableMotorista->listarTodosMotoristas();
        $this->view->listaDosMotoristas = $listaMotoristas;

        $dbTableOnibus = new Application_Model_DbTable_OnibusUrbano();
        $listaOnibus = $dbTableOnibus->listarTodosOnibusUrbanos();
        $this->view->listaDosOnibus = $listaOnibus;

        $dbTableTrajeto = new Application_Model_DbTable_Trajeto();
        $listaTrajetos = $dbTableTrajeto->listarTodosTrajetos();
        $this->view->listaDosTrajetos = $listaTrajetos;


        $lista = $dbTableTrajeto->listarTodasParadasPorTrajeto();
        $this->view->listarParadasDosTrajetos = $lista;

        $dbTableParadaTrajeto = new Application_Model_DbTable_ParadaTrajeto();

        if ($this->getRequest()->isPost()) {
            $dados = $this->getRequest()->getParams();
            $id_trajeto = $dbTableTrajeto->cadastrarTrajeto($dados);
            $paradas = explode(',', $dados['id_parada']);

            for ($i = 0; $i < sizeof($paradas); $i++) {
                $dbTableParadaTrajeto->cadastrarParadaTrajeto($id_trajeto, $paradas[$i]);
            }
        }
    }

    public function editarAtivoAction()
    {
        $id = $this->getRequest()->getParam('id');
        $dbTableTrajeto = new Application_Model_DbTable_Trajeto();
        $trajeto = $dbTableTrajeto->getTrajetoPorId($id);

        if ($this->getRequest()->isPost()) {
            $dados = $this->getRequest()->getParams();
            $dbTableTrajeto->editarAtivo($id, $dados);
        }

        $this->view->trajeto = $trajeto;
    }

}
