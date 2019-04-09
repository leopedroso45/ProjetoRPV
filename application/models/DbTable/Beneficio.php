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


    public function listarDeficiente()
    {
        $select = $this->select()->setIntegrityCheck(false);
        $select->from(array('BEN' => 'SOLICITACAOBENEFICIO'), array('BEN.*'))
                ->from(array('PESS' => 'PESSOA'), array('PESS.*'))
                ->from(array('USUA' => 'USUARIO'), array('USUA.*'))
                ->from(array('DEF' => 'PESSOA_COM_DEFICIENCIA'), array('DEF.*'))
                ->from(array('SIT' => 'SOLICITACAO_SITUACAO'), array('SIT.*'))                
                ->where('PESS.ID_USUARIO = USUA.ID_USUARIO')
                ->where('PESS.ID_PESSOA = BEN.IDF_PESSOA')
                ->where('PESS.ID_PESSOA = DEF.IDF_PESSOA')
                ->where('BEN.IDF_SITUACAO_SOLICITACAO = SIT.ID_SITUACAO')
                ->where('SIT.ID_SITUACAO = 0');

 //       var_dump($select->__toString());die();
//        o var_dump serve pra ti ver o resultado da instrução sql na página

        return $this->fetchAll($select);
    }
    
    public function listarIdoso()
    {
        $select = $this->select()->setIntegrityCheck(false);
        $select->from(array('BEN' => 'SOLICITACAOBENEFICIO'), array('BEN.*'))
                ->from(array('PESS' => 'PESSOA'), array('PESS.*'))
                ->from(array('USUA' => 'USUARIO'), array('USUA.*'))
                ->from(array('IDOSO' => 'PESSOA_IDOSA'), array('IDOSO.*'))
                ->from(array('SIT' => 'SOLICITACAO_SITUACAO'), array('SIT.*'))                
                ->where('PESS.ID_USUARIO = USUA.ID_USUARIO')
                ->where('PESS.ID_PESSOA = BEN.IDF_PESSOA')
                ->where('PESS.ID_PESSOA = IDOSO.IDF_PESSOA')
                ->where('BEN.IDF_SITUACAO_SOLICITACAO = SIT.ID_SITUACAO')
                ->where('SIT.ID_SITUACAO = 0');

 //       var_dump($select->__toString());die();
//        o var_dump serve pra ti ver o resultado da instrução sql na página

        return $this->fetchAll($select);
    }
    
    public function listarEstudante()
    {
        $select = $this->select()->setIntegrityCheck(false);
        $select->from(array('BEN' => 'SOLICITACAOBENEFICIO'), array('BEN.*'))
                ->from(array('PESS' => 'PESSOA'), array('PESS.*'))
                ->from(array('USUA' => 'USUARIO'), array('USUA.*'))
                ->from(array('EST' => 'ESTUDANTE'), array('EST.*'))
                ->from(array('SIT' => 'SOLICITACAO_SITUACAO'), array('SIT.*'))                
                ->where('PESS.ID_USUARIO = USUA.ID_USUARIO')
                ->where('PESS.ID_PESSOA = BEN.IDF_PESSOA')
                ->where('PESS.ID_PESSOA = EST.IDF_PESSOA')
                ->where('BEN.IDF_SITUACAO_SOLICITACAO = SIT.ID_SITUACAO')
                ->where('SIT.ID_SITUACAO = 0');

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