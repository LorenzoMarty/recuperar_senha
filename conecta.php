<?php

function conectar(){
    $conexao = mysqli_connect("localhost", "root", "", "recuperar");
    if($conexao === false){
        echo "Erro ao conectar à base de dados. Nº do erro: ". mysqli_connect_errno() . ". " . mysqli_connect_error();
        die();
    }return $conexao;
}