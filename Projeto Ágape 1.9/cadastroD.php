<?php
    include "banco.php";
    function gravar($conexao){

        $sql = "insert into tb_doador(nm_doador, nm_user, email, senha, cpf) values('{$POST['nome-completo']}, '{$POST['nomeusuario']}, '{$POST['email']}, '{$POST['senha']}, '{$POST['documento']})";
        return mysqli_query($conexao, $sql);

    }
?>