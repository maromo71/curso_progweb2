<?php
// Iniciando a sessão
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo com sessões</title>
</head>
<body>
<?php
    // Definindo as variáveis de seção
    $_SESSION["fav-color"] = "verde";
    $_SESSION["fav-animal"] = "gato";
    echo "Variáveis de sessão foram criadas. <br>";
?>
<a href="codigo28.php">Ver Página</a>
</body>
</html>
