<?php
    $server = "127.0.0.1";
    $user = "root";
    $senha = "root";
    $banco = "ptcc";
    $port = "3307";
    $conexao = mysqli_connect($server, $user, $senha, $banco, $port);

    if (!$conexao) {
        echo "Erro";
    }
?>