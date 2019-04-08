<?php

class ParadaOnibusController extends Zend_Controller_Action
{

    public function init()
    {
        $this->_helper->layout->setLayout('layout_admin_local');
    }

    public function indexAction()
    {

        $dbtableParada = new Application_Model_DbTable_ParadaOnibus();
        $lista = $dbtableParada->listarParadaOnibus();
        $this->view->listarParadaOnibus = $lista;



        if ($this->getRequest()->isPost()) {
                $dados = $this->getRequest()->getParams(); 
                $dbtableParada->cadastrarParadaOnibus($dados);
        
    }
}



    public function editarAction()
    {
        
        $id = $this->getRequest()->getParam('id');      
        $dbtableParada = new Application_Model_DbTable_ParadaOnibus();      
        $parada = $dbtableParada->getParadaOnibusPorId($id);
        //var_dump($id); die();
        
        
        if ($this->getRequest()->isPost()) {         
            $dados = $this->getRequest()->getParams();
            $dbtableParada->editarParadaOnibus($id, $dados);
        }
        
        $this->view->parada = $parada;
        
    }



    }



   

