<?php
$brasileirao = [
    "Flamengo" => 71,
    "Internacional" => 70,
    "Atlético MG" => 68,
    "São Paulo" => 66,
    "Fluminense" => 64,
    "Grêmio" => 59,
    "Palmeiras" => 58,
    "Santos" => 54,
];
$posicao = 0;
foreach ($brasileirao as $time => $pontos) {
    $posicao++;
    echo "Posição: $posicao - Time: $time : $pontos \n";
}

$v = [2, 4, 6, 8, 10];
for ($i = 0; $i < 5; $i++) {
    if ($v[$i] < 0) {
        break;
    }
    if ($i == 4) {
        echo "elemento negativo não encontrado. \n";
    }
}
