<?php

namespace Ariel\Comex;

class Cliente 
{
    private string $nome;
    private string $email;
    private string $celular;
    private string $endereco;
    private int $comprasRealizadas;
    private array $pedidos;


    public function __construct(string $nome, string $email, string $celular, string $endereco, int $comprasRealizadas)
    {
        $this->nome = $nome;
        $this->email = $email;
        $this->celular = $celular;
        $this->endereco = $endereco;
        $this->comprasRealizadas = $comprasRealizadas;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome($nome): void
    {
        $this->nome = $nome;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail($email): void
    {
        $this->email = $email;
    }

    public function getCelular(): string
    {
        return $this->celular;
    }

    public function setCelular($celular): void
    {
        $this->celular = $celular;
    }

    public function getEndereco(): string
    {
        return $this->endereco;
    }

    public function setEndereco($endereco): void
    {
        $this->endereco = $endereco;
    }

    public function realizarCompra(int $qtdeCompra): void
    {
        if ($qtdeCompra <= 0)
        {
            echo "Valor precisa ser positivo";
            return;
        }

        $this->comprasRealizadas += $qtdeCompra;
    }

    public function getPedidos(): array
    {
        return $this->pedidos;
    }

    public function setPedidos(Pedido $pedido): void
    {
        array_push  ($this->pedidos, $pedido);
        return;
    }

}