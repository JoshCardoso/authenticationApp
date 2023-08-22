<?php


if($_SERVER['REQUEST_METHOD']==="POST" && isset($_POST['email']) && isset($_POST['password'])){
$email = $_POST['email'];
$password = $_POST['password'];

require_once("conection.php");
$statemnet = $connection->query("select * from users where email='$email'");

if($statemnet->num_rows === 1){
$result = $statemnet->fetch_assoc();

$hash= $result['psswrd'];
$verify = password_verify($password, $hash);

if($verify){
session_start();
$_SESSION = $result;
header('location: ../views/usuario.php');
}else{
    header('location: ../views/login.php');
}
}else{
    header('location: ../views/login.php');
    exit;
}}else{
    header('location: ../views/login.php');
exit;
}