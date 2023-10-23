<?php
include "banco.php";
function gravar($conexao)
{
    $sql = "insert into tb_coment
        (texto_coment)
        values
        (
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