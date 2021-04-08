<?php
//Usando variáveis para receber os dados pelo método POST
$opcao = $_POST["opcao"];
$tipo = $_POST["tipo"];

if(empty($_POST["comentarios"])){
    echo "<h2>Erro</h2>";
    echo "<h3>Favor preencher o campos comentário</h3>";
    return;
}else{
    $comentarios = $_POST["comentarios"];
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados Recebidos</title>
</head>
<body>
    <h3>Recebemos os dados</h3>
    <h4>Sua reposta sobre nossos serviços:<h4>
    <p><?=$opcao?></p>
    <h4>Sua reposta sobre área que utiliza com frequência:<h4>
    <p><?=$tipo?></p>
    <h4>Comentário deixado:</h4>
    <p><?=$comentarios?></p>
</body>
</html>