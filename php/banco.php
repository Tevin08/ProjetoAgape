<?php
    $server = "127.0.0.1";
    $user = "root";
    $senha = "password1";
    $banco = "agape_db";
    $conexao = mysqli_connect($server, $user, $senha, $banco);

    if (!$conexao) {
        echo "Erro";
    }
?>