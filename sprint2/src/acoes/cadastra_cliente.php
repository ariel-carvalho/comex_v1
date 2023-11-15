<?php

use Ariel\Comex\DAO\ClienteDAO;

include __DIR__ ."/../../vendor/autoload.php";
$pdo = include __DIR__ ."/../Config/pdo.php";

$clienteDao = new ClienteDAO($pdo);

$clienteDao->salvar($_POST ['nome'], $_POST ['email'], $_POST ['celular'], $_POST ['endereco']);

