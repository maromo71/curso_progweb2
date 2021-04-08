<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperando dados da sessão</title>
</head>
<body>
<?php
    // Imprimir as variáveis de sessão que foram definidas anteriormente
    echo "Sua cor favorita: " . $_SESSION["fav-color"] . ".<br>";
    echo "Seu animal favorito: " . $_SESSION["fav-animal"] . ".";
?>
</body>
</html>