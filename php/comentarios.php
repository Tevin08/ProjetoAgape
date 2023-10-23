<?php
include "banco.php";

session_start();

function gravar($conexao)
{
    $sql = "insert into tb_coment
        (cd_doador, texto_coment)
        values 
        ( 
            {$_SESSION['id_user']},
            '{$_POST['comentario']}'
        )";
    return mysqli_query($conexao, $sql);
}
if (gravar($conexao)) {
    header( 'location: ../PerfilOngs.php?id=1'); 
}
else {
    echo'Erro na gravação';
}