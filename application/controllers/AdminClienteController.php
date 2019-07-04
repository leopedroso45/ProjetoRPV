<?php

class AdminClienteController extends Zend_Controller_Action
{

    public function init()
    {
        $this->_helper->layout->setLayout('layout_admin_cliente');
        $this->view->headScript()->appendFile($this->view->baseUrl('dist/js/script.js'));
        $this->view->headScript()->appendFile($this->view->baseUrl('dist/js/datedropper.js'));
        $this->view->headScript()->appendFile($this->view->baseUrl('dist/js/compra.js'));
    }

    public function indexAction()
    {
        
        $dbTableCompra = new Application_Model_DbTable_Compra();
        $listaCompra = $dbTableCompra->getComprasPorIdUsuario(Zend_Auth::getInstance()->getIdentity()->id_usuario);
        $this->view->listaDasCompras = $listaCompra;
    }

    public function buscarAction()
    {
        $dbTableLinha = new Application_Model_DbTable_Linha();
        $listaLinha = $dbTableLinha->listarTodasCidades();
        $this->view->listaDasOrigens = $listaLinha;

        $listaLinhaHorario = $dbTableLinha->listarTodasLinhasAtivas();
        $this->view->listarLinhaHorarios = $listaLinhaHorario;

        if ($this->getRequest()->isPost()) {
            $dados = $this->getRequest()->getParams();
            $listaLinha = $dbTableLinha->listarLinhaHorariosPor($dados);
            $this->view->listarLinhaHorarios = $listaLinha;
        }
    }

    public function cadastrarAction()
    {
        $dadosLinha = $this->getRequest()->getParam('id');
        $linha_horario = explode(',', $dadosLinha);

        $dbTableLinhaHorario = new Application_Model_DbTable_Linha();
        $linhahorario = $dbTableLinhaHorario->listarLinhaHorario($linha_horario);
        $this->view->linhaHorario = $linhahorario;

        $dbTableCompra = new Application_Model_DbTable_Compra();
        $listaCompras = $dbTableCompra->listarCompras();
        $this->view->listaDasCompras = $listaCompras;

        $dbTableLinha = new Application_Model_DbTable_Linha();
        $listaLinha = $dbTableLinha->listarTodasLinhasAtivas();
        $this->view->listaDasLinhas = $listaLinha;

        $dbTableFormaPagamento = new Application_Model_DbTable_FormaPagamento();
        $listaFormaPagamento = $dbTableFormaPagamento->listarFormasDePagamentoAtivas();
        $this->view->listaDasFormasDePagamentos = $listaFormaPagamento;

        if ($this->getRequest()->isPost()) {
            $dados = $this->getRequest()->getParams();
//            var_dump($dados);die();
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

    public function visualizarAction()
    {
        $id = $this->getRequest()->getParam('id');
        $dbTableCompra = new Application_Model_DbTable_Compra();
        $listaPoltronaPorIdCompra = $dbTableCompra->listarPoltronasPorIdCompra($id);
        $this->view->listarPoltronasPorIdCompra = $listaPoltronaPorIdCompra;

        $compraPorIdCompra = $dbTableCompra->getComprasPorId($id);
        $this->view->compraPorId = $compraPorIdCompra;
    }

    public function sairAction()
    {
        $sessionUsuario = new Application_Model_SessaoUser();
        $usuario = $sessionUsuario->getSession();

        $authAdapter = Zend_Auth::getInstance();
        $authAdapter->clearIdentity();

        $this->_redirect('/index');
    }

}
