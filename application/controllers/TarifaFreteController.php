<?php

class TarifaFreteController extends Zend_Controller_Action
{

    public function init()
    {
        $this->_helper->layout->setLayout('layout_secretario');
        $this->view->headScript()->appendFile($this->view->baseUrl('dist/js/script.js'));
        $this->view->headScript()->appendFile($this->view->baseUrl('dist/js/tarifa_frete.js'));
    }

    public function indexAction()
    {
        //$id = $this->getRequest()->getParam('id');
        $dbtableTarifaFrete = new Application_Model_DbTable_TarifaFrete();
        $tarifa = $dbtableTarifaFrete->getTarifaFretePorId(2);
       // var_dump($tarifa);die();

       if ($this->getRequest()->isPost()) {
            $dados = $this->getRequest()->getParams();
            $dbtableTarifaFrete->editarTarifaFrete($id, $dados);
        }

        $this->view->tarifa = $tarifa;
        //var_dump($tarifa);
    }

}
