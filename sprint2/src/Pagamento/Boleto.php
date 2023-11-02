<?php

namespace Ariel\Comex\Pagamento;
use Ariel\Comex\Interfaces\MeioDePagto;

Class Boleto implements MeioDePagto
{
    public function processaPagto(): bool
    {
        echo "Processando o Pagamento..." . PHP_EOL;
        sleep(10);
        echo "Pagamento Aprovado!" . PHP_EOL;
        return true;
    }
}
