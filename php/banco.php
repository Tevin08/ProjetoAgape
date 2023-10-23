<?php
    $server = "127.0.0.1";
    $user = "root";
    $senha = "";
    $port = "3306";
    $banco = "agape_db";
    $conexao = mysqli_connect($server, $user, $senha, $banco, $port);

    // $server = "127.0.0.1";
    // $user = "root";
    // $senha = "root";
    // $banco = "agape_db";
    // $conexao = mysqli_connect($server, $user, $senha, $banco, $port);

    if (!$conexao) {
        echo "Erro";
    }
?>