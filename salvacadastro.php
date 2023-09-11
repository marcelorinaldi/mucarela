<?php 
require_once 'conf.php';
echo "<pre>";
print_r($_POST);

$n = $_POST['nome'];
$e = $_POST['email'];
$end = $_POST['end'];
$l = $_POST['login'];
$s = $_POST['senha'];
echo $sql = "insert into cliente(nome,email,endereco,login,senha) values ('".$n."','".$e."','".$end."','".$l."','".$s."')";
$comando = $mysqli->query($cad);

$comando = $mysqli->affected_rows;
print_r($comando);

if (isset($comando)){
    echo "<br>Cadastro realizado com sucesso";
}
?>