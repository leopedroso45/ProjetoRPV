<?php

class TarifaController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        $dbTableTrajeto = new Application_Model_DbTable_Trajeto();
        $lista = $dbTableTrajeto->listarTrajetos();
        $this->view->listarTrajetos = $lista;
        
        if ($this->getRequest()->isPost()) {
                $dados = $this->getRequest()->getParams();
                $dbTableTarifa = new Application_Model_DbTable_Tarifa();
                $dbTableTarifa->cadastrarTarifa($dados);
        }
    }

    public function cadastrarAction()
    {
   
    }

}