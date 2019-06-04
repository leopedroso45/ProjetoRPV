<?php

class CompraController extends Zend_Controller_Action
{

    public function init()
    {
        $this->_helper->layout->setLayout('layout_vendedor');
        $this->view->headScript()->appendFile($this->view->baseUrl('dist/js/script.js'));
        $this->view->headScript()->appendFile($this->view->baseUrl('dist/js/datedropper.js'));
        $this->view->headScript()->appendFile($this->view->baseUrl('dist/js/jquery.dataTables.min.js'));
        $this->view->headScript()->appendFile($this->view->baseUrl('dist/js/dataTables.bootstrap.min.js'));
        $this->view->headScript()->appendFile($this->view->baseUrl('dist/js/script-dataTables.js'));
        $this->view->headScript()->appendFile($this->view->baseUrl('dist/js/compra.js'));
    }

    public function indexAction()
    {
        $dbTableLinha = new Application_Model_DbTable_Linha();
        $listaLinha = $dbTableLinha->listarTodasLinhasAtivas();
        $this->view->listaDasLinhas = $listaLinha;

        $dbTableFormaPagamento = new Application_Model_DbTable_FormaPagamento();
        $listaFormaPagamento = $dbTableFormaPagamento->listarFormasDePagamentoAtivas();
        $this->view->listaDasFormasDePagamentos = $listaFormaPagamento;

        if ($this->getRequest()->isPost()) {
            $dados = $this->getRequest()->getParams();
//            $poltrona = explode(',', $dados['id_poltrona']);
//            var_dump($dados['id_forma_pagamento']);die();
            $dbTableCompra = new Application_Model_DbTable_Compra();
            $id_compra = $dbTableCompra->cadastrarCompra($dados);


            for ($i = 0; $i < sizeof($dados['id_poltrona']); $i++) {

                if ($dados['id_forma_pagamento'] === '1') {
                    $dbTableCompraDebito = new Application_Model_DbTable_CompraDebito();
                    $dbTableCompraDebito->cadastrarCompraDebito($id_compra, $dados['id_poltrona'][$i]);
                }
                if ($dados['id_forma_pagamento'] === '2') {
                    $dbTableCompraCredito = new Application_Model_DbTable_CompraCredito();
                    $dbTableCompraCredito->cadastrarCompraCredito($id_compra, $dados['id_poltrona'][$i]);
                }
                if ($dados['id_forma_pagamento'] === '3') {
                    $dbTableCompraAVista = new Application_Model_DbTable_CompraAVista();
                    $dbTableCompraAVista->cadastrarCompraAVista($id_compra, $dados['id_poltrona'][$i]);
                }
                if ($dados['id_forma_pagamento'] === '4') {
                    $dbTableCompraPontos = new Application_Model_DbTable_CompraPontos();
                    $dbTableCompraPontos->cadastrarCompraPontos($id_compra, $dados['id_poltrona'][$i]);
                }
            }
        }
    }

}
