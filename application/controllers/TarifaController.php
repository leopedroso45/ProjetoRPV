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
            $trajetos = explode(',', $dados['id_trajeto']);
            
            for ($i = 0; $i < sizeof($trajetos); $i++) {
                $dbTableTarifa = new Application_Model_DbTable_Tarifa();
                $id_tarifa = $dbTableTarifa->cadastrarTarifa($dados);

                $dbTableTarifa_Trajeto = new Application_Model_DbTable_Tarifa_Trajeto();
                $dbTableTarifa_Trajeto->cadastrarTarifaTrajeto($dados, $id_tarifa, $trajetos[$i]);
            }
        }
    }

}