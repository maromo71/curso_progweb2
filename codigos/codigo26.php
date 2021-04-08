<?php
$valores = [];
//Percorre os argumentos passados pela linha de comando até cinco (1 a 5);
for ($i=1; $i <= 5; $i++) { 
    $valores[] = $argv[$i];
}
//O vetor de valores tem suas posições de 0 a 4 preenchidas
//percorremos para exibir cada valor.
for ($i=0; $i < sizeof($valores); $i++) { 
    echo "Valor: $valores[$i] \n";
}