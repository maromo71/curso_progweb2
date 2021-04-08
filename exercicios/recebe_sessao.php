<?php
session_start();
$produto = $_POST["produto"];
$quantidade = (int) $_POST["quantidade"];
$valor = $_POST["valor"];
$subtotal = $quantidade * $valor;
if(isset($_SESSION["lista"])){
    $lista = $_SESSION["lista"];
}else{
    $lista = [];
}
$item = [
    "produto" => $produto,
    "quantidade" => $quantidade,
    "valor" => $valor,
    "subtotal" => $subtotal,
];
array_push($lista, $item);
$total = 0;
foreach ($lista as $item) {
    foreach ($item as $key => $value) {
        echo $key . " - " . $value . "<br>";
    }
    $total += $item["subtotal"];
    echo "<br>";
}
$_SESSION["lista"] = $lista;
echo "Valor total: $total ";