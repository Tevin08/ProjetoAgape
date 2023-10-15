<?php
    $server = "127.0.0.1";
    $user = "root";
    $senha = "root";
    $port = "3307";
    $banco = "agape_db";
    $conexao = mysqli_connect($server, $user, $senha, $banco, $port);

    if (!$conexao) {
        echo "Erro";
    }
?>