<?php
include "banco.php";

session_start();

function gravar($conexao)
{
    $sql = "insert into tb_comment
        (cd_doador, texto_comment)
        values 
        ( 
            {$_SESSION['id_doador']},
            '{$_POST['comentario']}'
        )";
    return mysqli_query($conexao, $sql);
}
if (gravar($conexao)) {
    header("location: ../PerfilOngs.php?id={$_SESSION['get_id_ong']}");
} else {
    echo 'Erro na gravação';
}
