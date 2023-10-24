<?php

include "banco.php";

session_start();

$users = usuarios($conexao);
function usuarios($conexao)
{
    $sqlBusca = 'SELECT * FROM TB_USERS WHERE TIPO_USER = "ONG"';
    $resultado = mysqli_query($conexao, $sqlBusca);
    return $resultado;
}

while ($dados = $users->fetch_assoc()) {
    if (($_POST['login'] === $dados['LOGIN']) && password_verify($_POST['senha'], $dados['SENHA'])) {
        $_SESSION['id_user'] = $dados['CD_USER'];
        $_SESSION['id_ong'] = $dados['CD_ONG'];
        $_SESSION['nm_ong'] = $dados['NM_ONG'];
        $_SESSION['cnpj'] = $dados['LOGIN'];
        $_SESSION['email_ong'] = $dados['EMAIL'];
        $_SESSION['sobre'] = $dados['SOBRE'];
        $_SESSION['insta'] = $dados['INSTA'];
        $_SESSION['wpp'] = $dados['WPP'];
        $_SESSION['x'] = $dados['TWITTER'];
        $_SESSION['pic'] = $dados['PIC'];
        header('location: ../MinhaOng.php');
        exit;
    } else {
        $error = "Login ou senha inválidos";
        $_SESSION['error'] = $error;
        header("location: ../error.php");
        $erro = "";
    }
}
