<?php

namespace Ariel\Comex\DAO;
use Ariel\Comex\Pedido;
use Ariel\Comex\Cliente;
use Ariel\Comex\Produto;
use Ariel\Comex\Interfaces\MeioDePagto;

class ProdutoDAO
{
    public function __construct(private \PDO $pdo){}
    
    public function salvar (int $id, Cliente $cliente, Produto $produto, MeioDePagto $meioDePagto)
    {
        $sql = "INSERT INTO pedido (id, cliente, produto, meioDePagto) VALUES (?, ?, ?, ?);";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id, $cliente, $produto, $meioDePagto]);
    }

    public function buscarId (string $id)
    {
        $sql = "SELECT * FROM pedido WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id]);
        $dados = $stmt->fetch(\PDO::FETCH_ASSOC);
        return new Pedido ($dados["id"], $dados["cliente"], $dados["produto"], $dados["meioDePagto"]);
    }

    public function buscarCliente (string $cliente)
    {
        $sql = "SELECT * FROM pedido WHERE cliente = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$cliente]);
        $dados = $stmt->fetch(\PDO::FETCH_ASSOC);
        return new Pedido ($dados["id"], $dados["cliente"], $dados["produto"], $dados["meioDePagto"]);
    }

    public function buscarProduto (string $produto)
    {
        $sql = "SELECT * FROM pedido WHERE produto = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$produto]);
        $dados = $stmt->fetch(\PDO::FETCH_ASSOC);
        return new Pedido ($dados["id"], $dados["cliente"], $dados["produto"], $dados["meioDePagto"]);
    }

    public function buscarMeioDePagto (string $meioDePagto)
    {
        $sql = "SELECT * FROM pedido WHERE meioDePagto = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$meioDePagto]);
        $dados = $stmt->fetch(\PDO::FETCH_ASSOC);
        return new Pedido ($dados["id"], $dados["cliente"], $dados["produto"], $dados["meioDePagto"]);
    }
   
    public function buscarTodos ()
    {
        $sql = "SELECT * FROM pedido";
        $stmt = $this->pdo->query($sql);
        $stmt->execute();
        $dados = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        return new Pedido ($dados["id"], $dados["cliente"], $dados["produto"], $dados["meioDePagto"]);
    }
}