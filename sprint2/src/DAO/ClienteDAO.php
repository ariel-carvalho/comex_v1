<?php

namespace Ariel\Comex\DAO;
use Ariel\Comex\Cliente;

class ClienteDAO
{
    public function __construct(private \PDO $pdo){}
    
    public function salvar (string $nome, string $email, string $celular, string $endereco)
    {
        $sql = "INSERT INTO clientes (nome, email, celular, endereco) VALUES (?, ?, ?, ?);";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$nome, $email, $celular, $endereco]);
    }

    public function buscarNome (string $nome)
    {
        $sql = "SELECT * FROM clientes WHERE nome = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$nome]);
        $dados = $stmt->fetch(\PDO::FETCH_ASSOC);
        return new Cliente ($dados["nome"],$dados["email"],$dados["celular"],$dados["endereco"],$dados["comprasRealizadas"]);
    }
    
    public function buscarEmail (string $email)
    {
        $sql = "SELECT * FROM clientes WHERE email = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$email]);
        $dados = $stmt->fetch(\PDO::FETCH_ASSOC);
        return new Cliente ($dados["nome"],$dados["email"],$dados["celular"],$dados["endereco"],$dados["comprasRealizadas"]);
    }

    public function buscarTelefone (string $celular)
    {
        $sql = "SELECT * FROM clientes WHERE celular = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$celular]);
        $dados = $stmt->fetch(\PDO::FETCH_ASSOC);
        return new Cliente ($dados["nome"],$dados["email"],$dados["celular"],$dados["endereco"],$dados["comprasRealizadas"]);
    }

    public function buscarEndereco (string $endereco)
    {
        $sql = "SELECT * FROM clientes WHERE endereco = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$endereco]);
        $dados = $stmt->fetch(\PDO::FETCH_ASSOC);
        return new Cliente ($dados["nome"],$dados["email"],$dados["celular"],$dados["endereco"],$dados["comprasRealizadas"]);
    }

    public function buscarTodos ()
    {
        $sql = "SELECT * FROM clientes";
        $stmt = $this->pdo->query($sql);
        $stmt->execute();
        $dados = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        return new Cliente ($dados["nome"],$dados["email"],$dados["celular"],$dados["endereco"],$dados["comprasRealizadas"]);
    }
}
