<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Cliente</title>
</head>
<body>
    <form action="acoes/cadastra_cliente.php" method ="POST">
        <input name="nome" type="text" placeholder="Nome">
        <input name="email" type="text" placeholder="E-mail">
        <input name="celular" type="text" placeholder="Celular">
        <input name="endereco" type="text" placeholder="Endereço">
        <button type="submit">Enviar</button>
    </form>
</body>
</html>