<?php

class Application_Model_Pdf {

    private $caminhoTemp1;
    private $caminhoTemp2;
    private $caminhoTemp3;
    private $caminhoDestino;
    private $novoNomeImagem;
    private $identidade;

    public function moverComprovanteMatricula($comprovanteMatricula) {
        $modelDiretorio = new Application_Model_Diretorio();
        $id_estudante = $comprovanteMatricula['id_estudante'];

        $modelDiretorio->criarDir($id_estudante, 'comprovantes_matriculas');
        $this->setCaminhoDestino(PUBLIC_PATH . '/comprovantes_matriculas/' . $id_estudante . '/' . $comprovanteMatricula['$comprovanteMatricula']['name']);
        $bool = move_uploaded_file($this->getCaminhoTemp1(), $this->getCaminhoDestino());

//        print_r($bool);
        if ($bool) {
            $date = new DateTime();
            $nome = $date->getTimestamp();
            $boolRename = rename(PUBLIC_PATH . '/comprovantes_matriculas/' . $id_estudante . '/' . $comprovanteMatricula['comprovanteMatricula']['name'], PUBLIC_PATH . '/comprovantes_matriculas/' . $id_estudante . '/' . $nome . '.pdf');

            if ($boolRename) {
                return '/comprovantes_matriculas/' . $id_estudante . '/' . $nome . '.pdf';
            } else {
                return NULL;
            }
        } else {
            return NULL;
        }
    }

    public function getCaminhoTemp1() {
        return $this->caminhoTemp1;
    }

    public function setCaminhoTemp1($caminhoTemp1) {
        $this->caminhoTemp1 = $caminhoTemp1;
    }

    public function getCaminhoTemp2() {
        return $this->caminhoTemp2;
    }

    public function setCaminhoTemp2($caminhoTemp2) {
        $this->caminhoTemp2 = $caminhoTemp2;
    }

    public function getCaminhoTemp3() {
        return $this->caminhoTemp3;
    }

    public function setCaminhoTemp3($caminhoTemp3) {
        $this->caminhoTemp3 = $caminhoTemp3;
    }

    public function getCaminhoDestino() {
        return $this->caminhoDestino;
    }

    public function setCaminhoDestino($caminhoDestino) {
        $this->caminhoDestino = $caminhoDestino;
    }

    public function getNovoNomeImagem() {
        return $this->novoNomeImagem;
    }

    public function setNovoNomeImagem($novoNomeImagem) {
        $this->novoNomeImagem = $novoNomeImagem;
    }

    public function getIdentidade() {
        return $this->identidade;
    }

    public function setIdentidade($identidade) {
        $this->identidade = $identidade;
    }

//    public function moverAlvaraSanitario($alvara_sanitario)
//    {
//        $modelDiretorio = new Application_Model_Diretorio();
//        $id_formulario = $alvara_sanitario['id_formulario_cadastral'];
//
//        $modelDiretorio->criarDir($id_formulario, 'alvaras_sanitarios');
//        $this->setCaminhoDestino(PUBLIC_PATH . '/alvaras_sanitarios/' . $id_formulario . '/' . $alvara_sanitario['alvara_sanitario']['name']);
//        $bool = move_uploaded_file($this->getCaminhoTemp2(), $this->getCaminhoDestino());
//
//        if ($bool) {
//            $date = new DateTime();
//            $nome = $date->getTimestamp();
//            $boolRename = rename(PUBLIC_PATH . '/alvaras_sanitarios/' . $id_formulario . '/' . $alvara_sanitario['alvara_sanitario']['name'], PUBLIC_PATH . '/alvaras_sanitarios/' . $id_formulario . '/' . $nome . '.pdf');
//
//            if ($boolRename) {
//                return '/alvaras_sanitarios/' . $id_formulario . '/' . $nome . '.pdf';
//            } else {
//                return NULL;
//            }
//        } else {
//            return NULL;
//        }
//    }
}
