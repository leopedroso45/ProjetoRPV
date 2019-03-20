<?php

/**
 * View Helper para implementação da CDN(Content Delivery Network)
 *
 * @author Rafael T. Amorim
 * @author dextervip@hotmail.com
 */
class Zend_View_Helper_CDN extends Zend_View_Helper_Abstract {
    
    /**
     * Array com lista de CDN's disponiveis
     * @var Array 
     */
    protected static $_networks;
    /**
     * Variavel para rotação entre as CDN's
     * @var integer 
     */
    protected static $_rotate = 0;
    
    
    /**
     * Troca lista de CDN's
     * @param array $networks 
     */
    public static function setNetworks(Array $networks) {
        self::$_networks = $networks;
    }
    /**
     * Retorna URL com a CDN
     * @param string $url
     * @return string 
     */
    public function CDN($url) {
        if (is_array(self::$_networks) === true || empty(self::$_networks) === false):
            $cdn_url = self::$_networks[self::$_rotate] . DIRECTORY_SEPARATOR . $this->view->baseUrl($url);
            $cdn_url = stripslashes($cdn_url);
            self::$_rotate++;
            if (self::$_rotate == sizeof(self::$_networks)):
                self::$_rotate = 0;
            endif;
        else:
            $cdn_url = $this->view->baseUrl($url);
        endif;
        return $cdn_url;
    }

}

