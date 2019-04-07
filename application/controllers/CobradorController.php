<?php

class CobradorController extends Zend_Controller_Action
{

   public function init()
    {
        $this->_helper->layout->setLayout('layout');
        
    }

    public function indexAction(){
        
        $dbTableCobrador = new Application_Model_DbTable_Cobrador();
        $lista = $dbTableCobrador->listarTodosCobradores();
        //var_dump($lista);die();
        $this->view->listaDosCobradores = $lista;

        if($this->getRequest()->isPost()) {
            $dados = $this->getRequest()->getParams();
           $dbTableCobrador->cadastrarCobrador($dados);

        }
        
    }

     public function editarAction(){
        $this->_helper->layout->setLayout('layout');
        
         $id = $this->getRequest()->getParam('id');
         $dbTableCobrador = new Application_Model_DbTable_Cobrador();
         //var_dump($id);die();
         $cobrador = $dbTableCobrador->getCobradorPorId($id);

         if($this->getRequest()->isPost()){
            $dados = $this->getRequest()->getParams();
            $dbTableCobrador->editarCobrador($id, $dados);
           
            

        }

        $this->view->cobrador = $cobrador;


    }


    public function editarAtivoAction()
    {
        $id = $this->getRequest()->getParam('id');

        $dbTableCobrador = new Application_Model_DbTable_Cobrador();
        $cobrador = $dbTableCobrador->getCobradorPorId($id);

        if ($this->getRequest()->isPost()) {
            $dados = $this->getRequest()->getParams();
            $dbTableCobrador->editarAtivo($id, $dados);
        }
        $this->view->cobrador = $cobrador;

    }

    public function editarCobradorajaxAction()
    {
        $id = $this->getRequest()->getParam('id');

        $dbTableCobrador = new Application_Model_DbTable_Cobrador();
        $cobrador = $dbTableCobrador->getCobradorPorId($id);

        if ($this->getRequest()->isPost()) {
            $dados = $this->getRequest()->getParams();
            $dbTableCobrador->editarCobradorajax($id, $dados);
        }
        $this->view->cobrador = $cobrador;

    }


   


     

   
}
