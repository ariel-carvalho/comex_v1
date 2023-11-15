<?php

namespace Ariel\Comex\DAO;
use Ariel\Comex\Produto;

class ProdutoDAO
{
    public function __construct(private \PDO $pdo){}
    
    public function salvar (string $nome, float $preco, int $qtdeEstoque)
    {
        $sql = "INSERT INTO produtos (nome, preco, qtd_Estoque) VALUES (?, ?, ?);";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$nome, $preco, $qtdeEstoque]);
    }

    public function retirarDoEstoque (string $nome, Produto $qtdeEstoque)
    {
        $sql = "UPDATE produto SET qtd_Estoque = ? WHERE nome = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$qtdeEstoque, $nome]);
    }

    public function buscarNome (string $nome)
    {
        $sql = "SELECT * FROM produto WHERE nome = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$nome]);
        $dados = $stmt->fetch(\PDO::FETCH_ASSOC);
        return new Produto ($dados["nome"],$dados["preco"],$dados["qtd_Estoque"]);
    }
    
    public function buscarPreco (string $preco)
    {
        $sql = "SELECT * FROM produto WHERE preco = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$preco]);
        $dados = $stmt->fetch(\PDO::FETCH_ASSOC);
        return new Produto ($dados["nome"],$dados["preco"],$dados["qtd_Estoque"]);
    }

    public function buscarQtdeEstoque (string $qtdeEstoque)
    {
        $sql = "SELECT * FROM produto WHERE qtd_Estoque = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$qtdeEstoque]);
        $dados = $stmt->fetch(\PDO::FETCH_ASSOC);
        return new Produto ($dados["nome"],$dados["preco"],$dados["qtd_Estoque"]);
    }
    
    public function buscarTodos ()
    {
        $sql = "SELECT * FROM produto";
        $stmt = $this->pdo->query($sql);
        $stmt->execute();
        $dados = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        return new Produto ($dados["nome"],$dados["preco"],$dados["qtd_Estoque"]);
    }
}