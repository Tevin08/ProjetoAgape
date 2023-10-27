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
                $insertQuery = "UPDATE TB_ONG SET PIC = '$imageData' WHERE CNPJ = '{$_SESSION['cnpj']}'";
    
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
?>