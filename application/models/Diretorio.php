<?php

/**
 * Model Utilizada Para Configuracoes Relacionadas a Diretorios
 */
class Application_Model_Diretorio
{

    /**
     * @param type $diretorio  Caminho onde sera criado o novo registro
     * @param type $id Nome que sera atribuido ao novo diretorio do cadastro
     * @return boolean True se for criado ou False sem sucesso
     */
    public function criarDir($id, $diretorio)
    {
        if (!is_dir(PUBLIC_PATH . '/' . $diretorio)) {
            mkdir(PUBLIC_PATH . '/' . $diretorio, 0700);
            return mkdir(PUBLIC_PATH . '/' . $diretorio . '/' . $id, 0700);
        } else {
            if (!is_dir(PUBLIC_PATH . '/' . $diretorio . '/' . $id)) {
                return mkdir(PUBLIC_PATH . '/' . $diretorio . '/' . $id, 0775);
            }
            return false;
        }
    }

    public function criarDiretorioSimples($caminho, $diretorio)
    {
        if (!is_dir(PUBLIC_PATH . '/' . $caminho . '/' . $diretorio)) {
            return mkdir(PUBLIC_PATH . '/' . $caminho . '/' . $diretorio, 0700);
        } else {
            return false;
        }
    }

}