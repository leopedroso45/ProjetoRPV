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
        $listaLinhasDia= $dbTableLinhaDia->listarTodasLinhasDia();
        $this->view->listaDasLinhasDia = $listaLinhasDia;

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

            


           $dbTableLinhaDia = new Application_Model_DbTable_LinhaDia();


            $dados = $this->getRequest()->getParams();
            
                
             $linha = $dados['id_linha'];
             $dia = explode(',', $dados['dia']);
             $inicio = explode(',', $dados['inicio']);
             $motorista = explode(',', $dados['motorista']);
             $bus = explode(',', $dados['bus']);

             //var_dump($inicio);die();

            for ($i = 0; $i < sizeof($dia); $i++) {
                 $dbTableLinhaDia->cadastrarLinhaDia($linha, $dia[$i], $inicio[$i], $motorista[$i], $bus[$i]);
             }
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


public function linhadiasAction()
    {
         $dbTableLinhaDia = new Application_Model_DbTable_LinhaDia();
          
            $id = $this->getRequest()->getParams();
            //var_dump($id);die();
           // int $iid = $id;
            $dia = $id['id_dia'];
            $linha = $id['id_linha'];
            $hora = $id['inicio'];
            //var_dump($hora);die();
            
            $listaLinhastrechos = $dbTableLinhaDia->listarLinhasDiaPorId($dia, $linha, $hora);
        


            $this->view->listaDasLinhash = $listaLinhastrechos; 

     

       
    }

}


