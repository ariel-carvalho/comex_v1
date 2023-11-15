<?php

use Ariel\Comex\DAO\ProdutoDAO;

include __DIR__ ."/../../vendor/autoload.php";
$pdo = include __DIR__ ."/../Config/pdo.php";

$produtoDao = new ProdutoDAO($pdo);
