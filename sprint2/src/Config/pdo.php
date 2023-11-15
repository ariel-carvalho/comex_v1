<?php

$caminho = __DIR__ . "/../../db.sqlite";
$pdo = new PDO("sqlite:" . $caminho);

$sql = "CREATE TABLE IF NOT EXISTS clientes
(
    id INTEGER PRIMARY KEY,
    nome TEXT,
    email TEXT,
    celular TEXT,
    endereco TEXT
)"; 

$pdo->exec($sql);

$sql = "CREATE TABLE IF NOT EXISTS produtos
(
    id INTEGER PRIMARY KEY,
    nome TEXT,
    preco REAL,
    qtd_estoque INTEGER
)"; 

$pdo->exec($sql);

$sql = "CREATE TABLE IF NOT EXISTS pedidos
(
    id INTEGER PRIMARY KEY,
    cliente_id INTEGER   
)"; 

$pdo->exec($sql);

$sql = "CREATE TABLE IF NOT EXISTS itens_pedido
(
    id INTEGER PRIMARY KEY,
    pedido_id INTEGER,
    produto_id INTEGER,

    FOREIGN KEY (pedido_id) REFERENCES pedidos(id),
    FOREIGN KEY (produto_id) REFERENCES produtos(id)
)"; 

$pdo->exec($sql);

return $pdo;