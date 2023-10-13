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

while ($dados = $users->fetch_assoc()) {
    if (($_POST['login'] === $dados['cnpj'] || $_POST['login'] === $dados['email']) && password_verify($_POST['senha'], $dados['senha'])) {
        $_SESSION['nm_ong'] = $dados['nm_ong'];
        $_SESSION['cnpj'] = $dados['cnpj'];
        $_SESSION['email_ong'] = $dados['email'];
        $_SESSION['sobre'] = $dados['sobre'];
        $_SESSION['insta'] = $dados['insta'];
        $_SESSION['wpp'] = $dados['wpp'];
        $_SESSION['x'] = $dados['twitter'];
        $_SESSION['pic'] = $dados['pic'];
        header('location: ../MinhaOng.php');
    } else {
        $error = "Login ou senha inválidos";
        $_SESSION['error'] = $error;
        header("location: ../error.php");
        $erro = "";
    }
}
