<?php

class CadastroOnibusController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        
    }

    public function cadastrarAction()
    {

        if ($this->getRequest()->isPost()) {
                $dados = $this->getRequest()->getParams();
                $dbtableCategoria = new Application_Model_DbTable_CategoriaOnibus();
                $cod_CategoriaOnibus = $dbTableCategoriaOnibus->cadastrarCategoriaOnibus($dados);
      
    }



    }



   

}