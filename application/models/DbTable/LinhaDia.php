<?php

class Application_Model_DbTable_LinhaDia extends Zend_Db_Table_Abstract
{

    protected $_name = 'linha_horarios';
    protected $_rowClass = "Application_Model_LinhaDia";
    
    public function cadastrarLinhaDia($linha, $dia, $inicio, $motorista, $bus)
    {
        $linhadia = $this->createRow();
        
        $linhadia->setIdLinha($linha);
        $linhadia->setIdDia($dia);
        $linhadia->setIdMotorista($motorista);
        $linhadia->setIdOnibusViagem($bus);
        $linhadia->setHorarioInicio($inicio);
       



        
        return $linhadia->save();
    }
    
    
    
    // public function listarLinhaTrechos($id_linha){

    //     $adapter = new Zend_Db_Adapter_Pdo_Mysql(array(
    //         'driver' => 'pdo_mysql',
    //         'dbname' => 'controledefrota',
    //         'username' => 'root',
    //         'password' => '',
    //         'charset' => 'utf8'

            


    //     ));

    //     $stmt = $adapter->query(
    //         "select t.descricao, lt.tempo, l.descricao as desc_linha from trecho as t, linha_trecho as lt, linha as l where t.id_trecho = lt.id_trecho AND l.id_linha = lt.id_linha and l.id_linha = 2"

    //     );

    //     $rows = $stmt->fetchAll();

    //     return $rows;


        
    // }



    public function listarLinhasDiaPorId($dia, $linha, $hora){

        $adapter = new Zend_Db_Adapter_Pdo_Mysql(array(
            'driver' => 'pdo_mysql',
            'dbname' => 'controledefrota',
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8'

            


        ));

        $stmt = $adapter->query(
           "select l.descricao as descLinha, l.origem, l.tempo as tempoLinha, t.descricao as descTrecho, lt.tempo, lh.horario_inicio, d.descricao as dia 

                from trecho as t, linha as l, linha_trecho as lt, linha_horarios as lh, dia as d

                where l.id_linha = lt.id_linha AND
                    l.id_linha = lh.id_linha  AND
                    lh.id_dia = d.id_dia AND
                    t.id_trecho = lt.id_trecho AND
                    d.id_dia = ".$dia." AND                 
                    l.id_linha =".$linha." AND               
                    lh.horario_inicio = '".$hora."'"      



        );

        $rows = $stmt->fetchAll();

        return $rows;


        
    }


  // "select t.descricao, lt.tempo, l.descricao as desc_linha from trecho as t, linha_trecho as lt, linha as l where t.id_trecho = lt.id_trecho AND l.id_linha = lt.id_linha and l.id_linha = ".$id_linha.""


     // "select l.descricao as descLinha, l.origem, t.descricao as descTrecho, lt.tempo, lh.horario_inicio, d.descricao as dia 

     //    from trecho as t, linha as l, linha_trecho as lt, linha_horarios as lh, dia as d

     //        where l.id_linha = lt.id_linha AND
     //              l.id_linha = lh.id_linha  AND
     //              lh.id_dia = d.id_dia AND
     //              t.id_trecho = lt.id_trecho AND
     //              d.id_dia = ".$dia." AND                 
     //              l.id_linha =".$linha." AND               
     //              lh.horario_inicio = ".$hora.""
  
    public function listarTodasLinhasDia(){

        $adapter = new Zend_Db_Adapter_Pdo_Mysql(array(
            'driver' => 'pdo_mysql',
            'dbname' => 'controledefrota',
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8'

            


        ));

        $stmt = $adapter->query(
           "SELECT lh.*, l.descricao, l.origem, l.id_linha, lh.horario_inicio, d.id_dia, d.descricao as dia FROM linha as l, linha_horarios as lh, dia as d where lh.id_linha = l.id_linha AND lh.id_dia = d.id_dia"



        );

        $rows = $stmt->fetchAll();

        return $rows;

         

        return $this->fetchAll();

    }

}