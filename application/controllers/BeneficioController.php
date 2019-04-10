<?php

class BeneficioController extends Zend_Controller_Action {

    public function init() {
        $this->_helper->layout->setLayout("layout_adminlocal");
    }

    public function indexAction() {
        
    }

    public function deficienteAction() {

        $dbTableBeneficio = new Application_Model_DbTable_Beneficio();
        $listaDeficiente = $dbTableBeneficio->listarDeficiente();
        $this->view->listarBeneficios = $listaDeficiente;

        //$id = $this->getRequest()->getParam('id');
        // $dbTableBeneficio = new Application_Model_DbTable_Beneficio();
        // $beneficio = $dbTableBeneficio->getBeneficioPorId($id);

        if ($this->getRequest()->isPost()) {
            $dados = $this->getRequest()->getParams();
            $dbTableBeneficio->editarBeneficios($id, $dados);
        }
    }

    public function idosoAction() {
        $dbTableBeneficio = new Application_Model_DbTable_Beneficio();
        $listaIdoso = $dbTableBeneficio->listarIdoso();
        $this->view->listarBeneficios = $listaIdoso;

        if ($this->getRequest()->isPost()) {
            $dados = $this->getRequest()->getParams();
            $dbTableBeneficio->editarBeneficios($id, $dados);
        }
    }

    public function estudanteAction() {
        $dbTableBeneficio = new Application_Model_DbTable_Beneficio();
        $listaEstudante = $dbTableBeneficio->listarEstudante();
        $this->view->listarBeneficios = $listaEstudante;

        if ($this->getRequest()->isPost()) {
            $dados = $this->getRequest()->getParams();
            $dbTableBeneficio->editarBeneficios($id, $dados);
        }
    }
    
    public function editarSituacaoAction()
    {
        $id = $this->getRequest()->getParam('id');

        $dbTableBeneficio = new Application_Model_DbTable_Beneficio();
        $beneficio = $dbTableBeneficio->getBeneficioPorId($id);

        if ($this->getRequest()->isPost()) {
            $dados = $this->getRequest()->getParams();
            //var_dump($dados); die();
            $dbTableBeneficio->editarStatus($id, $dados);
        }
        $this->view->beneficio = $beneficio;
    }

}
