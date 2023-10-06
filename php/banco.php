<?php
    $server = "127.0.0.1";
    $user = "root";
    $senha = "root";
    $banco = "ptcc";
    $conexao = mysqli_connect($server, $user, $senha, $banco);

    if (!$conexao) {
        echo "Erro";
    }
?>