<?php

class BeneficioController extends Zend_Controller_Action
{

    public function init()
    {
		$this->_helper->layout->setLayout("layout_adminlocal");
    }

    public function indexAction()
    {

    }
        public function deficienteAction()
    {
        $dbTableBeneficio = new Application_Model_DbTable_Beneficio();
        $lista = $dbTableBeneficio->listarBeneficios();
        $this->view->listarBeneficios = $lista;
    }    
    public function idosoAction()
    {
        $dbTableBeneficio = new Application_Model_DbTable_Beneficio();
        $lista = $dbTableBeneficio->listarBeneficios();
        $this->view->listarBeneficios = $lista;
    }
        public function estudanteAction()
    {
        $dbTableBeneficio = new Application_Model_DbTable_Beneficio();
        $lista = $dbTableBeneficio->listarBeneficios();
        $this->view->listarBeneficios = $lista;
    }
}