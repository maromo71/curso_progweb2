<?php
function paulistas(){
    $clubes = [
        "São Paulo",
        "Palmeiras",
        "Santos",
        "Corinthians",
    ];
    return $clubes;
}
$nomesDosClubes = paulistas();
echo "\nGrandes clubes paulistas que integram a primeira divisão do Brasileirão:\n";
for ($i = 0; $i < sizeof($nomesDosClubes); $i++) {
    $ordem = $i + 1;
    echo "$ordem) $nomesDosClubes[$i] \n";
}
