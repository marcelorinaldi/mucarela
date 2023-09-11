<?php 
$host = "127.0.0.1";
$user = "root";
$pass = "q1w2e3";
$banco = "pizza";

$mysqli = new mysqli($host, $user, $pass, $banco);
if (mysqli_connect_errno()) {
    printf("deu errado", mysqli_connect_error());
    exit();
}
?>