<?php

require_once "src/Cliente.php";
require_once "src/Produto.php";

$cliente1 = new Cliente("Ariel","ariell_carvalho@hotmail.com","(11) 94714-0300", "Rua Marquês de Praia Grande, 285",0);

echo $cliente1->getNome() . PHP_EOL;
echo $cliente1->getEmail() . PHP_EOL;
echo $cliente1->getCelular() . PHP_EOL;
echo $cliente1->getEndereco() . PHP_EOL;

$produto1 = new Produto("camiseta", 50.00, 10);
$produto2 = new Produto("calça", 80.00, 6);
$produto3 = new Produto("meia", 10.00, 20);
$produto4 = new Produto("tenis", 200.00, 4);

echo Produto::valorTotalProdutos() . PHP_EOL;