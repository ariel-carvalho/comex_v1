<?php

namespace Ariel\Comex\Testes;

use PHPUnit\Framework\TestCase;
use Ariel\Comex\Cliente;

class ClienteTest extends TestCase
{
    public function testRetornaCelularFormatadoCorretamente()
    {
        $cliente = new Cliente("Ariel","ariell_carvalho@hotmail.com","(11) 94714-0300", "Rua Marquês de Praia Grande, 285",0);
        
        $this->assertEquals("(11) 94714-0300", $cliente->getCelularFormatado());
    }
}