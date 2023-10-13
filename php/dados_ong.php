<?php

include "banco.php";

session_start();

function gravar($conexao)
{
    $sql = "update tb_ong
    set 
    sobre = '{$_POST['sobre_ong']}',
    insta = '{$_POST['insta']}',
    wpp = '{$_POST['wpp']}',
    twitter = '{$_POST['x']}'
    where CNPJ = '{$_SESSION['cnpj']}'";
    return mysqli_query($conexao, $sql);
}

if (gravar($conexao)) {
    $targetDir = "../imagens/";
    $targetFile = $targetDir . basename($_FILES["image"]["name"]);

    if (!empty($_FILES["image"]["name"])) {
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
            $imageData = file_get_contents($targetFile);
            $imageData = $conexao->real_escape_string($imageData);
            $insertQuery = "UPDATE TB_ONG SET PIC = '$imageData' WHERE INSTA = '{$_POST['insta']}'";

            if ($conexao->query($insertQuery) === TRUE) {
                echo "Image uploaded and stored in the database.";
            } else {
                echo "Error: " . $insertQuery . "<br>" . $conexao->error;
                exit;
            }
        } else {
            echo "Failed to upload image.";
            exit;
        }

        unlink($targetFile);
    } else {
        echo "Please select an image to upload.";
        exit;
    }
} else {
    echo 'Erro na gravação';
    exit;
}

$users = usuarios($conexao);
function usuarios($conexao)
{
    $sqlBusca = 'SELECT * FROM tb_ong';
    $resultado = mysqli_query($conexao, $sqlBusca);
    return $resultado;
}

while ($dados = $users->fetch_assoc()) {
    $_SESSION['nm_ong'] = $dados['nm_ong'];
    $_SESSION['cnpj'] = $dados['cnpj'];
    $_SESSION['email_ong'] = $dados['email'];
    $_SESSION['sobre'] = $dados['sobre'];
    $_SESSION['insta'] = $dados['insta'];
    $_SESSION['wpp'] = $dados['wpp'];
    $_SESSION['x'] = $dados['twitter'];
    $_SESSION['pic'] = $dados['pic'];
}

header('location: ../MinhaOng.php');
