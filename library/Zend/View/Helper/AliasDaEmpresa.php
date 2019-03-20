<?php
/**
 * Classe para formatação de data
 */

class Zend_View_Helper_AliasDaEmpresa extends Zend_View_Helper_Abstract {

    public function AliasDaEmpresa($id_empresa) {
       $dbTableEmpresa = new Application_Model_DbTable_Empresa();
      $empresa =  $dbTableEmpresa->getEmpresaPorId($id_empresa);
      return $empresa->getAlias();
    }

}
