<?php

include "banco.php";

session_start();

$users = usuarios($conexao);
function usuarios($conexao)
{
    $sqlBusca = 'SELECT * FROM tb_doador';
    $resultado = mysqli_query($conexao, $sqlBusca);
    return $resultado;
}

$error = "CNPJ ou senha inválidos";
while ($dados = $users->fetch_assoc()) {
    if (($_POST['documento'] === $dados['cpf']) && password_verify($_POST['senha'], $dados['senha'])) {
        header('location: ../PerfilDoador.php');
    } else {
        echo $error;
        $error = "";
    }
}
