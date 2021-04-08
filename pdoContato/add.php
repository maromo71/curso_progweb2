<?php
require_once 'init.php';

// pega os dados do formulário
$name = isset($_POST['name']) ? $_POST['name'] : null;
$email = isset($_POST['email']) ? $_POST['email'] : null;
$gender = isset($_POST['gender']) ? $_POST['gender'] : null;
$birthdate = isset($_POST['birthdate']) ? $_POST['birthdate'] : null;
var_dump($_POST);

 
// validação (bem simples, só pra evitar dados vazios)
if (empty($name) || empty($email) || empty($gender) || empty($birthdate))
{
    echo "Volte e preencha todos os campos";
    exit;
}
// a data vem no formato dd/mm/YYYY
// então precisamos converter para YYYY-mm-dd
$isoDate = dateConvert($birthdate);
// insere no banco
$PDO = db_connect();
$sql = "INSERT INTO `users` ( 
    `name`,
    `email`,
    `gender`,
    `birthdate` 
 ) VALUES ( 
   :name,
   :email,
   :gender,
   :birthdate
 )"; 
$stmt = $PDO->prepare($sql);
$stmt->bindParam(':name', $name, PDO::PARAM_STR);
$stmt->bindParam(':email', $email, PDO::PARAM_STR);
$stmt->bindParam(':gender', $gender, PDO::PARAM_STR);
$stmt->bindParam(':birthdate', $isoDate);
if ($stmt->execute())
{
    header('Location: index.php');
}
else
{
    echo "Erro ao cadastrar <br>";
    print_r($stmt->errorInfo());
}