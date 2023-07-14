<?php
require_once 'extrator/Arquivo.php';
require_once 'extrator/Txt.php';
require_once 'extrator/Csv.php';

class Leitor {
    private $diretorio;
    private $arquivo;

    public function getDiretorio(): string{
        return $this->diretorio;
    }

    public function getArquivo(): string{
        return $this->arquivo;
    }

    public function setDiretorio(string $diretorio){
        $this->diretorio = $diretorio;
    }

    public function setArquivo(string $arquivo){
        $this->arquivo = $arquivo;
    }

    public function lerArquivo(){
        $caminho = $this->getDiretorio().'/'.$this->getArquivo();
        $extensao = explode(".",$this->getArquivo());

        $classe = ucfirst($extensao[1]); //Deixa a primeira letra maiuscula

        return call_user_func_array( //Essa função recebe dois arrays, tendo o primeiro passando a classe e o segundo os metodos
            [
               new $classe,
               'lerArquivo' 
            ],
            [$caminho]
        );
     
    }
}