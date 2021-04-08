<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exibindo a data e hora</title>
</head>
<body>
    <?php
    // set the default timezone to use. Available since PHP 5.1
    date_default_timezone_set('America/Sao_Paulo');
    $data = date("d/m/y", time());
    $hora = date("H:i", time());
    echo "<h3>Data: $data</h3>";
    echo "<h4>Horário: $hora</h3>";
    echo "<p>Exibindo a data e hora local </p>";
    ?>
</body>
</html>
