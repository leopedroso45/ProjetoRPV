<?php
class LinhaController extends Zend_Controller_Action
{
    public function init()
    {
        /* Initialize action controller here */
    }
    public function indexAction()
    {
        $dbTableLinha = new Application_Model_DbTable_Linha();
        $lista = $dbTableLinha->listarLinhas();
        $this->view->listarLinhas = $lista;
        
        if ($this->getRequest()->isPost()) {
                $dados = $this->getRequest()->getParams();
                $linhas = explode(',', $dados['id_linha']);
                for($i = 0; $i < sizeof($linhas); $i++){
                    $dbTableLinha = new Application_Model_DbTable_Tarifa();
                    $dbTableLinha->cadastrarLinha($dados, $linhas[$i]);
                }
        }
    }
    public function cadastrarAction()
    {
   
    }
}