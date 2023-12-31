<?php
session_start();

if (isset($_SESSION['id_user'])) {
  header('location: verOngs.php');
  exit();
}
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
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet" />
  <script src="./js/RedefinirSenha.js" defer></script>
  <title>Login Doador</title>
</head>

<body>
  <div class="container-modal">
    <div class="modal">
      <form action="POST">
        <h1>Digite seu email</h1>
        <div class="content-modal">
          <input type="text" name="" id="email" />
          <div class="modal-btns">
            <button type="button" id="btn-modal-cancel" onclick="modalClose()">
              Cancelar
            </button>
            <button id="btn-modal-avancar">Avançar</button>
          </div>
        </div>
      </form>
    </div>
  </div>

  <div class="logo-2 center_content">
    <div class="campos">
      <div class="div-forms forms-login">
        <button class="btn-voltar" onclick="location.href='index.html#div-cad'">
          <img width="35px" src="./imagens/arrow.png" alt="ff" />
        </button>
        <h1 style="font-weight: 700">Bem-Vindo ao Projeto Ágape</h1>
        <h3>Preencha os dados a seguir</h3>

        <div class="cadas">
          <form action="./php/loginDoador.php" method="post" class="frmcad-1">
            <div class="cad-1">
              <label for="CPF/CNPJ">Digite seu CPF/CNPJ/Email</label>
              <input type="text" placeholder="CPF/CNPJ/Email" name="documento" id="CPF-CNPJ" />
              <!-- <label for="">Digite seu email</label>
              <input type="text" placeholder="email" name="email2" id="emailO" /> -->
              <label for="">Digite sua senha</label>
              <input type="password" placeholder="senha" name="senha" id="senha" />
            </div>
            <!-- <div class="ls">
              <input type="checkbox" name="lembrarsenha" id="lembrarsenha" />

              <label id="lbl_ls" for="lembrarsenha">lembrar minha senha
              </label>
            </div> -->
            <!-- <a onclick="modalShow()">Esqueceu sua senha?</a> -->
            <button id="btn-doadorC" type="submit">Acessar</button>
            <p class="cad-link">Não possui uma conta? <a href="./cadastroDoador.php">Cadastre-se aqui</a></p>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>

</html>