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
    <nav class="sessao"> <a href="#"><?=$user?></a></nav>
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
        <form action="salvaproduto.php" method="post" enctype="multipart/form-data">
            <h1>Cadastro de Produtos</h1>
            <input type="text" name="nomeproduto" id="nomeproduto" placeholder="Nome:" required><br>
            <input type="number" name="valor" id="valor" placeholder="Valor:"><br>
            <!-- <input type="text" name="tipo" id="tipo" placeholder="Tipo:"><br> -->
            <select name="tipo" id="tipo" required>
                <option value=""></option>
                <option value="1">Pizza</option>
                <option value="2">Refrigerante</option>
                <option value="3">Sobremesa</option>
            </select>
            <input type="number" name="cupom" id="cupom" placeholder="Cupom:"><br>
            <input type="file" name="imagem" id="imagem" placeholder="Imagem:">
            <input type="submit" value="Cadastrar">
        </form>
    </main>
    <footer>
        <p>Site criado por Marcelo Rinaldi</p>
    </footer>
</body>

</html>