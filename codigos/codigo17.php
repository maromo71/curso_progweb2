<?php
$vetor[0][0] = "elemento 0.0.";
$vetor[0][1] = "elemento 0.1.";
$vetor[1][0] = "elemento 1.0.";
$vetor[1][1] = "elemento 1.1.";
for ($i = 0; $i < 2; $i++) {
    for ($j = 0; $j < 2; $j++) {
        echo "O elemento da posição $i, $j é: ";
        echo $vetor[$i][$j];
        echo "\n";
    }
}

$meses = ['janeiro', 'fevereiro', 'março'];
foreach ($meses as $mes) {
    echo "Mês: $mes \n";
}
echo "Encerrou \n";
