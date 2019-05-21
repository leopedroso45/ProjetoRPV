<?php

class Application_Model_DbTable_Trajeto extends Zend_Db_Table_Abstract
{

    protected $_name = 'trajeto';
    protected $_rowClass = "Application_Model_Trajeto";

<<<<<<< HEAD
    public function cadastrarTarifa($dados)
    {
        //var_dump($dados); die();
        $tarifa = $this->createRow();
        /* @var $paradaOnibus Application_Model_CategoriaOnibus */
        $tarifa->setValor($dados['valor']);
        $tarifa->setVigencia($dados['vigencia']);
        $tarifa->setSituacao(true);

        return $tarifa->save();
    }

    public function editarParadaOnibus($id, $dados)
    {
        //var_dump($id, $dados); die();
        $paradaOnibus = $this->find($id)->current();
        /* @var $paradaOnibus Application_Model_CategoriaOnibus */
        $paradaOnibus->setNumeroParada($dados['numeroParada']);
        $paradaOnibus->setLocal($dados['local']);
        $paradaOnibus->setComplemento($dados['complemento']);
        return $paradaOnibus->save();
    }

    public function listarTrajetos()
    {
        return $this->fetchAll();
    }

    public function getTrajetoPorId($id)
    {
        $select = $this->select()->where('id_trajeto = ?', $id);
        //var_dump($select->__toString());die();
        return $this->fetchRow($select);
    }

}
=======

    
    
    public function cadastrarTrajeto($dados)
    {
        $trajeto = $this->createRow();
        /*@var $trajeto Application_Model_trajeto*/
        
        $trajeto->setIdtrajetocobrador($dados['id_cobrador']); 
        $trajeto->setIdtrajetomotorista($dados['id_motorista']);
        $trajeto->setIdtrajetoonibus($dados['id_onibus_urbano']);     
        $trajeto->setDescricao($dados['descricao']);
        $trajeto->setNumparadas($dados['num_paradas']);
        $trajeto->setSituacao("ATIVO");
        
        return $trajeto->save();
    }


    public function listarTodosTrajetos1(){

    return $this->fetchAll();

    }

    public function listarTodosTrajetos()
    {
        $select = $this->select()->setIntegrityCheck(false);
        $select->from(array('TRAJ' => 'TRAJETO'), array('TRAJ.*'))
                ->from(array('MOT' => 'MOTORISTA'), array('MOT.NOME'))
                ->from(array('COB' => 'COBRADOR'), array('COB.nome'))
                ->from(array('ONI' => 'ONIBUS_URBANO'), array('ONI.PLACA'))
                
                ->where('TRAJ.ID_TRAJETOMOTORISTA = MOT.ID_MOTORISTA')
                ->where('TRAJ.ID_TRAJETOCOBRADOR = COB.ID_COBRADOR')
                ->where('TRAJ.ID_TRAJETOONIBUS = ONI.ID_ONIBUS_URBANO');
                
                
//        
        return $this->fetchAll($select);

       
    }

    public function listarTodasParadasPorTrajeto(){

        $select = $this->select()->setIntegrityCheck(false);
        $select->from(array('TRAJ' => 'TRAJETO'), array('TRAJ.id_trajeto'))
                ->from(array('PAR' => 'PARADA'), array('PAR.complemento'))
                ->from(array('PARTRAJ' => 'PARADA_TRAJETO'), array('PARTRAJ.*'))
                
                
                ->where('TRAJ.ID_TRAJETO = PARTRAJ.ID_TRAJETO')
                ->where('PAR.ID_PARADA = PARTRAJ.ID_PARADA');
               // ->where('TRAJ.ID_TRAJETO = ?', $id_trajeto);

               //var_dump($select->__toString());die();
                return $this->fetchAll($select);
    }





    public function getTrajetoPorId($id)
    {
        $select = $this->select()->where('id_trajeto = ?', $id);
        
        return $this->fetchRow($select);
    }

        public function editarAtivo($id, $dados)
    {
        $this->find($id)->current();
        $trajeto = $this->getTrajetoPorId($id);
        /* @var $viabilidade Application_Model_Viabilidade */

        if ($dados['ativo'] === 'ATIVO') {
            $trajeto->setSituacao('ATIVO');
        } elseif ($dados['ativo'] === 'INATIVO') {
            $trajeto->setSituacao('INATIVO');
        }

        return $trajeto->save();
    }
   
}
>>>>>>> 1b6c7b8954d13f6f2b603f2bd9f93127fb3395d5
