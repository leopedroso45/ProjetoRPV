<?php

class TrajetoController extends Zend_Controller_Action
{

    public function init()
    {
        
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

        $dbTableTrajeto = new Application_Model_DbTable_Trajeto();
         $dbTableParadaTrajeto = new Application_Model_DbTable_ParadaTrajeto();


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
     public function trajetoAction()
    {
        
    }

   
    }

