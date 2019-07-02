<?php

class TarifaMunicipalController extends Zend_Controller_Action
{

    public function init()
    {
        $this->_helper->layout->setLayout('layout_admin_local');
        $this->view->headScript()->appendFile($this->view->baseUrl('dist/js/script.js'));
        $this->view->headScript()->appendFile($this->view->baseUrl('dist/js/mask.js'));
        $this->view->headScript()->appendFile($this->view->baseUrl('dist/js/moment.js'));

        $this->view->headScript()->appendFile($this->view->baseUrl('dist/js/tarifa-municipal.js'));
        
    }

    public function indexAction()
    {

        $dbTableTrajeto = new Application_Model_DbTable_Trajeto();

        $dbTableTarifa = new Application_Model_DbTable_TarifaMunicipal();
        $listaTarifas = $dbTableTarifa->listarTodastarifasm();
        $this->view->listaDasTarifas = $listaTarifas;

        $listaTrajetos = $dbTableTrajeto->listarTodosTrajetos1();
        $this->view->listaDosTrajetos = $listaTrajetos;

        if ($this->getRequest()->isPost()) {

            $dados = $this->getRequest()->getParams();
            $excessao = false;
            //var_dump($listaTarifas);die();
            if (empty($listaTarifas)) {

                    $dbTableTarifa->cadastrarTarifaMunicipal($dados);
                }else{
                        foreach ($listaTarifas as $aux) {   // tentando implementar validação comparando datas de tarifas ja cadastradas com a nova.
                

                            $inicioNova = Date($dados['iniciox']);
                            $fimBanco = Date($aux['data_fim']);
                            if  ($aux['id_trajeto'] === $dados['id_trajeto']  && strtotime($inicioNova) <= strtotime($fimBanco)) {

                                $excessao = true;

                            }         

                        }

                        if (!$excessao) {
                                $dbTableTarifa->cadastrarTarifaMunicipal($dados);

                        }else{
                                $dbTableTarifa->cadastrarTarifaMunicipal("");

                            }   

                    }    

        }

    }













}


