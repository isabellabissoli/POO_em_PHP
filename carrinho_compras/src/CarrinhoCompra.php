<?php

class CarrinhoCompra {

    //atributos
    private $itens; //Declarar que é um array
    private $status;
    private $valorTotal;

    //matódos
    function __construct(){ //Assim que cria construtores
        $this->itens = [];
        $this->status = "aberto";
        $this->valorTotal = 0;
   
    }

    public function exibirItens(){
        return $this->itens;
    }

    public function itemValido(string $item, float $valor){
        if($item == ''){
            return false;
        }
        if($valor <= 0){
            return false;
        }
        return true;
    }

    public function adicionarItem(string $item,float $valor){
        if($this->itemValido($item,$valor)){
            array_push($this->itens, ["item" => $item,"valor" =>$valor]);//Array de arrays
            $this->valorTotal += $valor;
            return true;
        }
        return false;
    }

    public function exibirValorTotal(){
        return $this->valorTotal;
    }

    public function exibirStatus(){
        return $this->status;
    }

    public function confirmarPedido(){
        if($this->validarCarrinho()){ //Se carrinho tiver coisas vai fazer a validação
            $this->status = 'confirmado';
            $this->enviarEmailConfirmacao();
            return true;
        }
    }

    public function enviarEmailConfirmacao(){
        echo '<br/>...envia e-mail de confirmação...<br/>';
    }

    public function validarCarrinho(){
        return count($this->itens) > 0;
    }
}