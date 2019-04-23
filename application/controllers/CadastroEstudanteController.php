<?php

class CadastroEstudanteController extends Zend_Controller_Action {

    public function init() {
        $this->_helper->layout->setLayout("layout_admin_geral");
        $this->view->headScript()->appendFile($this->view->baseUrl('dist/js/script.js'));
        $this->view->headScript()->appendFile($this->view->baseUrl('dist/js/beneficio.js'));
    }

    public function indexAction() {
        
    }

        public function cadastrarAction()
    {

        if ($this->getRequest()->isPost()) {
                $dados = $this->getRequest()->getParams();
                $dbtableEstudante = new Application_Model_DbTable_Estudante();
                $id_estudante = $dbtableEstudante->cadastrarEstudante($dados);
      
    }



    }
    
}
