<?php
/**
 * Classe para formatação de data
 */

class Zend_View_Helper_NomeDaEmpresa extends Zend_View_Helper_Abstract {

    public function NomeDaEmpresa($id_empresa) {
       $dbTableEmpresa = new Application_Model_DbTable_Empresa();
      $empresa =  $dbTableEmpresa->getEmpresaPorId($id_empresa);
      return $empresa->getNome_fantasia();
    }

}
