<?php


class Arquivo {
    private $dados = array();

    public function setDados(string $nome, string $cpf, string $email): void{
        array_push($this->dados, ['nome'=>iconv('iso-8859-1','utf-8',$nome),'cpf'=>$cpf,'email'=>$email]); //O incov serve para tirar caracteres indesejados do nome e traduzir para utf-8
    }

    public function getDados(): array{
        return $this->dados;
    }


}