<?php

require_once "conecta.php";
$conexao = conectar();

$email = $_POST['email'];
$senha = $_POST['senha'];
$nome = $_POST['nome'];

$sql = "INSERT INTO usuario (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
$resultado = mysqli_query($conexao, $sql);
if($resultado === false){
    echo "Erro ao inserir o novo usuário!". mysqli_errno($conexao) . ". " . mysqli_error($conexao);
    die();
}
header("Location: index.php");
