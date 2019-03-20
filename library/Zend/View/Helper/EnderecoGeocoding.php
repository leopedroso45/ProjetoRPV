<?php
/**
 * Classe para formatação de data
 */

class Zend_View_Helper_EnderecoGeocoding extends Zend_View_Helper_Abstract {

    public function EnderecoGeocoding($id_empresa) {
      $dbTableEmpresa = new Application_Model_DbTable_Empresa();
      $empresa =  $dbTableEmpresa->getEmpresaPorId($id_empresa);
      $modelCidade = new Application_Model_DbTable_Cidade();
      $cidade = $modelCidade->getCidadePorId($empresa->getId_cidade());
      $modelEstado = new Application_Model_DbTable_Estado();
      $estado = $modelEstado->getEstadoPorId($cidade->getId_estado());
      return $cidade->getNome().'+'.$estado->getNome();
    }

}
