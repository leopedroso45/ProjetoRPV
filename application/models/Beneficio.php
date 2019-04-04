<?php

class Application_Model_Beneficio extends Zend_Db_Table_Row_Abstract
{
    
//        private $id_solicitacao;
//        private $data_solicitacao;
//        private $idf_situacao_solicitacao;
//        private $idf_pessoa;			
        
        function getId_solicitacao()
        {
            return $this->id_solicitacao;
        }
        

        function getData_solicitacao()
        {
            return $this->data_solicitacao;
        }

        
        function getIdf_situacao_solicitacao()
        {
            return $this->idf_situacao_solicitacao;
        }


        function getIdf_pessoa()
        {
            return $this->idf_pessoa;
        }
        



    

    


   

}