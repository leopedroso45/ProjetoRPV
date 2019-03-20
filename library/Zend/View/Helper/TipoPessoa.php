<?php
/**
 * Classe para formatação de data
 */

class Zend_View_Helper_TipoPessoa extends Zend_View_Helper_Abstract {

    public function TipoPessoa($id_tipo_pessoa) {
       $dbTableTipo = new Application_Model_DbTable_TipoPessoa();
      $tipo =  $dbTableTipo->getTipoPorId($id_tipo_pessoa);
      return $tipo->getDescricao();
    }

}
