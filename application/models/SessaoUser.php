<?php

class Application_Model_SessaoUser extends Zend_Db_Table_Row_Abstract
{

    private $sessionUser;

    function __construct()
    {
        $this->sessionUser = new Zend_Session_Namespace('EmpreendedorMEI');
    }

    public function getSession()
    {
        return $this->sessionUser->dadosUser;
    }

    public function inserirDados($dados)
    {
        $this->sessionUser->unsetAll();
        $this->sessionUser->dadosUser = $dados;
    }

}
