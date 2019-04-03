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
        
         $id = $this->getRequest()->getParams('id');
         $dbTableMotorista = new Application_Model_DbTable_Cobrador();
         $cobrador = $dbTableCobrador->getCobradorPorId($id);

         if($this->getRequest()->isPost()){
            $dados = $this->getRequest()->getParams();
            $id = $dbTableMotorista->editarMotorista($id, $dados);

        }

    }
     

   
    }

