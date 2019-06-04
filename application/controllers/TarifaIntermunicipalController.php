<?php

class TarifaIntermunicipalController extends Zend_Controller_Action
{

    public function init()
    {
        $this->_helper->layout->setLayout('layout_admin_geral');
        $this->view->headScript()->appendFile($this->view->baseUrl('dist/js/script.js'));
        $this->view->headScript()->appendFile($this->view->baseUrl('dist/js/mask.js'));
        $this->view->headScript()->appendFile($this->view->baseUrl('dist/js/moment.js'));

        $this->view->headScript()->appendFile($this->view->baseUrl('dist/js/tarifa-intermunicipal.js'));
        
    }

    public function indexAction()
    {

        $dbTableCategoria = new Application_Model_DbTable_CategoriaOnibus();

        $dbTableTarifa = new Application_Model_DbTable_TarifaIntermunicipal();
        $listaTarifas = $dbTableTarifa->listarTodasTarifas();
        $this->view->listaDasTarifas = $listaTarifas;

        $listaCategorias = $dbTableCategoria->listarCategoriaOnibus();
        $this->view->listaDasCategorias = $listaCategorias;

        if ($this->getRequest()->isPost()) {

            $dados = $this->getRequest()->getParams();
            $excessao = false;
            if (empty($listaTarifas)) {

                    $dbTableTarifa->cadastrarTarifaIntermunicipal($dados);
                }else{
                        foreach ($listaTarifas as $aux) {   // tentando implementar validação comparando datas de tarifas ja cadastradas com a nova.
                

                            $inicioNova = Date($dados['iniciox']);
                            $fimBanco = Date($aux['data_fim']);
                            if  ($aux['id_categoria_onibus'] === $dados['id_categoria']  && strtotime($inicioNova) <= strtotime($fimBanco)) {

                                $excessao = true;

                            }         

                        }

                        if (!$excessao) {
                                $dbTableTarifa->cadastrarTarifaIntermunicipal($dados);

                        }else{
                                $dbTableTarifa->cadastrarTarifaIntermunicipal("");

                            }   

                    }    

        }

    }













}


