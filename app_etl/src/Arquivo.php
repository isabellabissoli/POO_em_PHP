<?php

require_once 'Leitor.php';
class Arquivo {
    private $dados = array();

    public function setDados(string $nome, string $cpf, string $email): void{
        array_push($this->dados, ['nome'=>iconv('iso-8859-1','utf-8',$nome),'cpf'=>$cpf,'email'=>$email]); //O incov serve para tirar caracteres indesejados do nome e traduzir para utf-8
    }

    public function getDados(): array{
        return $this->dados;
    }


    public function lerArquivoCSV(string $caminho){
        
        $handle = fopen($caminho,'r');

        while(($linha = fgetcsv($handle,1000,';')) !== false) { //O primeiro argumento é  abaertura do arquivo, o segundo é quantas linhas irá ler e o terceiro é o delimitador
            $this->setDados($linha[0],$linha[1],$linha[2]);
        }
        fclose($handle);
    }   
    
    
    public function lerArquivoTXT(string $caminho){
        
        $handle = fopen($caminho,'r');

        while(!feof($handle)) { 
            
            $linha = fgets($handle); //O ponteiro interno de leitura do arquivo é incrementado
            $this->setDados(substr($linha,11,30), //nome
            substr($linha,0,11), //cpf
            substr($linha,41,50)); //email
        };
        fclose($handle);
    }   
    
    public function lerArquivoXLSX(string $caminho){
        
        //Implementar código
    }   
}