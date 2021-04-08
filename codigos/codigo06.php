<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo com Operandos</title>
</head>
<body>
    <?php
    $a=10;
    $b=12;
    $c=14;
    $valor1 = ++$a - $b;
    /* Incrementa 1 p/ a = 11 - 12 (valor1) = -1, e A passa p/ 11 */
    $valor2 = $b-- + $a++;
    /* 12 + 12 = 24. Agora decrementa 1 de B ==> 23 e B=11 e A=12 */
    $valor3 = -$a + $c++;
    /* -12 + 14 = 2 Valor3=2 e agora incrementa C = 15 */
    echo "Valor1 => $valor1, <br />Valor2 => $valor2, <br />Valor3 => $valor3<br />";
    echo "A => $a, <br>B => $b, <br>C => $c";
    ?>
</body>
</html>