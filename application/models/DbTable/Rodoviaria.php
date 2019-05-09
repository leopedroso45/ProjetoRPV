<?php

class Application_Model_DbTable_Rodoviaria extends Zend_Db_Table_Abstract {

    protected $_name = 'rodoviaria';
    protected $_rowClass = "Application_Model_Rodoviaria";

    public function cadastrarRodoviaria($dados) {

        $rodoviaria = $this->createRow();
        /* @var $estudante Application_Model_Rodoviaria */
        $rodoviaria->setNome($dados['nome']);
        $rodoviaria->setCidade($dados['cidade']);
        $rodoviaria->setEstado($dados['estado']);
        $rodoviaria->setResponsavel($dados['responsavel']);
        $rodoviaria->setData_inicio($dados['data_inicio']);
        $rodoviaria->setStatus_rodoviaria("ATIVO");

        return $rodoviaria->save();
    }

    public function listarTodasRodoviarias() {
        return $this->fetchAll();
    }

    public function editarStatus($id, $dados) {
        $this->find($id)->current();
        $rodoviaria = $this->getRodoviariaPorId($id);
        /* @var $viabilidade Application_Model_Viabilidade */

        if ($dados['status'] === 'ATIVO') {
            $rodoviaria->setStatus_rodoviaria('ATIVO');
        } elseif ($dados['status'] === 'INATIVO') {
            $rodoviaria->setStatus_rodoviaria('INATIVO');
        }
        return $rodoviaria->save();
    }

    public function getRodoviariaPorId($id) {
        $select = $this->select()->where('codRodoviaria = ?', $id);

        return $this->fetchRow($select);
    }

    public function listarRodoviariaAtiva() {
        $select = $this->select()->setIntegrityCheck(false);
        $select->from(array('ROD' => 'RODOVIARIA'), array('ROD.*'))
                ->where("ROD.STATUS_RODOVIARIA = 'ATIVO'");

//        var_dump($select->__toString());
//        die();

        return $this->fetchAll($select);
    }

    public function listarRodoviariaInativa() {
        $select = $this->select()->setIntegrityCheck(false);
        $select->from(array('ROD' => 'RODOVIARIA'), array('ROD.*'))
                ->where("ROD.STATUS_RODOVIARIA = 'INATIVO'");
        return $this->fetchAll($select);
    }

    public function listarRodoviariaPorCidade($cidade) {
        $select = $this->select()->setIntegrityCheck(false);
        $select->from(array('ROD' => 'RODOVIARIA'), array('ROD.*'))
                ->where("ROD.CIDADE = '$cidade'");
        return $this->fetchAll($select);
    }

}
