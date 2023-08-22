<?php


    session_start();

    $id = $_SESSION['id'];
    $name = $_POST['name'];
    $bio = $_POST['bio'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);;

    echo $id;
    var_dump($_POST);
    require_once("conection.php");

    $connection->query("UPDATE users SET name='$name',bio='$bio',email='$email',phone='$phone',psswrd='$password' WHERE id='$id'");

    if(!isset($_FILES["image"])){
    $dadosImg = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
    $connection->query("UPDATE users SET img='$dadosimg' WHERE id='$id'");
    }

