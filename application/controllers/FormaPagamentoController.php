<?php

class FormaPagamentoController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {

        $dbtableFormaPagamento= new Application_Model_DbTable_FormaPagamento();
        $lista = $dbtableFormaPagamento->listarFormaPagamento();
        $this->view->listarFormaPagamento= $lista;



        if ($this->getRequest()->isPost()) {
                $dados = $this->getRequest()->getParams(); 
                $dbtableFormaPagamento->cadastrarFormaPagamento($dados);
        
    }
}



    public function editarAction()
    {
        $id = $this->getRequest()->getParam('id');
        $dbtableFormaPagamento= new Application_Model_DbTable_FormaPagamento();
        $pagamento= $dbtableFormaPagamento->getFormaPagamentoPorId($id);
        
        
        if ($this->getRequest()->isPost()) {
            $dados = $this->getRequest()->getParams();
            $dbtableFormaPagamento->editarFormaPagamento($id, $dados);
        }
        
        $this->view->pagamento = $pagamento;
        
    }

     public function editarStatusAction()
    {
        $id = $this->getRequest()->getParam('id');

        $dbtableFormaPagamento= new Application_Model_DbTable_FormaPagamento();
        $pagamento = $dbtableFormaPagamento->getFormaPagamentoPorId($id);



        if ($this->getRequest()->isPost()) {
            $dados = $this->getRequest()->getParams();
            $dbtableFormaPagamento->editarStatus($id, $dados);
        }

        $this->view->pagamento = $pagamento;
    }




    }



   

