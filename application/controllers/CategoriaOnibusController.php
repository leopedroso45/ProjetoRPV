<?php

class CategoriaOnibusController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {

        $dbtableCategoria = new Application_Model_DbTable_CategoriaOnibus();
        $lista = $dbtableCategoria->listarCategoriaOnibus();
        $this->view->listarCategoriaOnibus = $lista;



        if ($this->getRequest()->isPost()) {
                $dados = $this->getRequest()->getParams(); 
                $dbtableCategoria->cadastrarCategoriaOnibus($dados);
        
    }
}



    public function editarAction()
    {
        $id = $this->getRequest()->getParam('id');
        $dbtableCategoria = new Application_Model_DbTable_CategoriaOnibus();
        $categoria = $dbtableCategoria->getCategoriaOnibusPorId($id);
        
        
        if ($this->getRequest()->isPost()) {
            $dados = $this->getRequest()->getParams();
            $dbtableCategoria->editarCategoriaOnibus($id, $dados);
        }
        
        $this->view->categoria = $categoria;
        
    }



    }



   

