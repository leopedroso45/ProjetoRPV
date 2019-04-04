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
    
		$dbTableBeneficio = new Application_Model_DbTable_Beneficio();
        $lista = $dbTableBeneficio->listarDadosPessoa();
        $this->view->listarDadosPessoa = $lista;
	
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

        public function listarPessoas()
    {
        $select = $this->select()->setIntegrityCheck(false);
        $select->from(array('BEN' => 'BENEFICIO’), array('BEN.*'))
                ->from(array('PESS' => 'PESSOA'), array('PESS.nome'))
                ->where('BEN.ID_PESSOA = PESS.ID_PESSOA')

                return $this->fetchAll($select);
     }
}