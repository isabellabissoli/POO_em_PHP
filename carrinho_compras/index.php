<?php


require_once "src/CarrinhoCompra.php";

$carrinho1 = new CarrinhoCompra();

echo '<h3>Sem SRP</h3>';
print_r($carrinho1->exibirItens());
echo 'Valor Total: '. $carrinho1->exibirValorTotal();
// $carrinho1->adicionarItem('Bicicleta',750.10);
// $carrinho1->adicionarItem('Geladeira',1950.15);
// $carrinho1->adicionarItem('Tapete',350.20);

echo "<br />";
print_r($carrinho1->exibirItens());
echo "Valor Total: ". $carrinho1->exibirValorTotal();

echo "<br />";
echo 'status: '.$carrinho1->exibirStatus();


echo "<br />";
if($carrinho1->confirmarPedido()){
    echo 'Pedido realizado com sucesso';
} else {
    echo 'Erro, carrinho não tem itens';
}


$carrinho1->confirmarPedido();
echo "<br />";
echo 'status: '.$carrinho1->exibirStatus();