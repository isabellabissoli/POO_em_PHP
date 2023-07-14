<?php
require_once 'CarrinhoCompra.php';

Class Pedido{
    private $status;
    private $carrinhoCompra;
    private $valorPedido;

    function __construct(){
        $this->status = 'aberto';
        $this->carrinhoCompra = new CarrinhoCompra();
        $this->valorPedido = 0;
    }

    public function getCarrinhoCompra(){
        return $this->carrinhoCompra;
    }

    public function getStatus(){
        return $this->status;
    }
    public function setStatus(string $status){
       $this->status = $status;
    }

    public function confirmar(){
        if($this->carrinhoCompra->validarCarrinho()){
            $this->setStatus('cofirmado');
            return true;
        }
        return false;
    }

}