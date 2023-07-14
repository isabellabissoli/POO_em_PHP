<?php


require_once "src/CarrinhoCompra.php";
require_once "src/Item.php";
require_once "src/Pedido.php";
require_once "src/EmailServide.php";

echo '<h3>Com SRP</h3>';
$pedido = new Pedido();

$item1 = new Item();
$item2 = new Item();

$item1->setDescricao('Porta copo');
$item1->setValor(4.55);

$item2->setDescricao('Lampada');
$item1->setValor(8.32);

echo '<h4>Pedido</h4>';
echo'<pre>';
print_r($pedido);
echo'</pre>';

$pedido->getCarrinhoCompra()->adicionarItem($item1);
$pedido->getCarrinhoCompra()->adicionarItem($item2);

echo '<h4>Pedido com Itens</h4>';
echo'<pre>';
print_r($pedido);
echo'</pre>';

echo '<h4>Itens do Carrinho</h4>';
echo'<pre>';
print_r($pedido->getCarrinhoCompra()->getItens());
echo'</pre>';

echo '<h4>Valor do pedido</h4>';
$total = 0;
foreach($pedido->getCarrinhoCompra()->getItens() as $key => $item){
    $total += $item->getValor(); 
}
echo $total;

echo '<h4>Carrinho está válido?</h4>';
echo $pedido->getCarrinhoCompra()->validarCarrinho(); //Retor 1 ou 0

echo '<h4>Status do pedido</h4>';
echo $pedido->getStatus(); 

echo '<h4>Confirmar pedido</h4>';
echo $pedido->confirmar(); 

echo '<h4>Status do pedido</h4>';
echo $pedido->getStatus(); 

echo '<h4>E-mail</h4>';
if($pedido->getStatus() == 'confirmado'){
    echo EmailServide::dispararEmail();
}





// print_r($carrinho1->exibirItens());
// echo 'Valor Total: '. $carrinho1->exibirValorTotal();
// // $carrinho1->adicionarItem('Bicicleta',750.10);
// // $carrinho1->adicionarItem('Geladeira',1950.15);
// // $carrinho1->adicionarItem(  'Tapete',350.20);

// echo "<br />";
// print_r($carrinho1->exibirItens());
// echo "Valor Total: ". $carrinho1->exibirValorTotal();

// echo "<br />";
// echo 'status: '.$carrinho1->exibirStatus();


// echo "<br />";
// if($carrinho1->confirmarPedido()){
//     echo 'Pedido realizado com sucesso';
// } else {
//     echo 'Erro, carrinho não tem itens';
// }


// $carrinho1->confirmarPedido();
// echo "<br />";
// echo 'status: '.$carrinho1->exibirStatus();