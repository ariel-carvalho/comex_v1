<?php

use Ariel\Comex\DAO\ProdutoDAO;

include __DIR__ ."/../../vendor/autoload.php";
$pdo = include __DIR__ ."/../Config/pdo.php";

$produtoDao = new ProdutoDAO($pdo);

$produtoDao->salvar($_POST ['nome'], $_POST ['preco'], $_POST ['qtd_Estoque']);
