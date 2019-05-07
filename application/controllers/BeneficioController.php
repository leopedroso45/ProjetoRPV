<?php

class BeneficioController extends Zend_Controller_Action {

    public function init() {
        $this->_helper->layout->setLayout("layout_admin_geral");
        $this->view->headScript()->appendFile($this->view->baseUrl('dist/js/script.js'));
        $this->view->headScript()->appendFile($this->view->baseUrl('dist/js/beneficio.js'));
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

        if ($this->getRequest()->isPost()) {
            $dados = $this->getRequest()->getParams();
            $dbTableBeneficio->editarBeneficios($id, $dados);
        } else if ($this->getRequest()->isGet()) {
            $dados = $this->getRequest()->getParams();

            if (@$dados['tipo'] == 1) {
                $listaEstudante = $dbTableBeneficio->listarEstudanteAprovado();
                $this->view->listarBeneficios = $listaEstudante;
            } else if (@$dados['tipo'] == 2) {
                $listaEstudante = $dbTableBeneficio->listarEstudanteReprovado();
                $this->view->listarBeneficios = $listaEstudante;
            } else {
                @$cpf = $dados['cpf'];
                if (isset($cpf) && strlen($cpf) == 14 )  {
                    $listaEstudante = $dbTableBeneficio->listarEstudantePorCPF($cpf);
                    $this->view->listarBeneficios = $listaEstudante;
                } else {
                    $listaEstudante = $dbTableBeneficio->listarEstudante();
                    $this->view->listarBeneficios = $listaEstudante;
                }
            }
        }
    }

    public function editarbeneficioAction() {
        //echo("teste");
        //die();
        //var_dump($dados); die();

        $id = $this->getRequest()->getParam('id');

        $dbTableBeneficio = new Application_Model_DbTable_Beneficio();
        // $beneficio = $dbTableBeneficio->getBeneficioPorId($id);

        if ($this->getRequest()->isPost()) {
            $dados = $this->getRequest()->getParams();
            //var_dump($dados); die();
            $dbTableBeneficio->editarBeneficio($id, $dados);
        }
        // $this->view->beneficio = $beneficio;
    }

}
