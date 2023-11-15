<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Camisa</title>
</head>

<p>Quantas Camisas deseja comprar?</p>

<body>
    <form action="acoes/venda_camisa_estoque.php" method ="POST">
        <input name="nome" type="number">
        <button type="submit">Enviar</button>
    </form>
</body>
</html>