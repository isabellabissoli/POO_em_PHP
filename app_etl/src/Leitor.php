<?php
require_once 'Arquivo.php';

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
        
        $arquivo = new Arquivo();

        $extensao = explode(".",$this->getArquivo());

        if($extensao[1] == 'csv'){
            $arquivo->lerArquivoCSV($caminho);
        } else if ($extensao[1] =='txt'){
            $arquivo->lerArquivoTXT($caminho);
        }  else if ($extensao[1] =='xlsx'){
            $arquivo->lerArquivoXLSX($caminho);
        }

        return $arquivo->getDados();
    }
}