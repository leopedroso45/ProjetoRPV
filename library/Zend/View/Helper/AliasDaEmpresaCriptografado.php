<?php
/**
 * Classe para formatação de data
 */

class Zend_View_Helper_AliasDaEmpresaCriptografado extends Zend_View_Helper_Abstract {

    public function AliasDaEmpresaCriptografado($id_empresa) {
      $dbTableEmpresa = new Application_Model_DbTable_Empresa();
      $empresa =  $dbTableEmpresa->getEmpresaPorId($id_empresa);
      return  $empresa->getAlias();
      
    }

}
