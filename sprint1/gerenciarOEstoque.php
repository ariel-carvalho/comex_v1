<?php

$produtos =
[
    [
        "nome" => "camiseta",
        "preco" => 50.00,
        "estoque" => 2
    ],        
    [
        "nome" => "calca",
        "preco" => 80.00,
        "estoque" => 2
    ],
        [
        "nome" => "meia",
        "preco" => 10.00,
        "estoque" => 2
    ],
        [
        "nome" => "tenis",
        "preco" => 200.00,
        "estoque" => 2
    ]
];
 
function adcionaProduto($produtos, $qtdeAdcionada)
{
    $produtos["estoque"] += $qtdeAdcionada;
    return $produtos;
}
function removeProduto($produtos, $qtdeRemovida)
{
    if($produtos["estoque"] >= $qtdeRemovida)
    {
        $produtos["estoque"] -= $qtdeRemovida;
    }
    else
    {
        echo "não há essa quantidade de " . $produtos["nome"] . " em estoque" . PHP_EOL;
    }    
    return $produtos;
}

function disponibilidadeDeProduto($produtos)
{
    echo "O produto " . $produtos["nome"], ", possui " .  $produtos["estoque"] . " unidade(s) em estoque" . PHP_EOL;
    return $produtos;
}

$produtos[0] = adcionaProduto($produtos[0], 1);
$produtos[1] = removeProduto($produtos[1], 3);
disponibilidadeDeProduto($produtos[2]);

foreach ($produtos as $item)
{
    echo $item["nome"] . " - " . $item["estoque"] . PHP_EOL;
}
