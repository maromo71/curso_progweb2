<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo PHP em Arquivo HTML</title>
</head>
<body>
    <?php
        $nome = "Ricardo Antonio dos Santos";
        $cidade = "Campinas";
        $uf = "SP";
        $completo = $cidade . " - " .$uf;
        $num = 10;
        $compra = "15 bolas";
        echo "<br>";
        echo $completo . "<br >";
        echo $num . "<br>";
        echo "Foram compradas $compra <br>";
    ?>
</body>
</html>