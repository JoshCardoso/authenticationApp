<?php
require_once("conection.php");

session_start();

if(isset($_POST['email']) && isset($_POST['password'])){
$email = $_POST['email'];
$email = htmlspecialchars($email, ENT_QUOTES);
$password = $_POST['password'];

$statemnet = $connection->query("select * from users where email='$email' and psswrd='$password'");

$result = $statemnet->fetch_assoc();
$_SESSION = $result;

// if($_SESSION === null){
//     header('location: ../views/login.php');
//     exit;
// }
// header('location: ../views/usuario.php');
}else{
    header('location: ../views/login.php');
    exit;
}