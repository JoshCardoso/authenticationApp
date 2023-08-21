<?php
require_once("conection.php");

session_start();

if(isset($_POST['email']) && isset($_POST['password'])){
$email = $_POST['email'];
$password = $_POST['password'];

$statement = $connection->prepare('INSERT INTO users (email, psswrd) VALUES (?, ?)');
$statement->bind_param('ss', $email, $password);

$email = $_POST['email'];
$_SESSION['email'] = $email;
$password = $_POST['password'];
$_SESSION['password'] = $password;

if ($statement->execute()) {
    echo "Inserção bem-sucedida!";
    header('location: get_user.php');
} else {
    echo "Erro ao inserir os dados: " . $connection->error;
}

$statement->close();
}