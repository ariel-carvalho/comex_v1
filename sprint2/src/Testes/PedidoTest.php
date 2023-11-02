<?php

namespace Ariel\Comex\Testes;

use Ariel\Comex\Interfaces\MeioDePagto;
use PHPUnit\Framework\TestCase;
use Ariel\Comex\Pedido;
use Ariel\Comex\Produto;
use Ariel\Comex\Cliente;
use Ariel\Comex\Pagamento\Pix;
use Ariel\Comex\Pagamento\Cartao;


class PagamentoAprovadoMock implements MeioDePagto
{
    public function processaPagto(): bool
    {
        return true;
    }
}

class PagamentorecusadoMock implements MeioDePagto
{
    public function processaPagto(): bool
    {
        return false;
    }
}
class PedidoTest extends TestCase
{
    public function testRetornaMeioDePagtoCorretamente()
    {
        $pedido = new Pedido(1,
        new Cliente("Ariel","ariell_carvalho@hotmail.com","(11) 94714-0300", "Rua Marquês de Praia Grande, 285",0),
        new Produto("camiseta", 50.00, 10),
        new Pix);
        
        $this->assertEquals("pix", $pedido->getMeioDePagto()->processaPagto());      
    }

    public function testPedidoMudaStatusParaTrueCasoPagtoSejaAprovado()
    {
        $pedido = new Pedido(1,
        new Cliente("Ariel","ariell_carvalho@hotmail.com","(11) 94714-0300", "Rua Marquês de Praia Grande, 285",0),
        new Produto("camiseta", 50.00, 10),
        new PagamentoAprovadoMock);

        $pedido->pagar();

        $this->assertTrue($pedido->getStatusPagamento());    
    }

    public function testPedidoMudaStatusParaFalseCasoPagtoSejaReprovado()
    {
        $pedido = new Pedido(1,
        new Cliente("Ariel","ariell_carvalho@hotmail.com","(11) 94714-0300", "Rua Marquês de Praia Grande, 285",0),
        new Produto("camiseta", 50.00, 10),
        new PagamentoRecusadoMock);

        $pedido->pagar();

        $this->assertFalse($pedido->getStatusPagamento());    
    }
}