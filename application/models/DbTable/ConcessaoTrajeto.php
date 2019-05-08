<?php

class Application_Model_DbTable_ConcessaoTrajeto extends Zend_Db_Table_Abstract {

    protected $_name = 'concessaotrajeto';
    protected $_rowClass = "Application_Model_ConcessaoTrajeto";

    public function cadastrarConcessaoTrajeto($dados) {

//        var_dump($dados);die();
        $concessaoTrajeto = $this->createRow();
        /* @var $concessaoTrajeto Application_Model_ConcessaoTrajeto */
        $concessaoTrajeto->setNome($dados['nome']);
        $concessaoTrajeto->setExtensao($dados['extensao']);
        $concessaoTrajeto->setData_inicio($dados['dataInicio']);
        $concessaoTrajeto->setData_fim($dados['dataFim']);
        $concessaoTrajeto->setDoc_autorizacao($dados['docAutorizacao']);
        $concessaoTrajeto->setStatus_concessao("ATIVO");

        return $concessaoTrajeto->save();
    }

    public function listarTodasConcessoes() {
        return $this->fetchAll();
    }

    public function editarStatus($id, $dados) {
        $this->find($id)->current();
        $concessaoTrajeto = $this->getConcessaoTrajetoPorId($id);
        /* @var $viabilidade Application_Model_Viabilidade */

        if ($dados['status'] === 'ATIVO') {
            $concessaoTrajeto->setStatus_concessao('ATIVO');
        } elseif ($dados['status'] === 'INATIVO') {
            $concessaoTrajeto->setStatus_concessao('INATIVO');
        }
        return $concessaoTrajeto->save();
    }

    public function getConcessaoTrajetoPorId($id) {
        $select = $this->select()->where('codConcessao = ?', $id);

        return $this->fetchRow($select);
    }

}
