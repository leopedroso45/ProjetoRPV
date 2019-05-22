<?php

class IndexController extends Zend_Controller_Action
{

    public function init()
    {
        $this->_helper->layout->setLayout('layout_login');
    }

    public function indexAction()
    {

        $authAdapter = Zend_Auth::getInstance();
        $authAdapter->clearIdentity();

        if ($this->getRequest()->isPost()) {
            $dados = $this->_request->getPost();
//            var_dump($dados);
            $db = Zend_Db_Table::getDefaultAdapter();
            $authAdapter = new Zend_Auth_Adapter_DbTable($db, 'usuario', 'nome_usuario', 'senha', 'id_perfil');

            $authAdapter->setIdentity($dados['nome_usuario']);
            $authAdapter->setCredential($dados['senha']);
            $result = $authAdapter->authenticate();

            if ($result->isValid()) {
                $auth = Zend_Auth::getInstance();
                $storage = $auth->getStorage();
                $storage->write($authAdapter->getResultRowObject(array('id_usuario', 'nome_usuario', 'senha', 'id_perfil')));
            } else {

                $this->view->error = "Usuário ou senha incorreta!";
            }
        }


        $auth = Zend_Auth::getInstance();

        if ($auth->hasIdentity()) {
            $identity = $auth->getIdentity();
//            var_dump($identity);die();
            $modelUsuario = new Application_Model_DbTable_Usuario();
            $usuario = $modelUsuario->getUsuarioPorLogin($dados['nome_usuario']);
            $modelSessaoUsuario = new Application_Model_SessaoUser();
            $modelSessaoUsuario->inserirDados($usuario);

            if ($usuario->getId_perfil() === '1') {
                $this->_redirect('/admin-local');
            }
            if ($usuario->getId_perfil() === '2') {
                $this->_redirect('/admin-geral');
            }
            if ($usuario->getId_perfil() === '3') {
                $this->_redirect('/admin-secretario');
            }
            if ($usuario->getId_perfil() === '4') {
                $this->_redirect('/admin-rh');
            }
            if ($usuario->getId_perfil() === '5') {
                $this->_redirect('/admin-vendedor');
            }
        }
    }

}
