<?php

require __DIR__ ."/Vendor/autoload.php";

use App\CarrinhoCompra;
use App\Item;
use App\Pedido;
use App\EmailService;

$pedido = new Pedido();
//----------
$item1 = new Item();
$item2 = new Item();

$item1->setDescricao("porta Copos");
$item1->setValor(10);

$item2 -> setDescricao("");
$item2 -> setValor(20);
//----------
$pedido->getCarrinhoCompra()->adicionarItem($item1);


$pedido->getCarrinhoCompra()->adicionarItem($item2);

//---------
echo "<h4>Pedido</h4>";
echo "<pre>";
print_r($pedido);
echo "</pre>";
//------------

echo "<h4>Itens do Carrinho</h4>";

echo "<pre>";
print_r($pedido->getCarrinhoCompra()->getItens());
echo "</pre>";
//--------
echo "<h4>Valor do Pedido</h4>";

$total = 0;
foreach($pedido->getCarrinhoCompra()->getItens() as $key){
    $total += $key->getValor();
}
echo "<h4>Valor Total: R$ $total</h4>";