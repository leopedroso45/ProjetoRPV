<?php

class Application_Model_DbTable_Linha extends Zend_Db_Table_Abstract
{

    protected $_name = 'linha';
    protected $_rowClass = "Application_Model_Linha";

    public function cadastrarLinha($dados)
    {
        $linha = $this->createRow();

        $linha->setDescricao($dados['descricao']);
        $linha->setNumTrechos($dados['num_trechos']);
        $linha->setSituacao("ATIVO");

        // atualização
        $linha->setOrigem($dados['inicio']);
        $linha->setTempo($dados['tempoTotall']);
        $linha->setKm($dados['kmtotal']);
        // implementar

        return $linha->save();
    }

    public function listarTodasLinhasAtivas()
    {
        $select = $this->select()->setIntegrityCheck(false);
        $select->from(array('LH' => 'LINHA_HORARIOS'), array('LH.*'))
                ->from(array('L' => 'LINHA'), array('L.DESCRICAO', 'L.id_linha', 'L.KM'))
                ->from(array('O' => 'ONIBUS_VIAGEM'), array('O.*'))
                ->from(array('T' => 'tarifa_intermunicipal'), array('T.*'))
                ->from(array('C' => 'categoria_onibus'), array('C.*'))
                ->where('LH.ID_ONIBUS_VIAGEM = O.ID_ONIBUS_VIAGEM')
                ->where('LH.ID_LINHA = L.ID_LINHA')
                ->where('C.ID_CATEGORIA_ONIBUS = O.ID_CATEGORIA_ONIBUS')
                ->where('T.ID_CATEGORIA_ONIBUS = O.ID_CATEGORIA_ONIBUS');

//               var_dump($select->__toString());die();
        return $this->fetchAll($select);
    }

    public function listarTodosLinhas1()
    {

        return $this->fetchAll();
    }

    public function listarTodasLinhas()
    {
        // implementar



        return $this->fetchAll();
    }

    public function getlinhaPorId($id)
    {
        $select = $this->select()->where('id_linha = ?', $id);

        return $this->fetchRow($select);
    }

    public function editarAtivo($id, $dados)
    {
        $this->find($id)->current();
        $linha = $this->getlinhaPorId($id);
        /* @var $viabilidade Application_Model_Viabilidade */

        if ($dados['ativo'] === 'ATIVO') {
            $linha->setSituacao('ATIVO');
        } elseif ($dados['ativo'] === 'INATIVO') {
            $linha->setSituacao('INATIVO');
        }

        return $linha->save();
    }

}
