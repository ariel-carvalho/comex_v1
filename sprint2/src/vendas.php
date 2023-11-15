<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compre um Produto</title>
</head>

<p>Qual Produto deseja comprar?</p>

<body>
    <form action="acoes/venda_camisa.php" method="POST">        
        <button type="submit">Camisa</button>
    </form>
    <form action="acoes/venda_calca.php" method="POST">        
        <button type="submit">Calça</button>
    </form>
    <form action="acoes/venda_tenis.php" method="POST">        
        <button type="submit">Tenis</button>
    </form>
</body>
</html>