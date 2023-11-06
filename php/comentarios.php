<?php
include "banco.php";

session_start();
if (!isset($_SESSION["id_doador"])) {
    header("location: ../logindoador.php");
    exit;
}
function gravar($conexao)
{
    $sql = "insert into tb_comment
        (cd_doador, cd_ong, texto_comment)
        values 
        ( 
            {$_SESSION['id_doador']},
            {$_GET['id']},
            '{$_POST['comentario']}'
        )";
    return mysqli_query($conexao, $sql);
}
if (gravar($conexao)) {
    header("location: ../PerfilOngs.php?id={$_SESSION['get_id_ong']}");
} else {
    echo 'Erro na gravação';
}
