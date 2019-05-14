<?php

class LinhaDiaController extends Zend_Controller_Action
{

    public function init()
    {
        $this->_helper->layout->setLayout('layout_admin_local');
        $this->view->headScript()->appendFile($this->view->baseUrl('dist/js/script.js'));
        $this->view->headScript()->appendFile($this->view->baseUrl('dist/js/linhaDia.js'));
        $this->view->headScript()->appendFile($this->view->baseUrl('dist/js/moment.js'));
    }

    public function indexAction()
    {

        $dbTableLinhaDia = new Application_Model_DbTable_LinhaDia();

        $dbTableMotorista = new Application_Model_DbTable_Motorista();
        $listaMotoristas= $dbTableMotorista->listarTodosMotoristas();
        $this->view->listaDosMotoristas = $listaMotoristas;

        $dbTableOnibusViagem = new Application_Model_DbTable_OnibusIntermunicipal();
        $listaOnibus= $dbTableOnibusViagem->listarTodosOnibusIntermunicipais();
        $this->view->listaDosOnibus = $listaOnibus;

        $dbTableLinha = new Application_Model_DbTable_Linha();
        $listaLinhas= $dbTableLinha->listarTodasLinhas();
        $this->view->listaDasLinhas = $listaLinhas;


        if ($this->getRequest()->isPost()) {

            


           $dados = $this->getRequest()->getParams();

           $dbTableLinha->cadastrarLinhaDia($dados);

           

           
           $this->view->linhaDia = $dados;

       }




       $listaLinhasDia = $dbTableLinhaDia->listarTodasLinhasDia(); // implementar
       $this->view->listaDasLinhasDia = $listaLinhasDia;






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


// public function linhatrechosAction()
// {
//    $dbTableLinhaTrecho = new Application_Model_DbTable_LinhaTrecho();
//    $xx = 2;
//    $id = $this->getRequest()->getParam('id');
//             //var_dump($id);die();
//            // int $iid = $id;

//    $listaLinhastrechos = $dbTableLinhaTrecho->listarTrechosPorId($id);
//             //var_dump($listaLinhastrechos);
//    $this->view->listaDasLinhast = $listaLinhastrechos; 




// }

}


