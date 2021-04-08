<?php
//Tabuada de um número passado como parâmetro pelo usuário
$num = $argv[1];
for ($i = 1; $i <= 10; $i++) {
    $tabu = $num * $i;
    echo "$num X $i => $tabu \n";
}
