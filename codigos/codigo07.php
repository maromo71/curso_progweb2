<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Binários</title>
</head>
<body>
<?php
    $num = 50;
    /* valor 50 em binário = 110010 */
    $deslocando1 = $num >> 1; //Desloca 1 bit a direita
    /* 110010 deslocar 1 a direita. ==> 11001
    Equivale-se a dividir por 2 em decimal */
    $deslocando2 = $num << 1; //Desloca 1 bit a esquerda
    /* 110010 deslocar 1 a esquerda. ==> 1100100
    Equivale-se a multiplicar por 2 em decimal */
    $inverte = ~$num; // Inverte os bits
    /*Obs.: complemento de dois
    ~num = -(num + 1) ==> -(50+1)=-51 */
    echo "Deslocando1 = $deslocando1<br>";
    echo "Deslocando2 = $deslocando2<br>";
    echo "Inverte = $inverte<br>";
    ?>    
</body>
</html>