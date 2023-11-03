<?php
include "banco.php";

session_start();

    $targetDir = "../imagens/";
    $targetFile = $targetDir . basename($_FILES["image"]["name"]);

    if (!empty($_FILES["image"]["name"])) {
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
            $imageData = file_get_contents($targetFile);
            $imageData = $conexao->real_escape_string($imageData);
            $insertQuery = "insert into tb_post
            (cd_ong, texto_post, titulo, imagem_post)
            values 
            ( 
                {$_SESSION['id_ong']},
                '{$_POST['texto']}',
                '{$_POST['tituloPost']}',
                '$imageData'
            )";

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
    header("location: ../MinhaOng.php");