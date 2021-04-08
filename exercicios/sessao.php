<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
</head>
<body>
    <h3>Dados do Compra</h3>
    <form action="recebe_sessao.php" method="post">
        <label for="produto">Nome do Produto: </label>
        <input type="text" name="produto">
        <br>
        <label for="quantidade">Quantidade comprada: </label>
        <input type="text" name="quantidade">
        <br>
        <label for="valor">Valor do produto: </label>
        <input type="text" name="valor">
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>