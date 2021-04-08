<?php
$salario = $argv[1];
$bonus = $salario <= 5000.0 ? $salario * 0.15 : $salario * 0.1;
echo "Valor do Bônus: $bonus \n";
