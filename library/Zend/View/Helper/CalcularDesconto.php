<?php
/**
 * View Helper para calcular valor de desconto
 */
class Zend_View_Helper_CalcularDesconto extends Zend_View_Helper_Abstract {
    
    /**
     * Calcula valor de desconto
     * @param string $valor valor
     * @param string $desconto desconto
     * @param string $locale local
     * @return string Moeda formatada no local 
     */
    public function CalcularDesconto($valor, $desconto, $locale = 'pt_BR')
    {
        $valorDesconto = ($desconto/100) * $valor;
        $currency = new Zend_Currency($locale);
        $currency->add($valorDesconto);
        return $currency->getValue();
    }
}
