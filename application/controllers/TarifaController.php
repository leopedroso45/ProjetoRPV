<?php

class TarifaController extends Zend_Controller_Action
{

    public function init()
    {
        $this->_helper->layout->setLayout('layout_admin_geral');
    }

    public function indexAction()
    {
        $dbTableTrajeto = new Application_Model_DbTable_Trajeto();
        $lista = $dbTableTrajeto->listarTodosTrajetos1();
        $this->view->listarTrajetos = $lista;

        if ($this->getRequest()->isPost()) {
            $dados = $this->getRequest()->getParams();
            $trajetos = explode(',', $dados['id_trajeto']);

            for ($i = 0; $i < sizeof($trajetos); $i++) {
                $dbTableTarifa = new Application_Model_DbTable_Tarifa();
                $id_tarifa = $dbTableTarifa->cadastrarTarifa($dados, $trajetos[$i]);

                $dbTableTarifaTrajeto = new Application_Model_DbTable_Tarifa_Trajeto();
                $dbTableTarifaTrajeto->cadastrarTarifaTrajeto($dados, $trajetos[$i], $id_tarifa);
            }
        }
    }

    public function cadastrarAction()
    {
        
    }

}
