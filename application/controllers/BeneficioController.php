<?php

class BeneficioController extends Zend_Controller_Action
{

    public function init()
    {
        $this->_helper->layout->setLayout('layout_admin_geral');
    }

    public function indexAction()
    {
        
    }

    public function deficienteAction()
    {

        $dbTableBeneficio = new Application_Model_DbTable_Beneficio();
        $lista = $dbTableBeneficio->listar();
        $this->view->listarBeneficios = $lista;

        //$id = $this->getRequest()->getParam('id');
        // $dbTableBeneficio = new Application_Model_DbTable_Beneficio();
        // $beneficio = $dbTableBeneficio->getBeneficioPorId($id);

        if ($this->getRequest()->isPost()) {
            $dados = $this->getRequest()->getParams();
            $dbTableBeneficio->editarBeneficios($id, $dados);
        }
        //$this->view->beneficio = $beneficio;
    }

    public function idosoAction()
    {
        $dbTableBeneficio = new Application_Model_DbTable_Beneficio();
        $lista = $dbTableBeneficio->listar();
        $this->view->listarBeneficios = $lista;
    }

    public function estudanteAction()
    {
        $dbTableBeneficio = new Application_Model_DbTable_Beneficio();
        $lista = $dbTableBeneficio->listar();
        $this->view->listarBeneficios = $lista;
    }

}
