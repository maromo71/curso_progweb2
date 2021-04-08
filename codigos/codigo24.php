<?php
function listarClientes(){
    $clientes = [
        ["codigo" => 1, "nome" => "Ricardo Santos", "credito" => 1000.0],
        ["codigo" => 2, "nome" => "Ana Santos", "credito" => 2000.0],
        ["codigo" => 3, "nome" => "Mariana Santos", "credito" => 3000.0],
        ["codigo" => 4, "nome" => "Rodrigo Santos", "credito" => 2000.0],
        ["codigo" => 5, "nome" => "Ulisses Santos", "credito" => 1000.0],
    ];
    return $clientes;
}
$lista = listarClientes();
foreach ($lista as $cliente) {
    echo "Cliente: \n";
    foreach ($cliente as $campo=>$valor) {
        echo  "$campo = $valor \n";
    }
    echo "------------------------\n";
}
