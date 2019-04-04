<?php

class MotoristaController extends Zend_Controller_Action
{

    public function init()
    {
        $this->_helper->layout->setLayout('layout');
        
    }

    public function indexAction(){
        
        $dbTableMotorista = new Application_Model_DbTable_Motorista();
        $lista = $dbTableMotorista->listarTodosMotoristas();
        $this->view->listaDosMotoristas = $lista;

        if($this->getRequest()->isPost()) {
            $dados = $this->getRequest()->getParams();
           $dbTableMotorista->cadastrarMotorista($dados);

        }
        
    }

    public function editarAction(){
        
        $this->_helper->layout->setLayout('layout');
        
         $id = $this->getRequest()->getParam('id');
         $dbTableMotorista = new Application_Model_DbTable_Motorista();
         //var_dump($id);die();
         $motorista = $dbTableMotorista->getMotoristaPorId($id);

         if($this->getRequest()->isPost()){
            $dados = $this->getRequest()->getParams();
            $dbTableMotorista->editarMotorista($id, $dados);

            

        }

        $this->view->motorista = $motorista;
     

   
    }
}

