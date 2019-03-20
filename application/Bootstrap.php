<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
    protected function _initPlugins() {
     $frontController = Zend_Controller_Front::getInstance();
     $frontController->registerPlugin(new Sistema_Acl());
     
    }

      public function _initResources() {
        $this->bootstrap('view');
        $this->bootstrap('db');
    }

}

