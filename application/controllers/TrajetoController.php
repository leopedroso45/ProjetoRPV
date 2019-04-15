<?php

class TrajetoController extends Zend_Controller_Action
{

    public function init()
    {
        $this->_helper->layout->setLayout('layout_admin_local');
    }

    public function indexAction()
    {
        $dbTableParada = new Application_Model_DbTable_ParadaOnibus();
        $lista = $dbTableParada->listarParadaOnibus();
        //var_dump($lista);die();
        $this->view->listaDasParadas = $lista;

        // inicio listar cobrador

        $dbTableCobrador = new Application_Model_DbTable_Cobrador();
        $lista2 = $dbTableCobrador->listarTodosCobradores();
        
        $this->view->listaDosCobradores = $lista2;


        //fim listar cobrador
        //inicio listar motorista

         $dbTableMotorista = new Application_Model_DbTable_Motorista();
        $lista3 = $dbTableMotorista->listarTodosMotoristas();
        
        $this->view->listaDosMotoristas = $lista3;

        // fim listar motorista

        //inicio listar onibus

         $dbTableOnibus = new Application_Model_DbTable_OnibusUrbano();
        $lista4 = $dbTableOnibus->listarTodosOnibusUrbanos();
        
        $this->view->listaDosOnibus = $lista4;

        // fim listar onibus

        $dbTableTrajeto = new Application_Model_DbTable_Trajeto();
        $lista5 = $dbTableTrajeto->listarTodosTrajetos();
        
        $this->view->listaDosTrajetos = $lista5;

        
        $lista6 = $dbTableTrajeto->listarTodasParadasPorTrajeto();
        
        $this->view->listarParadasDosTrajetos = $lista6;



         $dbTableParadaTrajeto = new Application_Model_DbTable_ParadaTrajeto();

       //  listarTodosOnibusUrbanos()


        if($this->getRequest()->isPost()) {
            $dados = $this->getRequest()->getParams();
           // var_dump($dados);die();

           $id_trajeto =  $dbTableTrajeto->cadastrarTrajeto($dados);
           // var_dump($id_trajeto);die();
            $paradas = explode(',', $dados['id_parada']);

            for ($i = 0; $i < sizeof($paradas); $i++) {
                  $dbTableParadaTrajeto->cadastrarParadaTrajeto($id_trajeto , $paradas[$i]);
            }
        

           


        }
    }
     public function listarParadasDosTrajetos()
    {
        







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

