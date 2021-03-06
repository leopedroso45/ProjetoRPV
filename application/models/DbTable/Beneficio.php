<?php

class Application_Model_DbTable_Beneficio extends Zend_Db_Table_Abstract {

    protected $_name = 'solicitacaobeneficio';
    protected $_rowClass = "Application_Model_Beneficio";

    public function listarBeneficios() {
        return $this->fetchAll();
    }

    public function getBeneficioPorId($id) {
        $select = $this->select()->where('id_solicitacao = ?', $id);

        return $this->fetchRow($select);
    }

    public function editarBeneficios($id, $dados) {
//      var_dump($dados);die();
        $formularioCadastral = $this->find($id)->current();
        /* @var $formularioCadastral Application_Model_Beneficio */
        $formularioCadastral->setNome($dados['nome']);

        return $formularioCadastral->save();
    }

    public function editarSituacaoBeneficio($id, $dados) {
//      var_dump($dados);die();
        $formularioCadastral = $this->find($id)->current();
        /* @var $formularioCadastral Application_Model_Beneficio */
        $formularioCadastral->setNome($dados['nome']);

        return $formularioCadastral->save();
    }

    public function listarDeficiente() {
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
    
        public function listarDeficienteAprovado() {
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
                ->where('SIT.ID_SITUACAO = 1');

        //       var_dump($select->__toString());die();
//        o var_dump serve pra ti ver o resultado da instrução sql na página

        return $this->fetchAll($select);
    }
    
        public function listarDeficienteReprovado() {
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
                ->where('SIT.ID_SITUACAO = 2');

        //       var_dump($select->__toString());die();
//        o var_dump serve pra ti ver o resultado da instrução sql na página

        return $this->fetchAll($select);
    }
    
        public function listarDeficientePorCPF($cpf) {
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
                ->where("PESS.CPF = '$cpf'");

        //       var_dump($select->__toString());die();
//        o var_dump serve pra ti ver o resultado da instrução sql na página

        return $this->fetchAll($select);
    }

    public function listarIdoso() {
        $select = $this->select()->setIntegrityCheck(false);
        $select->from(array('BEN' => 'SOLICITACAOBENEFICIO'), array('BEN.*'))
                ->from(array('PESS' => 'PESSOA'), array('PESS.*'))
                ->from(array('USUA' => 'USUARIO'), array('USUA.*'))
                ->from(array('IDOSO' => 'IDOSO'), array('IDOSO.*'))
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
    
        public function listarIdosoAprovado() {
        $select = $this->select()->setIntegrityCheck(false);
        $select->from(array('BEN' => 'SOLICITACAOBENEFICIO'), array('BEN.*'))
                ->from(array('PESS' => 'PESSOA'), array('PESS.*'))
                ->from(array('USUA' => 'USUARIO'), array('USUA.*'))
                ->from(array('IDOSO' => 'IDOSO'), array('IDOSO.*'))
                ->from(array('SIT' => 'SOLICITACAO_SITUACAO'), array('SIT.*'))
                ->where('PESS.ID_USUARIO = USUA.ID_USUARIO')
                ->where('PESS.ID_PESSOA = BEN.IDF_PESSOA')
                ->where('PESS.ID_PESSOA = IDOSO.IDF_PESSOA')
                ->where('BEN.IDF_SITUACAO_SOLICITACAO = SIT.ID_SITUACAO')
                ->where('SIT.ID_SITUACAO = 1');

        //       var_dump($select->__toString());die();
//        o var_dump serve pra ti ver o resultado da instrução sql na página

        return $this->fetchAll($select);
    }
    
        public function listarIdosoReprovado() {
        $select = $this->select()->setIntegrityCheck(false);
        $select->from(array('BEN' => 'SOLICITACAOBENEFICIO'), array('BEN.*'))
                ->from(array('PESS' => 'PESSOA'), array('PESS.*'))
                ->from(array('USUA' => 'USUARIO'), array('USUA.*'))
                ->from(array('IDOSO' => 'IDOSO'), array('IDOSO.*'))
                ->from(array('SIT' => 'SOLICITACAO_SITUACAO'), array('SIT.*'))
                ->where('PESS.ID_USUARIO = USUA.ID_USUARIO')
                ->where('PESS.ID_PESSOA = BEN.IDF_PESSOA')
                ->where('PESS.ID_PESSOA = IDOSO.IDF_PESSOA')
                ->where('BEN.IDF_SITUACAO_SOLICITACAO = SIT.ID_SITUACAO')
                ->where('SIT.ID_SITUACAO = 2');

        //       var_dump($select->__toString());die();
//        o var_dump serve pra ti ver o resultado da instrução sql na página

        return $this->fetchAll($select);
    }
    
        public function listarIdosoPorCpf($cpf) {
        $select = $this->select()->setIntegrityCheck(false);
        $select->from(array('BEN' => 'SOLICITACAOBENEFICIO'), array('BEN.*'))
                ->from(array('PESS' => 'PESSOA'), array('PESS.*'))
                ->from(array('USUA' => 'USUARIO'), array('USUA.*'))
                ->from(array('IDOSO' => 'IDOSO'), array('IDOSO.*'))
                ->from(array('SIT' => 'SOLICITACAO_SITUACAO'), array('SIT.*'))
                ->where('PESS.ID_USUARIO = USUA.ID_USUARIO')
                ->where('PESS.ID_PESSOA = BEN.IDF_PESSOA')
                ->where('PESS.ID_PESSOA = IDOSO.IDF_PESSOA')
                ->where('BEN.IDF_SITUACAO_SOLICITACAO = SIT.ID_SITUACAO')
                ->where("PESS.CPF = '$cpf'");

        //       var_dump($select->__toString());die();
//        o var_dump serve pra ti ver o resultado da instrução sql na página

        return $this->fetchAll($select);
    }

    public function listarEstudantePorCPF($cpf) {
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
                ->where("PESS.CPF = '$cpf'");

        //       var_dump($select->__toString());die();
//        o var_dump serve pra ti ver o resultado da instrução sql na página

        return $this->fetchAll($select);
    }
    
    public function listarEstudante() {
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
        public function listarEstudanteAprovado() {
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
                ->where('SIT.ID_SITUACAO = 1');

        //       var_dump($select->__toString());die();
//        o var_dump serve pra ti ver o resultado da instrução sql na página

        return $this->fetchAll($select);
    }
    
        public function listarEstudanteReprovado() {
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
                ->where('SIT.ID_SITUACAO = 2');

        //       var_dump($select->__toString());die();
//        o var_dump serve pra ti ver o resultado da instrução sql na página

        return $this->fetchAll($select);
    }

    public function editarBeneficioAction($id, $dados) {
        $this->find($id)->current();
        $beneficio = $this->getBeneficioPorId($id);
        /* @var $beneficio Application_Model_Beneficio */

        if ($dados['beneficio'] === 'nenhum') {
            $beneficio->setSituacao('nenhum');
        } elseif ($dados['beneficio'] === 'meiaPassagem') {
            $beneficio->setSituacao('meiaPassagem');
        } elseif ($dados['beneficio'] === 'isencao') {
            $beneficio->setSituacao('isencao');
        }
        return $beneficio->save();
    }

    public function cadastrarSolicitacaoBeneficioAction($dados, $idf_pessoa, $idf_situacao_solicitacao) {

        $beneficio = $this->createRow();
        
        
        $beneficio->setData_solicitacao($dados['data_solicitacao']);
        $beneficio->setIdf_situacao_solicitacao($idf_situacao_solicitacao);
        $beneficio->setIdf_pessoa($idf_pessoa);

        return $beneficio->save();
    }

}
