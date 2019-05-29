<?php

class Application_Model_Compra extends Zend_Db_Table_Row_Abstract
{

//        private $id_forma_pagamento;
//        private $valor;
//        private $seguro;

    function getId_forma_pagamento()
    {
        return $this->id_forma_pagamento;
    }

    function getValor()
    {
        return $this->valor;
    }

    function getSeguro()
    {
        return $this->seguro;
    }

    function setId_forma_pagamento($id_forma_pagamento)
    {
        $this->id_forma_pagamento = $id_forma_pagamento;
    }

    function setValor($valor)
    {
        $this->valor = $valor;
    }

    function setSeguro($seguro)
    {
        $this->seguro = $seguro;
    }

}
