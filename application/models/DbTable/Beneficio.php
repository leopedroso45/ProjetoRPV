<?php

class Application_Model_DbTable_Beneficio extends Zend_Db_Table_Abstract
{

    protected $_name = 'solicitacaobeneficio';
    protected $_name1 = 'pessoa';
    protected $_rowClass = "Application_Model_Beneficio";
    
    
    public function listarBeneficios(){
       return $this->fetchAll();
    }
    public function listarDadosPessoa(){
       return $this->fetchAll();
    }

        public function getBeneficioPorId($id)
    {
        $select = $this->select()->where('id_solicitacao = ?', $id);

        return $this->fetchRow($select);
    }

       public function editarBeneficios($id, $dados)
    {
//      var_dump($dados);die();
        $formularioCadastral = $this->find($id)->current();
        /* @var $formularioCadastral Application_Model_Formulario */
        $formularioCadastral->setNome($dados['nome']);

        return $formularioCadastral->save();
    }


    public function listar()
    {
        $select = $this->select()->setIntegrityCheck(false);
        $select->from(array('BEN' => 'SOLICITACAOBENEFICIO'), array('BEN.*'))
                ->from(array('PESS' => 'PESSOA'), array('PESS.*'))
                ->from(array('USUA' => 'USUARIO'), array('USUA.*'))
                ->where('PESS.ID_USUARIO = USUA.ID_USUARIO')
                ->where('PESS.ID_PESSOA = BEN.IDF_PESSOA');

 //       var_dump($select->__toString());die();
//        o var_dump serve pra ti ver o resultado da instrução sql na página

        return $this->fetchAll($select);
    }

    /* 
    public function editarUsuario($id,$dados)
    {
        $usuario = $this->getUsuarioPorId($id);
        @var $usuario Application_Model_Usuario
        $usuario->setLogin($dados['login']);
        $usuario->setSenha($dados['senha']);
        
        return $usuario->save();
    }
    public function getUsuarioPorId($id){
        $select = $this->select()->where('cod_usuario = ?',$id);
        return $this->fetchRow($select);
    }
    
    public function getUsuarioPorLogin($login){
        $select = $this->select()->where('login = ?',$login);
        return $this->fetchRow($select);
    }
    */
}