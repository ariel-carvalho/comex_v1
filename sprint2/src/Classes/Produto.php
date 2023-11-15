<?php

namespace Ariel\Comex;
use Ariel\Comex\Estoque\CompraNegativaException;
use Ariel\Comex\Estoque\EstoqueNegativoException;

class Produto 
{
    private string $nome;
    private float $preco; 
    private int $qtdeEstoque;
    private static int $numeroDeProdutos = 0;
    private static int $qtdeTotalEstoque = 0;

    public function __construct(string $nome, float $preco, int $qtdeEstoque)
    {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->qtdeEstoque = $qtdeEstoque;

        self::$numeroDeProdutos++;
        self::$qtdeEstoque += $qtdeEstoque;
    }
  
    public function __destruct()
    {
        self::$numeroDeProdutos--;
    }
    public static function valorTotalProdutos(): int
    {
        return self::$qtdeTotalEstoque;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getPreco(): float
    {
        return $this->preco;
    }

    public function getQtdeEstoque(): int
    {
        return $this->qtdeEstoque;
    }

    public function RealizaCompra($qtdeEstoque): void
    {
        if ($qtdeEstoque <= 0)
        {
            throw new CompraNegativaException();
        }
        else if ($qtdeEstoque > $this->qtdeEstoque)
        {
            throw new EstoqueNegativoException();
        }

        $this->qtdeEstoque -= $qtdeEstoque;
        echo "Compra realizada com sucesso";
    }
}