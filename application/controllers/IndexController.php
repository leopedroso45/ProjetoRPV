<?php

class IndexController extends Zend_Controller_Action {

    public function init() 
   {
       $this->_helper->layout->setLayout('layout');

   }

     public function indexAction()
    {
//        $this->view->headScript()->appendFile($this->view->baseUrl('woothemes-FlexSlider-ca347d4/jquery.flexslider.js'));
//        $this->view->headScript()->appendFile($this->view->baseUrl('woothemes-FlexSlider-ca347d4/js/script.js'));
//        
//        $dbTableAula = new Application_Model_DbTable_Aula();
//        $lista = $dbTableAula->listarTodasAulas();
//        $this->view->listaDasAulas = $lista;
//        
//        $dbTableAluno = new Application_Model_DbTable_Aluno();
//        $alunos = $dbTableAluno->listarTodosAlunos();
//        $this->view->listaDosAlunos = $alunos;
//        
//        $authAdapter = Zend_Auth::getInstance();
//        $authAdapter->clearIdentity();
//        $login = new Application_Form_Login();
//
//        if ($this->getRequest()->isPost()) {
//            if ($login->isValid($_POST)) {
//                   $dados = $login->getValues();
//               
//                   $db = Zend_Db_Table::getDefaultAdapter();
//
//                   $authAdapter = new Zend_Auth_Adapter_DbTable(
//                                $db,
//                                'usuario',
//                                'login',
//                                'senha');
//
//                $authAdapter->setIdentity($dados['login']);
//                $authAdapter->setCredential(sha1($dados['senha']));
//
//                $result = $authAdapter->authenticate();
//                if ($result->isValid()) {
//
//                    $auth = Zend_Auth::getInstance();
//                    $storage = $auth->getStorage();
//                    $storage->write($authAdapter->getResultRowObject(array('cod_usuario', 'cod_aluno', 'login','cod_tipo_usuario', 'foto')));
//                } else {
//
//                    $this->view->error = "Usuário ou senha incorreta!";
//                }
//            }
//        }
//
//        $auth = Zend_Auth::getInstance();
//       
//        if ($auth->hasIdentity())
//       {
//            $identity = $auth->getIdentity();
////            var_dump($identity);die();
//                $modelUsuario = new Application_Model_DbTable_Usuario();
//                $usuario = $modelUsuario->getUsuarioPorLogin($dados['login']);
//                $modelSessaoUsuario = new Application_Model_SessaoUser();
//                $modelSessaoUsuario->inserirDados($usuario);
//            if($usuario->getCod_tipoUsuario()== 1){
//                $this->_redirect('/admin-instrutor');      
//            }
//            if($usuario->getCod_tipoUsuario()== 2){
//                $this->_redirect('/admin');
//            }
//            if($usuario->getCod_tipoUsuario()== 3){
//                $this->_redirect('/admin-aluno');
//            }
//}
//
//        $this->view->login = $login;
    }

}
