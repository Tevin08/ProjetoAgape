<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/wave.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="shortcut icon" href="./imagens/logo.png" type="image/x-icon" />
    <script src="./js/RedefinirSenha.js"></script>
    <title>Redefinir Senha</title>
</head>
<body id="cor-fundo">
    
    <div class="container-box">
        <form  id="form-redefinir" action="POST">

            <img src="./imagens/logo.png" width="70px"  alt="">

            <input placeholder="Digite sua nova senha" type="text" name="nova-senha" id="input-senha-redefinir">
            
            <input placeholder="Confirme a senha" type="text" name="confirmar-nova-senha" id="input-senha-redefinir">
        
            <button id="btn-modal-confirm" onclick="animationbtn ()" type="button">
                Confirmar
            </button>
          
        </form>
    </div>
</body>
</html>