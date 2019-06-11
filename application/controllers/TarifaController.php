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
        $dbTableTarifaTrajeto = new Application_Model_DbTable_Tarifa_Trajeto();
        
        $dbTableTrajeto = new Application_Model_DbTable_Trajeto();
        $lista = $dbTableTrajeto->listarTrajetos();
        $this->view->listarTrajetos = $lista;

        $dados = $this->getRequest()->getParams();

        if ($this->getRequest()->isPost()) {
            $trajetos = explode(',', $dados['id_trajeto']);
            //var_dump($trajetos); die();
            $id_tarifa = $dbTableTarifa->cadastrarTarifa($dados);
            
//            for ($i = 0; $i < sizeof($trajetos); $i++) {
                
                $dbTableTarifaTrajeto->cadastrarTarifaTrajeto($dados, $id_tarifa, $trajetos[0]);
//            }
        }
    }

}
