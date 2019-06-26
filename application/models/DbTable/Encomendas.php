<?php

class Application_Model_DbTable_Encomendas extends Zend_Db_Table_Abstract {

    protected $_name = 'transporte_encomendas';
    protected $_rowClass = "Application_Model_Encomendas";

    public function cadastrarEncomendas($dados) {
        $encomendas = $this->createRow();
        
        $encomendas->setNomeProduto($dados['nomeProduto']);
        $encomendas->setAltura($dados['altura']);
        $encomendas->setLargura($dados['largura']);
        $encomendas->setComprimento($dados['comprimento']);
        $encomendas->setPeso($dados['peso']);
        $encomendas->setNomeRemetente($dados['nomeRemetente']);
        $encomendas->setCpfRemetente($dados['cpfRemetente']);
        $encomendas->setRuaRemetente($dados['ruaRemetente']);
        $encomendas->setNumeroRemetente($dados['numeroRemetente']);
        $encomendas->setBairroRemetente($dados['bairroRemetente']);
        $encomendas->setCepRemetente($dados['cepRemetente']);
        $encomendas->setUfRemetente($dados['ufRemetente']);
        $encomendas->setCelularRemetente($dados['celularRemetente']);
        $encomendas->setNomeDestinatario($dados['nomeDestinatario']);
        $encomendas->setCpfDestinatario($dados['cpfDestinatario']);
        $encomendas->setRuaDestinatario($dados['ruaDestinatario']);
        $encomendas->setNumeroDestinatario($dados['numeroDestinatario']);
        $encomendas->setBairroDestinatario($dados['bairroDestinatario']);
        $encomendas->setCepDestinatario($dados['cepDestinatario']);
        $encomendas->setUfDestinatario($dados['ufDestinatario']);
        $encomendas->setCelularDestinatario($dados['celularDestinatario']);

        return $encomendas->save();
    }

    public function listarEncomendas() {
        return $this->fetchAll();
    }

    public function getEncomendaPorId($id) {
        $select = $this->select()->where('id_produto = ?', $id);

        return $this->fetchRow($select);
    }
    
        public function editar($id, $dados)
    {
        $encomendas = $this->find($id)->current();
        /* @var $onibusUrbano Application_Model_OnibusUrbano */
        $encomendas->setNomeProduto($dados['nomeProduto']);
        $encomendas->setAltura($dados['altura']);
        $encomendas->setLargura($dados['largura']);
        $encomendas->setComprimento($dados['comprimento']);
        $encomendas->setPeso($dados['peso']);
        $encomendas->setNomeRemetente($dados['nomeRemetente']);
        $encomendas->setCpfRemetente($dados['cpfRemetente']);
        $encomendas->setRuaRemetente($dados['ruaRemetente']);
        $encomendas->setNumeroRemetente($dados['numeroRemetente']);
        $encomendas->setBairroRemetente($dados['bairroRemetente']);
        $encomendas->setCepRemetente($dados['cepRemetente']);
        $encomendas->setUfRemetente($dados['ufRemetente']);
        $encomendas->setCelularRemetente($dados['celularRemetente']);
        $encomendas->setNomeDestinatario($dados['nomeDestinatario']);
        $encomendas->setCpfDestinatario($dados['cpfDestinatario']);
        $encomendas->setRuaDestinatario($dados['ruaDestinatario']);
        $encomendas->setNumeroDestinatario($dados['numeroDestinatario']);
        $encomendas->setBairroDestinatario($dados['bairroDestinatario']);
        $encomendas->setCepDestinatario($dados['cepDestinatario']);
        $encomendas->setUfDestinatario($dados['ufDestinatario']);
        $encomendas->setCelularDestinatario($dados['celularDestinatario']);

        return $encomendas->save();
    }

}
