<?php
    include "banco.php";
    function gravar($conexao) {
        $sql = "insert to tb_ong(nm_representante, nm_ong, email, senha, cnpj) values('{$POST['nome-representante']}, '{$POST['nome-ong']}, {$POST['email']}, {$POST['senha']}, {$POST['documento']}";
        return mysqli_query($conexao, $sql);
    }
?>