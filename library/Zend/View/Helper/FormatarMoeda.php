<?php
/**
 * View Helper para formatação de Moeda
 */
class Zend_View_Helper_FormatarMoeda extends Zend_View_Helper_Abstract {
    
    /**
     * Realiza a formatação da Moeda
     * @param string $valor valor
     * @param string $locale local
     * @return string Moeda formatada no local 
     */
    public function FormatarMoeda($valor)
    {
        $currency = new Zend_Currency();
        $currency->add($valor);
        return $currency->toCurrency();
    }
}
