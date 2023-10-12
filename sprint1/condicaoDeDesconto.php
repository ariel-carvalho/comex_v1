<?php

$valorInicialDaCompra = 150.00;
function verificaDesconto($valorInicialDaCompra)
{        
    if($valorInicialDaCompra >= 100.00)
    {
        $valorInicialDaCompra = $valorInicialDaCompra/100*90;
        return $valorInicialDaCompra;
    }
    return $valorInicialDaCompra;
}

$valorFinalDaCompra = verificaDesconto($valorInicialDaCompra);

echo "O valor inicial da compra foi de " . $valorInicialDaCompra . " e valor final da compra é de " . $valorFinalDaCompra;