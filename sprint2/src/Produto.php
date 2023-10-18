<?php

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
        self::$qtdeTotalEstoque += $qtdeEstoque;
    }
  
    public function __destruct()
    {
        self::$numeroDeProdutos--;
    }
    public static function valorTotalProdutos(): int
    {
        return self::$qtdeTotalEstoque;
    }
}