<?php
session_start();
$user = $_SESSION["username"];
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizzaria Muçarela</title>
    <link rel="shortcut icon" href="imagens/pi.png" type="image/x-icon">
    <link rel="stylesheet" href="css/estilo.css">
</head>

<body>
<nav class="sessao"> <a href="#"><?=$user?> <a href="index.php">Sair</a></a></nav>
    <header>
        <h1>Pizzaria Muçarela</h1>
        <p>Desde 1986</p>
    </header>
    <nav>
        <a href="pizzas.php">Pizzas</a>
        <a href="cadastro.php">Cadastro Cliente</a>
        <a href="produto.php">Cadastro Produto</a>
        <a href="login.php">Login</a>
        <a href="relatorio.php">Relatorio</a>
    </nav>
    <main class="formulario">
        <form action="autentica.php" method="post">
            <h1>Login</h1>
            <input type="text" name="nome" id="nome" placeholder="Nome:"><br>
            <input type="password" name="senha" id="senha" placeholder="Senha:"><br>
            <input type="submit" value="Entrar">
        </form>
    </main>
    <footer>
        <p></p>
    </footer>
</body>

</html>