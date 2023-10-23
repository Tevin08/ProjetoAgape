<!DOCTYPE html>
<?php
session_start();

if (isset($_SESSION['id_user'])) {
  header('location: verOngs.php');
  exit();
}
?>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Cadastro Doador</title>
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="stylesheet" href="./css/cadastro.css" />
  <link rel="shortcut icon" href="./imagens/logo.png" type="image/x-icon" />
  <script src="js/script.js " defer></script>
</head>

<body>
  <div class="logo-2 center_content">
    <div class="campos">
      <div class="div-forms">
        <button class="btn-voltar" onclick="location.href='index.html#div-cad'">
          <img width="35px" src="./imagens/arrow.png" alt="ff" />
        </button>
        <h1 style="font-weight: 700">Bem-Vindo ao Projeto Ágape</h1>
        <h3>Preencha os dados a seguir</h3>

        <div class="cadas">
          <form action="./php/cadastroDoador.php" method="post" class="frmcad-1">
            <div class="cadins">
              <div class="cad-1">
                <label for="nome-C">Digite seu nome completo</label>
                <input type="text" name="nome-completo" placeholder="Nome Completo" id="nome-C" />
                <label for="CPF-CNPJ">Digite seu CPF/CNPJ</label>
                <input type="text" placeholder="CPF/CNPJ" name="documento" maxlength="14" id="CPF-CNPJ" />
                <label for="">Digite seu email</label>
                <input type="text" placeholder="Email" name="email" id="email" />
              </div>

              <div class="cad-2">
                <label for="">Digite seu nome de usuário</label>
                <input type="text" placeholder="Nome de Usuário" name="nomeusuario" id="NomeUsuario" />
                <label for="">Crie uma senha</label>
                <input type="password" placeholder="Senha" name="senha" id="senha" />
                <label for="">Confirme sua senha</label>
                <input type="password" placeholder="Confirmar Senha" name="senha-confirmar" id="Csenha" />
              </div>
            </div>
            <div class="ls">
              <input type="checkbox" name="lembrarsenha" id="lembrarsenha" />
              <label id="lbl_ls" for="lembrarsenha">lembrar minha senha
              </label>
            </div>
            <button id="btn-doadorC" type="submit">Cadastrar</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>

</html>