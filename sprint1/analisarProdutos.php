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

function precoMaisAlto($produtos)
{
    $precoMaisAlto = 0;
   
    foreach ($produtos as $indice => $item)
    {
        if($item["preco"] > $produtos[$precoMaisAlto]["preco"])
        {
            $precoMaisAlto = $indice;            
        }
    }

    echo "O produto com o maior preço é: " . $produtos[$precoMaisAlto]["nome"] . ", que custa: " . $produtos[$precoMaisAlto]["preco"] . " reais." . PHP_EOL;
}

function PrecoMaisBaixo($produtos)
{
    $precoMaisBaixo = 0;
   
    foreach ($produtos as $indice => $item)
    {
        if($item["preco"] < $produtos[$precoMaisBaixo]["preco"])
        {
            $precoMaisBaixo = $indice;            
        }
    }

    echo "O produto com o menor preço é: " . $produtos[$precoMaisBaixo]["nome"] . ", que custa: " . $produtos[$precoMaisBaixo]["preco"] . " reais." . PHP_EOL;
}

function mediaDePreco($produtos)
{
    $somaPreco = 0;
    $contaPreco = 0;
   
    foreach ($produtos as $item)
   {
        $somaPreco += $item["preco"];
        $contaPreco++;
   }

   $mediadePreco = $somaPreco/$contaPreco;

   echo "A média dos preços é de: " . $mediadePreco . " reais." . PHP_EOL;
}

precoMaisAlto($produtos);
precoMaisBaixo($produtos);
mediaDePreco($produtos);

