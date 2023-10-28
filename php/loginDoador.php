<?php

include "banco.php";

session_start();

$users = usuarios($conexao);
function usuarios($conexao)
{
    $sqlBusca = 'SELECT * FROM TB_USERS WHERE TIPO_USER = "Doador"';
    $resultado = mysqli_query($conexao, $sqlBusca);
    return $resultado;
}

while ($dados = $users->fetch_assoc()) {
    if (($_POST['documento'] === $dados['LOGIN_CNPJ']) || ($_POST['documento'] === $dados['LOGIN_EMAIL']) && password_verify($_POST['senha'], $dados['SENHA'])) {
        // $_SESSION['nm_doador'] = $dados['nm_doador'];
        $_SESSION['documento'] = $dados['LOGIN_EMAIL'];
        $_SESSION['id_user'] = $dados['CD_USER'];
        $_SESSION['id_doador'] = $dados['CD_DOADOR'];
        // $_SESSION['nm_user'] = $dados['nm_user'];
        header('location: ../PerfilDoador.php');
        exit;
    } else {
        $error = "Login ou senha inválidos";
        $_SESSION['error'] = $error;
        header("location: ../error.php");
        $erro = "";
    }
}
