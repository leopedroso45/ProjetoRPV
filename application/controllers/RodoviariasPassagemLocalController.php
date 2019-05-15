<?php

class RodoviariasPassagemLocalController extends Zend_Controller_Action
{

    public function init()
    {
        $this->_helper->layout->setLayout("layout_admin_geral");
        $this->view->headScript()->appendFile($this->view->baseUrl('dist/js/script.js'));
        $this->view->headScript()->appendFile($this->view->baseUrl('dist/js/cadastroRodoviaria.js'));
        $this->view->headScript()->appendFile($this->view->baseUrl('dist/js/cadastrosGeral.js'));
        $this->view->headScript()->appendFile($this->view->baseUrl('dist/js/moment.js'));
        $this->view->headScript()->appendFile($this->view->baseUrl('dist/js/pt-br.js'));
    }

    public function indexAction()
    {

        $dbtableRodoviaria = new Application_Model_DbTable_Rodoviaria();
        $listaRodoviaria = $dbtableRodoviaria->listarTodasRodoviarias();
        $this->view->listarTodasRodoviarias = $listaRodoviaria;

        if ($this->getRequest()->isPost()) {
            $dados = $this->getRequest()->getParams();
            $dbtableRodoviaria = new Application_Model_DbTable_Rodoviaria();
            $dbtableRodoviaria->cadastrarRodoviaria($dados);
        } else if ($this->getRequest()->isGet()) {
            $dados = $this->getRequest()->getParams();
            @$cidade = $dados['cidade'];
            if (@$dados['tipo'] == '1') {
                $listaRodoviaria = $dbtableRodoviaria->listarRodoviariaAtiva();
                $this->view->listarTodasRodoviarias = $listaRodoviaria;
            } else if (@$dados['tipo'] == '2') {
                $listaRodoviaria = $dbtableRodoviaria->listarRodoviariaInativa();
                $this->view->listarTodasRodoviarias = $listaRodoviaria;
            } else if (isset($cidade)) {
                $listaRodoviaria = $dbtableRodoviaria->listarRodoviariaPorCidade($cidade);
                $this->view->listarTodasRodoviarias = $listaRodoviaria;
            }
        } else {
            $listaRodoviaria = $dbtableRodoviaria->$listaRodoviaria();
            $this->view->listarTodasRodoviarias = $listaRodoviaria;
        }
    }

    public function editarStatusAction()
    {
        $id = $this->getRequest()->getParam('id');

        $dbTableRodoviaria = new Application_Model_DbTable_Rodoviaria();
        $rodoviaria = $dbTableRodoviaria->getRodoviariaPorId($id);

        if ($this->getRequest()->isPost()) {
            $dados = $this->getRequest()->getParams();
//var_dump($dados); die();
            $dbTableRodoviaria->editarStatus($id, $dados);
        }
        $this->view->rodoviaria = $rodoviaria;
    }

}
