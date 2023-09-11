<?php
session_start();
// Verifique se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifique as credenciais de login (isso é apenas um exemplo simples)
    $username = "marcelo";
    $password = "666";

    $input_username = $_POST["nome"];
    $input_password = $_POST["senha"];

    $sql = "select * from cliente where login='".$input_username."' and senha='".$input_password."'";
    $resultado = $mysqli->query($sql);
    $dados = $resultado->num_rows;

    if ($dados > 0) {
        $_SESSION["username"] = $input_username;
        header("Location: index.php");
        //echo "Tem dados";
    } else {
        header("Location: login.php");
        //echo "não tem dados";
    }

    /* if ($input_username == $username && $input_password == $password) {
        // Credenciais corretas, redirecione para a página de sucesso ou faça o que for necessário
        $_SESSION["username"] = $input_username;
        header("Location: index.php");
    } else {
        // Credenciais incorretas, vai para a página de erro
        header("Location: login.php");
    }*/
} 
