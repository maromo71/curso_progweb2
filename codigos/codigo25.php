<?php
function listarCliente($codProc){
    $clientes = [
        ["codigo" => 1, "nome" => "Ricardo Santos", "credito" => 1000.0],
        ["codigo" => 2, "nome" => "Ana Santos", "credito" => 2000.0],
        ["codigo" => 3, "nome" => "Mariana Santos", "credito" => 3000.0],
        ["codigo" => 4, "nome" => "Rodrigo Santos", "credito" => 2000.0],
        ["codigo" => 5, "nome" => "Ulisses Santos", "credito" => 1000.0],
    ];
    foreach ($clientes as $cliente) {
        foreach ($cliente as $campo => $valor) {
            if ($campo == "codigo" && $valor == $codProc) {
                return $cliente;
            }
        }
    }
}
$codProc = 1;
$cliente = listarCliente($codProc);
foreach ($cliente as $campo => $valor) {
    echo "$campo = $valor \n";
}
