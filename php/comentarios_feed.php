<?php
include "banco.php";

session_start();

if (!isset($_SESSION["id_doador"])) {
    header("location: ../logindoador.php");
    exit;
}

function gravar($conexao)
{
    $sql = "insert into tb_comment_feed
        (cd_doador, cd_post, texto_comment)
        values 
        ( 
            {$_SESSION['id_doador']},
            {$_GET['id']},
            '{$_POST['comentario']}'
        )";
    return mysqli_query($conexao, $sql);
}
if (gravar($conexao)) {
    header("location: ../Feed.php");
} else {
    echo 'Erro na gravação';
}
