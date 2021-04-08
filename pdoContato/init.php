<?php
// constantes com as credenciais de acesso ao banco MySQL
define('DB_HOST', 'localhost');
define('DB_USER', 'aluno');
define('DB_PASS', 'aluno1234');
define('DB_NAME', 'cadastro');

// habilita todas as exibições de erros
ini_set('display_errors', true);
error_reporting(E_ALL);
// define a região para fusos e formatos de data
date_default_timezone_set('America/Sao_Paulo');

// inclui o arquivo de funções (funções adicionais)
require_once 'functions.php';