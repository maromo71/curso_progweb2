<?php
$opcao = $argv[1];
switch ($opcao) {
    case 0:
        echo "Escolha foi 0";
        break;
    case 1:
        echo "Escolha foi 1 \n";
        break;
    case 2:
        echo "Escolha foi 2 \n";
        break;
    default:
        echo "Escolha foi inválida \n";
}
