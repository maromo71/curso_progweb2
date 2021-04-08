<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destruindo uma sessão</title>
</head>

<body>
    <?php
    // remove todas as variáveis de sessão
    session_unset();

    // destrói a sessão
    session_destroy();
    echo "Sessão destruída. <br>";
    ?>
    <a href="codigo28.php">Verificar variáveis novamente</a>
</body>

</html>