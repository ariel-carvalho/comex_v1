<?php

$produtos =
[
    [
        "nome" => "camiseta",
        "preco" => 50.00,        
    ],        
    [
        "nome" => "calca",
        "preco" => 80.00,    
    ],
    [
        "nome" => "meia",
        "preco" => 10.00,
    ],
    [
        "nome" => "tenis",
        "preco" => 200.00,
    ]
];

foreach ($produtos as $item)
{
    echo $item["nome"] . " - " . $item["preco"] . PHP_EOL;
}

