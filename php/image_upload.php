<?php

include "banco.php";

$targetDir = "../imagens/";
$targetFile = $targetDir . basename($_FILES["image"]["name"]);


if(!empty($_FILES["image"]["name"])) {
    if(move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
        $imageData = file_get_contents($targetFile);
        $imageData = $conexao->real_escape_string($imageData);
        $insertQuery = "UPDATE TB_ONG SET PIC = '$imageData' WHERE CD_ONG = 1";

        if($conexao->query($insertQuery) === TRUE) {
            echo "Image uploaded and stored in the database.";
            header("location: ../verOngs.php");
        } else {
            echo "Error: " . $insertQuery . "<br>" . $conexao->error;
        }
    } else {
        echo "Failed to upload image.";
    }

    unlink($targetFile);
} else {
    echo "Please select an image to upload.";
}
?>