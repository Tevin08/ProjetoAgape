<?php
 include "banco.php";
 session_start();
    function gravar($conexao)
    {
        $sql = "update tb_ong
        set 
        email = '{$_POST['email']}',
        nm_ong = '{$_POST['name']}',
        twitter = '{$_POST['twitter']}',
        insta = '{$_POST['insta']}',
        wpp = '{$_POST['wpp']}'
        where CD_ONG = '{$_SESSION['id_ong']}'";
        return mysqli_query($conexao, $sql);
    }
    
    if (gravar($conexao)) {
        $targetDir = "../imagens/";
        $targetFile = $targetDir . basename($_FILES["image"]["name"]);
    
        if (!empty($_FILES["image"]["name"])) {
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
                $imageData = file_get_contents($targetFile);
                $imageData = $conexao->real_escape_string($imageData);
                $insertQuery = "UPDATE TB_ONG SET PIC = '$imageData' WHERE CD_ONG = '{$_SESSION['id_ong']}'";
    
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
            header('location: ../MinhaOng.php');
            exit;
        }
    } else {
        echo 'Erro na gravação';
        exit;
    }
    header('location: ../MinhaOng.php');
?>