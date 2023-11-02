<?php

namespace Ariel\Comex;
class Carrinho
{
    private Produto $produto;

    public function __construct(Produto $produto)
    {
        $this->produto = $produto;
    }
  
     public function getProduto()
    {
        return $this->produto;
    }

    public function getValorCompra()
    {
        $compra = 0;

        foreach ($this->produto as $produto)
        {
            $compra += $produto->GetPreco();
        }
        
        return $compra >= 100 ? $compra / 100 * 90 : $compra;
    }

    public function getFrete()
    {
        return $this->getValorCompra() >= 100 ? 0 : 10;
    }

    public function getValorTotal()
    {
        return $this->getValorCompra() + $this->getFrete();
    }
}