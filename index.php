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
    <nav class="sessao"> <a href="#"><?=$user?> <a href="sair.php">Sair</a></a></nav>
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
        <article>
            <h1>Nossa História</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam architecto impedit perferendis quod vel nihil adipisci natus fuga, repellat tempore modi fugiat commodi ducimus corporis quia iure ipsum deserunt alias.
                Adipisci facere, praesentium minima nobis alias harum tenetur repudiandae eaque. Quibusdam voluptas voluptates facilis debitis, hic possimus dignissimos tempora quae nam libero ex maiores repellendus quo vitae. Cum, ad! Necessitatibus?
                Accusantium dolorem est consectetur, commodi reprehenderit molestias numquam deleniti ut magni soluta fugiat quia illum illo, eligendi architecto aliquid cum debitis ratione quae excepturi, fugit tempore iusto! Hic, nulla voluptas.
                Dolorem minus accusantium eaque repudiandae illo ut ea doloribus nihil saepe! Numquam enim tempore deleniti amet, quisquam nisi laudantium saepe veniam aut eaque iusto consequatur nulla praesentium, commodi dolores vero.</p>

            <img src="./imagens/pizza1-600.jpg" alt="pizza assando no forno à lenha">

            <h2>Nossos Ingredientes</h2>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Neque vel nisi suscipit quod reprehenderit, optio debitis quasi ex atque consequatur nesciunt corporis voluptatum autem inventore praesentium consequuntur temporibus laudantium nihil.
                Nisi aspernatur quae fugiat beatae rerum quidem, deserunt esse aliquid doloremque quo, ea aliquam eius impedit accusantium labore? Deleniti, cupiditate atque. Vero nisi expedita molestias impedit amet maxime dolores ratione?
                Rerum debitis exercitationem odit, maxime quibusdam perferendis omnis fuga, ipsam, eligendi magnam adipisci sint quidem velit! Blanditiis, ducimus laboriosam quod adipisci iusto dolore, recusandae libero ab voluptate vero aspernatur aut?</p>

            <img src="./imagens/pizza2-600.jpg" alt="Montagem de pizza">

            <h2>Nossa Equipe</h2>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. A error quo accusamus tempora, pariatur necessitatibus ratione dolore, vero velit quas, praesentium officia? In aspernatur possimus minus architecto fugiat numquam deleniti!
                Ea tenetur quod laudantium fuga quisquam soluta assumenda veniam velit inventore, voluptatibus tempora maiores corporis placeat consectetur nam. Nisi quasi, at molestiae corrupti placeat aut autem velit cumque debitis tenetur. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima perspiciatis cum excepturi eos, ipsam maxime, recusandae nam pariatur iure dicta reiciendis voluptatum officia, dolore quod inventore! Corrupti officiis in explicabo.</p>

            <img src="./imagens/equipe-600.jpg" alt="Pizzaiolo preparando pizza">
        </article>
    </main>
    <footer>
        <p></p>
    </footer>
</body>

</html>