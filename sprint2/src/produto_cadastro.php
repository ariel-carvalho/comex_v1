<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Produto</title>
</head>
<body>
    <form action="acoes/cadastra_produto.php" method="POST">
        <input name="nome" type="text" placeholder="Nome">
        <input name="preco" type="number" placeholder="Preço">
        <input name="qtd_Estoque" type="number" placeholder="Quantidade em Estoque">
        <button type="submit">Enviar</button>
    </form>
</body>
</html>