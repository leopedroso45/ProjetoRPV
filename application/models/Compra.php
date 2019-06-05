<?php

class Application_Model_Compra extends Zend_Db_Table_Row_Abstract
{

//    private $horario_inicio;
//    private $id_dia;
//    private $id_usuario;
//    private $id_linha;
//    private $id_forma_pagamento;
//    private $valor;
//    private $seguro;
//    private $passageiro;
//    private $passagem;
//    private $data;
    
    function getHorario_inicio()
    {
        return $this->horario_inicio;
    }

    function getId_dia()
    {
        return $this->id_dia;
    }

    function getId_usuario()
    {
        return $this->id_usuario;
    }

    function getId_linha()
    {
        return $this->id_linha;
    }

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

    function getPassageiro()
    {
        return $this->passageiro;
    }

    function getPassagem()
    {
        return $this->passagem;
    }

    function getData()
    {
        return $this->data;
    }

    function setHorario_inicio($horario_inicio)
    {
        $this->horario_inicio = $horario_inicio;
    }

    function setId_dia($id_dia)
    {
        $this->id_dia = $id_dia;
    }

    function setId_usuario($id_usuario)
    {
        $this->id_usuario = $id_usuario;
    }

    function setId_linha($id_linha)
    {
        $this->id_linha = $id_linha;
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

    function setPassageiro($passageiro)
    {
        $this->passageiro = $passageiro;
    }

    function setPassagem($passagem)
    {
        $this->passagem = $passagem;
    }

    function setData($data)
    {
        $this->data = $data;
    }


}
