<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="./css/cadastro.css" />
    <link rel="stylesheet" href="./css/wave.css" />
    <link rel="shortcut icon" href="./imagens/logo.png" type="image/x-icon" />
    <script src="https://kit.fontawesome.com/3552f262a9.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet" />
    <script src="./js/RedefinirSenha.js" defer></script>
    <title>Erro</title>
</head>

<body>

    <div class="logo-2 center_content">
        <div class="campos">
            <div class="div-forms forms-login">
                <button class="btn-voltar" onclick="history.back()">
                    <img width="35px" src="./imagens/arrow.png" alt="ff" />
                </button>
                <h1 style="font-weight: 700; font-size: 30px; margin-bottom: 20px; text-align: center"><?php echo $_SESSION['error'] ?></h1>
                <i class="fa-solid fa-circle-exclamation"></i>
                <h3></h3>
            </div>
        </div>
    </div>
</body>

</html>