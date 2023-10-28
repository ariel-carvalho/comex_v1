<?php

namespace Ariel\Comex\Pagamento;
use Ariel\Comex\Interfaces\MeioDePagto;

Class Pix implements MeioDePagto
{
    public function processaPagto(): bool
    {
        echo "Processando o Pagamento..." . PHP_EOL;
        sleep(1);
        echo "Pagamento Aprovado!" . PHP_EOL;
        return true;
    }
}
