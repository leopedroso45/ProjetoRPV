<?php

class TarifaController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        $dbTableTarifa = new Application_Model_DbTable_Tarifa();
        $lista = $dbTableTarifa->listarTarifas();
        $this->view->listarTarifas = $lista;
        
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