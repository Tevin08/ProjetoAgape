<?php

include "banco.php";

session_start();

$users = usuarios($conexao);
function usuarios($conexao)
{
    $sqlBusca = 'SELECT * FROM tb_ong';
    $resultado = mysqli_query($conexao, $sqlBusca);
    return $resultado;
}

$error = "CNPJ ou senha inválidos";
while ($dados = $users->fetch_assoc()) {
    if (($_POST['CNPJ'] === $dados['cnpj']) && password_verify($_POST['senha'], $dados['senha'])) {
        header('location: ../PerfilOngs.html');
    } else {
        echo $error;
        $error = "";
    }
}
