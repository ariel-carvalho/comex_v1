<?php

namespace Ariel\Comex;

use Ariel\Comex\Interfaces\MeioDePagto;

class Pedido 
{
    private int $id;
    private $cliente;
    private $produto;
    private MeioDePagto $meioDePagto;

    public function __construct(int $id, Cliente $cliente, Produto $produto, MeioDePagto $meioDePagto)
    {
        $this->id = $id;
        $this->cliente = $cliente;
        $this->produto = $produto;
        $this->meioDePagto = $meioDePagto;
    }

    public function getMeioDePagto(): MeioDePagto
    {
        return $this->meioDePagto;
    }
}