<?php

require_once "src/Cliente.php";
require_once "src/Produto.php";

class Pedido 
{
    private int $id;
    private $cliente;
    private $produto;  

    public function __construct(int $id, Cliente $cliente, Produto $produto)
    {
        $this->id = $id;
        $this->cliente = $cliente;
        $this->produto = $produto;
    }
}