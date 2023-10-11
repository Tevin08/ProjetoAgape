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
    if (($_POST['documento'] === $dados['documento']) && password_verify($_POST['senha'], $dados['senha'])) {
        $_SESSION['nm_doador'] = $dados['nm_doador'];
        $_SESSION['documento'] = $dados['documento'];
        $_SESSION['email'] = $dados['email'];
        $_SESSION['nm_user'] = $dados['nm_user'];
        header('location: ../PerfilDoador.php');
    } else {
        echo $error;
        $_SESSION['error'] = $error;
        header("location: ../error.php");
        $error = "";
    }
}
