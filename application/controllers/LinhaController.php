<?php

class LinhaController extends Zend_Controller_Action
{

    public function init()
    {
        $this->_helper->layout->setLayout('layout_admin_local');
        $this->view->headScript()->appendFile($this->view->baseUrl('dist/js/script.js'));
        $this->view->headScript()->appendFile($this->view->baseUrl('dist/js/linha.js'));
         $this->view->headScript()->appendFile($this->view->baseUrl('dist/js/moment.js'));
    }

    public function indexAction()
    {

           
       
        $dbTableTrecho = new Application_Model_DbTable_Trecho();
        $listaTrechos = $dbTableTrecho->listarTodosTrechos();
        $this->view->listaDosTrechos = $listaTrechos;
            $dbTableLinha = new Application_Model_DbTable_Linha();


            if ($this->getRequest()->isPost()) {
           
             $dbTableLinhaTrecho = new Application_Model_DbTable_LinhaTrecho();


            $dados = $this->getRequest()->getParams();
            
                $id_linha = $dbTableLinha->cadastrarLinha($dados);
             
             $trechos = explode(',', $dados['id_trecho']);
             $tempos = explode(',', $dados['tempo_trecho']);
             $kms = explode(',', $dados['km_trecho']);
             //var_dump($kms);

            for ($i = 0; $i < sizeof($trechos); $i++) {
                 $dbTableLinhaTrecho->cadastrarLinhaTrecho($id_linha, $trechos[$i], $tempos[$i], $kms[$i]);
             }
               $this->view->linha = $dados;

     }



        
         $listaLinhas = $dbTableLinha->listarTodasLinhas();
         $this->view->listaDasLinhas = $listaLinhas;

     
         //    $listaLinhastrechos = $dbTableLinhaTrecho->listarLinhaTrechos();
         // $this->view->listaDasLinhast = $listaLinhastrechos;

        

        //if ($this->getRequest()->isPost()) {
            //    $xx = 2;
            // $id = $this->getRequest()->getParam('idd');
            //var_dump($id);die();
           // int $iid = $id;
            // $dbTableLinhaTrecho = new Application_Model_DbTable_LinhaTrecho();
            // $listaLinhastrechos = $dbTableLinhaTrecho->listarTrechosPorId($id);
            // $this->view->listaDasLinhast = $listaLinhastrechos;
           






           
            
            
        }

        public function cadastrarAction(){

            $dbTableLinha = new Application_Model_DbTable_Linha();
             $dbTableLinhaTrecho = new Application_Model_DbTable_LinhaTrecho();


            $dados = $this->getRequest()->getParams();
            
                $id_linha = $dbTableLinha->cadastrarLinha($dados);
             
             $trechos = explode(',', $dados['id_trecho']);
             $tempos = explode(',', $dados['tempo_trecho']);
             $kms = explode(',', $dados['km_trecho']);
             //var_dump($kms);

            for ($i = 0; $i < sizeof($trechos); $i++) {
                 $dbTableLinhaTrecho->cadastrarLinhaTrecho($id_linha, $trechos[$i], $tempos[$i], $kms[$i]);
             }
               $this->view->linha = $dados;

        }



       
    

    public function editarAtivoAction()
    {

        $id = $this->getRequest()->getParam('id');

        $dbTableLinha = new Application_Model_DbTable_Linha();
        $linha = $dbTableLinha->getlinhaPorId($id);


        if ($this->getRequest()->isPost()) {
            $dados = $this->getRequest()->getParams();
            $dbTableLinha->editarAtivo($id, $dados);
        }

        $this->view->linha = $linha;
    }


public function linhatrechosAction()
    {
         $dbTableLinhaTrecho = new Application_Model_DbTable_LinhaTrecho();
           $xx = 2;
            $id = $this->getRequest()->getParam('id');
            //var_dump($id);die();
           // int $iid = $id;
            
            $listaLinhastrechos = $dbTableLinhaTrecho->listarTrechosPorId($id);
            //var_dump($listaLinhastrechos);
            $this->view->listaDasLinhast = $listaLinhastrechos; 

     

       
    }

}


