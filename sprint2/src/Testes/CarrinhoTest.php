<?php

namespace Ariel\Comex\Testes;

use PHPUnit\Framework\TestCase;
use Ariel\Comex\Carrinho;
use Ariel\Comex\Produto;

class CarrinhoTest extends TestCase
{
    public function testRetornaValorTotalCorretamente()
    {
        $carrinho = new Carrinho(new Produto("tenis", 200.00, 4));        
        
        $this->assertEquals(180.00, $carrinho->getValorTotal());
    }
}