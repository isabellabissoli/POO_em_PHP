<?php

class Csv extends Arquivo{

    
    public function lerArquivo(string $caminho): array{
        
        $handle = fopen($caminho,'r');

        while(($linha = fgetcsv($handle,1000,';')) !== false) { //O primeiro argumento é  abaertura do arquivo, o segundo é quantas linhas irá ler e o terceiro é o delimitador
            $this->setDados($linha[0],$linha[1],$linha[2]);
        }
        fclose($handle);
        return $this->getDados();
    }   
    
}