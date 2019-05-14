<?php

class LinhaController extends Zend_Controller_Action
{

    public function init()
    {
        $this->_helper->layout->setLayout('layout_admin_local');
        $this->view->headScript()->appendFile($this->view->baseUrl('dist/js/script.js'));
        $this->view->headScript()->appendFile($this->view->baseUrl('dist/js/linha.js'));
        
    }

    public function indexAction()
    {
       // implementar
    }

    public function editarAtivoAction()
    {
}
