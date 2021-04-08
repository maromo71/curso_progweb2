<?php
$n1 = $argv[1]; //receber a nota 1 pela linha de comando
$n2 = $argv[2]; //receber a nota 2 pela linha de comando
$media = ($n1 + $n2) / 2;
if($media <= 3.5){
    echo "Reprovado \n"; //mostra a mensagem e pula uma linha
}elseif($media < 7){
    echo "Recuperação \n"; //mostra a mensagem e pula uma linha
}else{
    echo "Aprovado \n"; //mostra a mensagem e pula uma linha
}