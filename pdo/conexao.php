<?php
$username = 'aluno';
$password = 'aluno1234';
try{
    $conn = new PDO(
        'mysql:host=localhost;dbname=escola',
        $username,
        $password
    );
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo "Aconteceu um erro ao conectar com o MySQL: $e->getMessage()";
}