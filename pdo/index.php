<?php
require_once "conexao.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Alunos</title>
</head>

<body>
    <h2>Lista de Alunos</h2>
    <?php
    //definir a codificação para UTF-8 (evitar problemas com acentos, cedilhas)
    $conn->exec("set names utf8");
    //prepando a consulta
    $sql = "Select * from tb_alunos;";
    $result = $conn->query($sql);
    $rows = $result->fetchAll(PDO::FETCH_ASSOC);
    ?>
    <table style="width:33%; border-collapse: collapse;"> 
        <thead>
            <tr style="border: solid 1px">
                <th>RM</th>
                <th>Nome</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
         <?php
        //exibindo um array associativo
        foreach ($rows as $row) {
        ?>
            <tr style="border: solid 1px">
                <td><?=$row['rm']?></td>
                <td><?=$row['nome']?></td>
                <td><?=$row['email']?></td>
            </tr>
            <?php
            }
        ?>
        </tbody>
    </table>
</body>
</html>