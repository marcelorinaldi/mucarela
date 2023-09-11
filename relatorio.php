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
    <main class="lista">
        <div>
            <h1>Lista de Clientes</h1>
            <ol>
                <?php
                // imprmir dados
                $sql = "select * from cliente";
                $resultado = $mysqli->query($sql);
                $dados = $resultado->num_rows;
                if ($dados > 0) {
                    while ($linha = $resultado->fetch_array()) {

                ?>
                        <!--     echo "<div class='campinho'><li><div><span>Nome:</span>" . $linha['nome'] . " </div><div><span>Email:</span>" . $linha['email'] . " </div><div><span>Endereço:</span>" .  . " </div><div><span>Login:</span>" . $linha['login'] . " </div><div><span>Senha:</span>" . $linha['senha'] . "</div></li></div>";
                ?> -->

                        <div class='campinho'>
                            <li>
                                <div><span>Nome:</span><?= $linha['nome'] ?> </div>
                                <div><span>Email:</span><?= $linha['email'] ?></div>
                                <div><span>Endereço:</span><?= $linha['end'] ?>
                                </div>
                                <div><span>Login:</span> <?= $linha['login'] ?></div>
                                <div><span>Senha:</span><?= $linha['senha'] ?></div>
                            </li>
                        </div>

                <?php

                    }
                }

                ?>
            </ol>
        </div>
    </main>
    <footer>
        <p>Site criado por Marcelo Rinaldi</p>
    </footer>
</body>

</html>