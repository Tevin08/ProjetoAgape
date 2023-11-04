<?php
 include "banco.php";
 session_start();
    function gravar($conexao)
    {
        $sql = "update tb_doador
        set 
        email = '{$_POST['email']}',
        nm_doador = '{$_POST['name']}'
        where cd_doador = '{$_SESSION['id_doador']}'";
        return mysqli_query($conexao, $sql);
    }
    
    if (gravar($conexao)) {
        $targetDir = "../imagens/";
        $targetFile = $targetDir . basename($_FILES["image"]["name"]);
    
        if (!empty($_FILES["image"]["name"])) {
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
                $imageData = file_get_contents($targetFile);
                $imageData = $conexao->real_escape_string($imageData);
                $insertQuery = "UPDATE TB_DOADOR SET FOTO = '$imageData' WHERE CD_DOADOR = '{$_SESSION['id_doador']}'";
    
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
            header('location: ../PerfilDoador.php');
            exit;
        }
    } else {
        echo 'Erro na gravação';
        exit;
    }
    header('location: ../PerfilDoador.php');
?>