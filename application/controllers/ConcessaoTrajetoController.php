<?php

class ConcessaoTrajetoController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
			if ($this->getRequest()->isPost()) {
			$dados = $this->getRequest()->getParams(); 
//var_dump($dados);die();			
			$dbTableConcessao_Trajeto = new Application_Model_DbTable_Concessao_Trajeto();
			$dbTableConcessao_Trajeto->cadastrarConcessao($dados);            
	}
    }

    public function cadastrarAction()
    {



    }

    public function editarAction()
    {
        $this->view->headScript()->appendFile($this->view->baseUrl('bootstrap/js/janela-de-dialogo.js'));
        
        $this->view->message = '';
        $id = $this->getRequest()->getParam('id');
        $formulario = new Application_Form_UsuarioEditar();
        $dbTableUsuario = new Application_Model_DbTable_Usuario();
        $usuario = $dbTableUsuario->getUsuarioPorId($id);
        $formulario->populate($usuario->toArray());
        if ($this->getRequest()->isPost()) {
            if ($formulario->isValid($_POST)) {
                $dados = $this->getRequest()->getParams();
                $cod = $dbTableUsuario->editarUsuario($id, $dados);
                $upload = new Zend_File_Transfer();
                $foto = $upload->getFileInfo();
                @$foto['cod_usuario'] = $cod;
                $uploadfile = $_FILES['foto']['name'];
                if ($uploadfile != '') {
                    $modelImagem = new Application_Model_Imagem();
                    $modelImagem->setCaminhoTemp($foto['foto']['tmp_name']);
                    $modelImagem->setIdentidade(Zend_Auth::getInstance()->getIdentity());
                    $caminho = $modelImagem->moverFotoDaUsuarioCadastrada($foto);
                    $dbTableUsuario->alterarCaminhoFoto($caminho, $cod);
                }
                if ($cod != NULL) {
                    $this->view->message = "Os dados foram alterados!";
                } else {
                    $this->view->message = "Não foi possível efetuar o cadastro!";
                }
            }
        }
        $this->view->formulario = $formulario;
    }

    public function excluirAction()
    {
        $id = $this->getRequest()->getParam('id');
        $usuario = new Application_Model_DbTable_Usuario();
        $numero = $usuario->excluirUsuario($id);
        if ($numero > 0) {
            $this->_helper->json(array('ok'));
        } else {
            $this->_helper->json(array('nok'));
        }
    }

}