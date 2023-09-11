<?php
require_once 'conf.php';
echo "<pre>";
print_r($_POST);
echo "<hr>";
print_r($_FILES);

$abc = $_FILES['imagem'];
echo "<hr>";
print_r($abc);
print "<hr>Nome do arquvo:";
echo $abc['name'];
print "<hr>tamanho do arquvo:";
echo $abc['error'];
print "<hr>";

/* if ($abc['error'] == 0) {
    echo "Tudo funcionando ok"; */

/* if(isset($_FILES['foto'])){ */  // compara se existe a variável
$imagem[] = $_FILES['imagem'];
if ($imagem[0]['error'] < 1) {

    $f_nome = $imagem[0]['name'];
    $f_ext = $imagem[0]['type'];
    $f_caminho = $imagem[0]['tmp_name'];
    $imagem = file_get_contents($f_caminho);
    $imagem = 'data:' . $f_ext . ';base64,' . base64_encode($imagem);

    echo $nome = $_POST['nomeproduto'];
    echo "<hr>";
    echo $valor = $_POST['valor'];
    echo "<hr>";
    echo $tipo = $_POST['tipo'];
    echo "<hr>";
 //   echo $imagem = $_POST['imagem'];

    echo $sql = "insert into produto(nomeproduto,valor,tipo,imagem) value ('" . $nome . "','" . $valor . "','" . $tipo . "','" . $imagem . "')";

    $comando = $mysqli->query($sql);
} else {
    $imagem = "semfoto.png";
};

echo "<hr>";
echo $imagem;
echo "<hr>";
echo '<img src="' . $imagem . '" width="100px">'; 


/* if ($abc['type'] == 'image/png' or $abc['type'] == 'image/jpeg' or $abc['type'] == 'image/gif' or $abc['type'] == 'image/webp'){
    echo "É uma imagem!";
}

else {
    echo "Não é uma imagem!";
} */

/* $n = $_POST['nomeproduto'];
$v = $_POST['valor'];
$t = $_POST['tipo'];
$c = $_POST['cupom'];
$i = $_POST['imagem'];
echo $sql = "insert into produto(nomeproduto,valor,tipo,cupom,imagem) values ('".$n."','".$v."','".$t."','".$c."','".$i."')";
$comando = $mysqli->query($sql);

$comando = $mysqli->affected_rows;
print_r($comando);

if (isset($comando)){
    echo "<br>Cadastro realizado com sucesso";
}
?> */
