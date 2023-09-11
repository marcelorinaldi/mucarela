<?php
require_once 'conf.php';
?>

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
    <main>
        <h1 id="pizzas">Bebidas</h1>
        <div id="galeria2">

             <?php

            $sql = "select nomeproduto,valor,foto from produto where tipo=2";
            $resultado = $mysqli->query($sql);
            $dados = $resultado->num_rows;
            if ($dados > 0) {
                while ($linha = $resultado->fetch_array()) {
            ?> 

                    <div class="gallery">
                        <a href="#">
                            <img src="imagens/<?=$linha['foto']?>" alt="Produtos" width="600" height="200">
                        </a>
                        <div class="desc"><?=$linha['nomeproduto']?> <br> R$ <?=$linha['valor'] ?> </div>
                    </div>
             <?php
                }
            }
            ?> 

        </div>
    </main>
    <footer>
        <p>Site criado por Marcelo Rinaldi</p>
    </footer>
</body>

</html>