<?php

class Sistema_Acl extends Zend_Controller_Plugin_Abstract
{
    public function preDispatch(Zend_Controller_Request_Abstract $request)
    {
//        $front = Zend_Controller_Front::getInstance();
//        if ($front->getDispatcher()->isDispatchable($request)) {
//
//            $acl = new Zend_Acl();
//            $acl->addRole(new Zend_Acl_Role('administrador'));
//            
//            $acl->addRole(new Zend_Acl_Role('admin'));
//            $acl->add(new Zend_Acl_Resource('index'));
//            $acl->add(new Zend_Acl_Resource('error'));
//
//            $acl->allow('administrador', 'index');
//            $acl->allow('administrador', 'login-admin');
//            $acl->allow('administrador', 'admin');
//            $acl->allow('administrador', 'error');
//
//            $acl->allow(null, 'login-admin', array('logar', 'acesso-negado', 'sair'));
//            $acl->allow(null, 'error');
//            $acl->allow(null, 'index');
//
//            $auth = Zend_Auth::getInstance();
//            if ($auth->hasIdentity()) {
//                $identity = $auth->getIdentity();
//                $DbTableTipoUsuario = new Application_Model_DbTable_TipoUsuario();
//                $tipoPessoa = $DbTableTipoUsuario->getTipoUsuarioPorId($identity->cod_tipo_usuario);
//                $role = $tipoPessoa->getDescricao();
//            } else {
//                $role = null;
//            }
//            $controller = $request->controller;
//            $action = $request->action;
//            if (!$acl->isAllowed($role, $controller, $action)) {
//                if ($role == null) {
//                    $request->setControllerName('index');
//                    $request->setActionName('index');
//                } else {
//                    $request->setControllerName('login');
//                    $request->setActionName('acesso-negado');
//                }
//            } else { 
//            }
//        } else {
//            $request->setControllerName('error');
//            $request->setActionName('url-nao-encontrada');
//        }
    }
}