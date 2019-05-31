<?php

class TarifaIntermunicipalController extends Zend_Controller_Action
{

    public function init()
    {
        $this->_helper->layout->setLayout('layout_admin_local');
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

            foreach ($listaTarifas as $aux) {   // tentando implementar validação comparando datas de tarifas ja cadastradas com a nova.

                // if ($aux['data_fim'] === "") {
                    
                // }
                
            }

            $dbTableTarifa->cadastrarTarifaIntermunicipal($dados);



         }

        
           
       
        
        }

        



       
    

    




}


