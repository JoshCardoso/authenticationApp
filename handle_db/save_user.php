<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === "POST" && isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $email = htmlspecialchars($email, ENT_QUOTES);
    $password = htmlspecialchars($password, ENT_QUOTES);

    $hash = password_hash($password, PASSWORD_DEFAULT);

    require_once("conection.php");
    $statement = $connection->query("INSERT INTO users(email, psswrd) VALUES ('$email', '$hash');");

    $statemnet = $connection->query("select * from users where email='$email'");

    if ($statemnet->num_rows === 1) {
        $result = $statemnet->fetch_assoc();
        $verify = password_verify($password, $hash);

        if ($verify) {
            session_start();
            $_SESSION = $result;
            header('location: ../views/usuario.php');
        } else {
            header('location: ../views/login.php');
        }
    } else {
        header('location: ../views/login.php');
    }
} else {
    header('location: ../views/login.php');
}
