<?php

class MotoristaController extends Zend_Controller_Action
{

   public function init()
    {
        $this->_helper->layout->setLayout('layout_Motorista');
        
    }

    public function indexAction(){
        
        $dbTableMotorista = new Application_Model_DbTable_Motorista();
        $lista = $dbTableMotorista->listarTodosMotoristas();
        //var_dump($lista);die();
        $this->view->listaDosMotoristas = $lista;

        if($this->getRequest()->isPost()) {
            $dados = $this->getRequest()->getParams();
           $dbTableMotorista->cadastrarMotorista($dados);

        }
        
    }

     public function editarAction(){
        $this->_helper->layout->setLayout('layout_Motorista');
        
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


    public function editarAtivoAction()
    {
        $id = $this->getRequest()->getParam('id');

        $dbTableMotorista = new Application_Model_DbTable_Motorista();
        $motorista = $dbTableMotorista->getMotoristaPorId($id);

        if ($this->getRequest()->isPost()) {
            $dados = $this->getRequest()->getParams();
            $dbTableMotorista->editarAtivo($id, $dados);
        }
        $this->view->motorista = $motorista;

    }

    public function editarMotoristaajaxAction()
    {
        $id = $this->getRequest()->getParam('id');

        $dbTableMotorista = new Application_Model_DbTable_Motorista();
        $motorista = $dbTableMotorista->getMotoristaPorId($id);

        if ($this->getRequest()->isPost()) {
            $dados = $this->getRequest()->getParams();
            $dbTableMotorista->editarMotoristaajax($id, $dados);
        }
        $this->view->motorista = $motorista;

    }


   


     

   
}
