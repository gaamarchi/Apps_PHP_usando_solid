<?php

require __DIR__ ."/Vendor/autoload.php";

use App\CarrinhoCompra;

$carrinho = new CarrinhoCompra(); // Criando objeto do tipo carrinho de compras

$carrinho->adicionarItem('bala', 10.0);
$carrinho->adicionarItem('geladeira', 1000.39);

echo "status: ".$carrinho->exibirStatus();
echo "<br/>";
print_r($carrinho->exibirItens()); // Deve imprimir um array com os itens adicionados
echo "<br/>";
print_r($carrinho->exibirValorTotal());  // Deve imprimir 30.0
echo "<br/>";

if($carrinho->confirmarPedido()){
    echo "pedido realizado com sucesso";
}
echo "status: ".$carrinho->exibirStatus();
