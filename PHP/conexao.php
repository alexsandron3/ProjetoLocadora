<?php
    $dbHost = "localhost";
    $dbUsuario = "root";
    $dbSenha = "";
    $dbNome = "locadora";

    //CRIANDO CONEXÃO
    $conexao = mysqli_connect($dbHost, $dbUsuario, $dbSenha, $dbNome);

    //VERIFICANDO CONEXÃO
    if (!$conexao) {
        die("Conexão falhou: " . mysqli_connect_error());
    }   
?>
