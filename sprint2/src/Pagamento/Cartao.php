<?php

namespace Ariel\Comex\Pagamento;
use Ariel\Comex\Interfaces\MeioDePagto;

Class Cartao implements MeioDePagto
{
    public function processaPagto(): bool
    {
        echo "Processando o Pagamento..." . PHP_EOL;
        sleep(5);
        
        $limite = rand(0,1);

        try
        {
            if ($limite === 0)
            {
                throw new \Exception("Cartão Recusado");
            }
        }
        
        catch (\Exception $e)
        {
            echo $e->getMessage() . PHP_EOL;
            return false;
        }

        echo "Pagamento Aprovado!" . PHP_EOL;
        return true;
    }
}
