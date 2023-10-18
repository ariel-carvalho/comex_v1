<?php

require_once "src/Cliente.php";

$cliente1 = new Cliente("Ariel","ariell_carvalho@hotmail.com","(11) 94714-0300", "Rua Marquês de Praia Grande, 285",0);

echo $cliente1->getNome() . PHP_EOL;
echo $cliente1->getEmail() . PHP_EOL;
echo $cliente1->getCelular() . PHP_EOL;
echo $cliente1->getEndereco() . PHP_EOL;
