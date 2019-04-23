<?php

class Application_Model_DbTable_Pessoa extends Zend_Db_Table_Abstract {

    protected $_name = 'pessoa';
    protected $_rowClass = "Application_Model_Pessoa";

    public function cadastrarPessoa($dados) {
        
        $pessoa = $this->createRow();
        /* @var $usuario Application_Model_Pessoa */
        $pessoa->setId_pessoa($dados['id_pessoa']);
        $pessoa->setId_usuario($dados['id_usuario']);
        $pessoa->setNome($dados['nome']);
        $pessoa->setCpf($dados['cpf']);
        $pessoa->setRg($dados['rg']);
        $pessoa->setNumero_casa($dados['numero_casa']);
        $pessoa->setData_nascimento($dados['data_nascimento']);
        $pessoa->setCelular($dados['celular']);
        $pessoa->setRua($dados['rua']);
        $pessoa->setBairro($dados['bairro']);

        return $usuario->save();
    }

//    
//    public function editarUsuario($id,$dados)
//    {
//        $usuario = $this->getUsuarioPorId($id);
//        /*@var $usuario Application_Model_Usuario*/
//        $usuario->setLogin($dados['login']);
//        $usuario->setSenha($dados['senha']);
//        
//        return $usuario->save();
//    }
//    
////        public function alterarCaminhoFoto($caminho, $id)
////    {
////        $select = $this->select()->where('cod_usuario = ?', $id);
////        $usuario = $this->fetchRow($select);
////        /* @var $usuario Application_Model_Usuario */
////        $usuario->setFoto($caminho);
////        
////        return $usuario->save();
////    }
//    
//     public function excluirUsuario($id) 
//   {
//        $select = $this->select()->where('cod_usuario = ?',$id);
//        $usuario =  $this->fetchRow($select);
//           return $usuario->delete();
//        
//   }
//    
//     public function listarTodosUsuario(){
//       return $this->fetchAll();
//    }
//    
//    public function getUsuarioPorId($id){
//        $select = $this->select()->where('cod_usuario = ?',$id);
//        return $this->fetchRow($select);
//    }
//    
//    public function getUsuarioPorLogin($login){
//        $select = $this->select()->where('login = ?',$login);
//        return $this->fetchRow($select);
//    }
}
