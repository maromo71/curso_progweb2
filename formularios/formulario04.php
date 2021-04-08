<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sua opinião é importante para nós</title>
</head>
<body>
    <h2>Sua opinião</h2>
    <form action="recebe.php" method="post">
            <h3>O que você achou dos nossos serviços? </h3>
            <p>
            <input type="radio" name="opcao" value="Muito Bom" checked>Muito Bom
                <input type="radio" name="opcao" value="Bom">Bom
                <input type="radio" name="opcao" value="Regular">Regular
                <input type="radio" name="opcao" value="Ruim">Ruim 
            </p>
            <h3>Qual de nossas áreas utiliza com frequencia:<h3>
            <select size="1" name="tipo">
                <option value="sauna">Sauna</option>
                <option value="futebol">Futebol</option>
                <option value="bocha">Bocha</option>
                <option value="outros">Outros</option>
            </select>
            <h3>Digite seus comentários abaixo:</h3>
            <textarea name="comentarios" rows="5" cols="50"></textarea>
            <input type="submit" value="Enviar!" name="enviar">
        </form>
</body>
</html>