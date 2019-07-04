<?php

class PromocaoController extends Zend_Controller_Action
{
    public function init()
    {
        /* Initialize action controller here */
        $this->_helper->layout->setLayout('layout_admin_geral');
        $this->view->headScript()->appendFile($this->view->baseUrl('dist/js/promocao.js'));
    }
    public function indexAction()
    {
        $dbtablePromocao = new Application_Model_DbTable_Promocao();
        $listaPromocoes = $dbtablePromocao->listarTodasPromocoes();
        $this->view->listaDasPromocoes = $listaPromocoes;

        if ($this->getRequest()->isPost()) {
            $dados = $this->getRequest()->getParams();
            $dbtablePromocao->cadastrarPromocao($dados);     
        }
    }
    public function cadastrarAction()
    {
        
    }
}