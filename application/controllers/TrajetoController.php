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



        $dbTableTrajeto = new Application_Model_DbTable_Trajeto();
         $dbTableParadaTrajeto = new Application_Model_DbTable_ParadaTrajeto();


        if($this->getRequest()->isPost()) {
            $dados = $this->getRequest()->getParams();
           // var_dump($dados);die();
            $paradas = explode(',', $dados['id_parada']);

            for ($i = 0; $i < sizeof($paradas); $i++) {
                  $dbTableParadaTrajeto->cadastrarParadaTrajeto($dados, $paradas[$i]);
            }


           //$dbTableParadaTrajeto->cadastrarParadaTrajeto($dados);
           //$dbTableTrajeto->cadastrarTrajeto($dados);


        }
    }
     public function trajetoAction()
    {
        
    }

   
    }

