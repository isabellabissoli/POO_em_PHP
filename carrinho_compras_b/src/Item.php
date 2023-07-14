<?php

Class Item{
    private $descricao;
    private $valor;

    function __construct(){
        $this->descricao ='';
        $this->valor =0;
    }

    public function getDescricao(){
        return $this->descricao;
    }
    public function getValor(){
        return $this->valor;
    }
    public function setDescricao(string $descricao){
        $this->descricao = $descricao;
    }
    public function setValor(string $valor){
        $this->valor = $valor;
    }

    public function iteValido(){
        if($this->valor <= 0){
            return false;
        }
        return true;
    }

}