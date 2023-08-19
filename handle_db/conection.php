<?php

$host = "localhost";
$username = "root";
$psswrd = "";
$dbname = "facebook";

try {
    $connection = new mysqli($host, $username, $psswrd, $dbname);
} catch (mysqli_sql_exception $e) {
    echo "Error: " . $e->getMessage();
}
