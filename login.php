<?php

$email = $_POST['email'];
$senha = $_POST['senha'];

require_once "conecta.php";
$conexao = conectar();

$sql = "SELECT * FROM usuario WHERE email='$email'";
$resultado = mysqli_query($conexao, $sql);
if($resultado === false){
    echo "Erro ao inserir o novo usuário!". mysqli_errno($conexao) . ". " . mysqli_error($conexao);
    die();
}
$usuario = mysqli_fetch_assoc($resultado);