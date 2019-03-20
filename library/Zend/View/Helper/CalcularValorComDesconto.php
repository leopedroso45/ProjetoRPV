<?php
/**
 * View Helper para calcular valor com desconto
 */
class Zend_View_Helper_CalcularValorComDesconto extends Zend_View_Helper_Abstract {
    
    /**
     * Calcula valor com desconto
     * @param string $valor valor
     * @param string $desconto desconto
     * @param string $locale local
     * @return string Moeda formatada no local 
     */
    public function CalcularValorComDesconto($valor, $desconto, $locale = 'pt_BR')
    {
        $valorDesconto = ($desconto/100) * $valor;
        $valorDescontado = $valor - $valorDesconto;
        $currency = new Zend_Currency($locale);
        $currency->add($valorDescontado);
        return $currency->getValue();
    }
}
