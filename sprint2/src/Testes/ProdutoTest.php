<?php

namespace Ariel\Comex\Testes;

use PHPUnit\Framework\TestCase;
use Ariel\Comex\Produto;

class ProdutoTest extends TestCase
{
    public function testRetornaNomeCorretamente()
    {
        $produto = new Produto("camiseta", 50.00, 10);
       
        $this->assertEquals("camiseta", $produto->getNome());
    }

    public function testRetornaPrecoCorretamente()
    {
        $produto = new Produto("camiseta", 50.00, 10);
       
        $this->assertEquals(50.00, $produto->getPreco());
    }

    public function testRetornaEstoqueCorretamente()
    {
        $produto = new Produto("camiseta", 50.00, 10);
       
        $this->assertEquals(10, $produto->getQtdeEstoque());
    }

    public function testRetornaRealizaCompraCorretamente()
    {
        $produto = new Produto("camiseta", 50.00, 10);

        $produto->RealizaCompra(1);
       
        $this->assertEquals(9, $produto->getQtdeEstoque());
    }
}

